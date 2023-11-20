<?php
include 'header.php';
include 'conn.php';
include 'sidebar.php';
?>
<title>PlayDio</title>
<!-- Sidebar -->

<!-- Main Content -->
<!-- Banner -->
<div class="container">
    <?php include('assets/includes/chips.php'); ?>
    <!-- <div class="video-container">
        <?php
        // include 'conn.php';

        // $sql = "SELECT videos.*, channels.*, COUNT(*) as total_views
        // FROM videos
        // INNER JOIN channels ON videos.channel_id = channels.c_id
        // LEFT JOIN views ON videos.v_id = views.video_id
        // GROUP BY videos.v_id";
        // $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result) > 0) {
        //   while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="videos">
                    <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" target="_blank">
                        <img src="video_thumbnail/<?php echo $row['v_thumbnail']; ?>" class="thumbnail">
                    </a>
                    <div class="flex-div">
                        <img src="channel_img/<?php echo $row['c_profile']; ?>">
                        <div class="video-info">
                            <a href="#"><?php echo $row['v_title']; ?></a>
                            <div id="title-tooltip" class="title-tooltip"></div>
                            <p class="channel-name"><?php echo $row['c_title']; ?></p>
                            <p><?php echo $row['total_views']; ?> Views &bull; 2 days ago</p>
                        </div>
                    </div>
                </div>
        <?php
        //     }
        // } else {
        //     echo 'No Videos';
        // }
        ?>



    </div> -->

    <div class="video-container">
        <?php
        include 'conn.php';
        $sql = "SELECT videos.*, channels.* FROM videos
        INNER JOIN channels ON videos.channel_id = channels.c_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $videoDate = $row['v_added_d'];
                $videoTime = $row['v_added_t'];
                // Convert video date and time to a DateTime object
                $videoDateTime = new DateTime($videoDate . ' ' . $videoTime);
                // Get the current DateTime object
                $currentDateTime = new DateTime();
                // Calculate the time difference
                $timeDifference = $currentDateTime->diff($videoDateTime);
                // Format the time ago
                $timeAgo = '';
                if ($timeDifference->y > 0) {
                    $timeAgo .= $timeDifference->y . ' year' . ($timeDifference->y > 1 ? 's' : '') . ' ago';
                } elseif ($timeDifference->m > 0) {
                    $timeAgo .= $timeDifference->m . ' month' . ($timeDifference->m > 1 ? 's' : '') . ' ago';
                } elseif ($timeDifference->d > 0) {
                    $timeAgo .= $timeDifference->d . ' day' . ($timeDifference->d > 1 ? 's' : '') . ' ago';
                } elseif ($timeDifference->h > 0) {
                    $timeAgo .= $timeDifference->h . ' hour' . ($timeDifference->h > 1 ? 's' : '') . ' ago';
                } elseif ($timeDifference->i > 0) {
                    $timeAgo .= $timeDifference->i . ' minute' . ($timeDifference->i > 1 ? 's' : '') . ' ago';
                } else {
                    $timeAgo = 'just now';
                }
        ?>
                <div class="videos">
                    <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" target="_blank" class="video_a">
                        <img src="video_thumbnail/<?php echo $row['v_thumbnail']; ?>" class="thumbnail">

                    </a>
                    <div class="watch_later">
                        <a href="#" class="watch-later-btn" data-video-id="<?php echo $row['v_id']; ?>">
                            <svg width="24" viewBox="0 0 24 24" stroke-width="1.7" stroke="var(--white)" fill="var(--black)" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path stroke-width="1.7" stroke="var(--white)" d="M12 12l2 3" />
                                <path stroke-width="1.7" stroke="var(--white)" d="M12 7v5" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex-div">
                        <img src="channel_img/<?php echo $row['c_profile']; ?>">
                        <div class="video-info">
                            <a href="#"><?php echo $row['v_title']; ?></a>
                            <div id="title-tooltip" class="title-tooltip"></div>
                            <p class="channel-name"><?php echo $row['c_title']; ?></p>
                            <p><?php echo $row['v_views']; ?> views &bull; <?php echo $timeAgo ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo 'No Videos';
        }
        ?>
    </div>
    <div id="toast-notification" class="toast-notification"></div>


    <script>
        // jQuery document ready function to handle button click
        $(document).ready(function() {
            // Attach click event to the "Watch Later" button
            $('.watch-later-btn').on('click', function(event) {
                event.preventDefault();

                // Get the video ID from the data attribute
                const videoId = $(this).data('video-id');

                // Send an AJAX request to the server to add the video to Watch Later
                $.ajax({
                    url: 'controllers/watch-later.php',
                    type: 'POST',
                    data: {
                        add_to_watch_later: 1,
                        v_id: videoId
                    },
                    dataType: 'json',
                    success: function(response) {
                        // Handle the response from the server
                        if (response.status === 'success') {
                            // Display a success message
                            showNotification(response.message, 'success');
                        } else if (response.status === 'error') {
                            // Display an error message
                            showNotification(response.message, 'error');
                        } else {
                            // Handle other scenarios if needed
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if any
                    }
                });
            });

            // Function to show toast notification
            function showNotification(message, type) {
                const toastNotification = $('#toast-notification');
                toastNotification.text(message);

                // Add a class based on the type (success, error, etc.) for custom styling
                if (type === 'success') {
                    toastNotification.removeClass().addClass('toast-notification toast-success');
                } else if (type === 'error') {
                    toastNotification.removeClass().addClass('toast-notification toast-error');
                } else {
                    toastNotification.removeClass().addClass('toast-notification');
                }

                // Show the toast notification
                toastNotification.fadeIn().delay(3000).fadeOut();
            }

        });
    </script>


    <!-- number to K , M and B -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var number = document.getElementById("number").value;
            var result = document.getElementById("result");
            if (number < 0) {
                result.innerHTML = 'Value cannot be negative';
            }
            if (number > 0 && number < 1000) {
                result.innerHTML = number;
            } else if (number >= 1000 && number < 1_000_000) {
                result.innerHTML = (number / 1000).toFixed(1).replace(/\.0$/, "") + "K";
            } else if (number >= 1_000_000 && number < 1_000_000_000) {
                result.innerHTML = (number / 1_000_000).toFixed(1).replace(/\.0$/, "") + "M";
            } else if (number >= 1_000_000_000 && number < 1_000_000_000_000) {
                result.innerHTML = (number / 1_000_000_000).toFixed(1).replace(/\.0$/, "") + "B";
            } else if (number >= 1_000_000_000_000 && number < 1_000_000_000_000_000) {
                result.innerHTML = (number / 1_000_000_000_000).toFixed(1).replace(/\.0$/, "") + "T";
            }
        });
    </script>

    <script>
        const textContainer = document.querySelectorAll('.video-info a');
        const tooltip = document.getElementById('title-tooltip');
        textContainer.addEventListener('mouseover', () => {
            tooltip.innerText = textContainer.innerText;
            // tooltip.textContent = textContainer.textContent;
            tooltip.style.display = 'block';
        });
        textContainer.addEventListener('mouseout', () => {
            tooltip.style.display = 'none';
        });
        // textContainer.addEventListener('mouseover', () => {
        //     const lineHeight = parseFloat(getComputedStyle(textContainer).lineHeight);
        //     const containerHeight = textContainer.clientHeight;
        //     const totalLines = Math.round(containerHeight / lineHeight);

        //     if (totalLines > 1) {
        //         tooltip.textContent = textContainer.textContent;
        //         tooltip.style.display = 'block';
        //     }
        // });

        // textContainer.addEventListener('mouseout', () => {
        //     tooltip.style.display = 'none';
        // });
    </script>

    <!-- JS File Links -->
    <script src="assets/js/script.js" defer></script>
    </body>

    </html>