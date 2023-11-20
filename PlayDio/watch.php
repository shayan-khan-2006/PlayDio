<style>
    .chips-container {
        display: none;
    }
</style>
<?php include('header.php'); ?>
<title>PlayDio</title>

<style>
    .nav-left .menu-icon {
        display: none;
    }
</style>
<div class="container play-container">
    <div class="row">
        <div class="play-video">
            <div class="pcontainer show-controls">
                <div class="turn-light">
                    <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--white)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                        <path d="M11.089 7.083a5 5 0 0 1 5.826 5.84m-1.378 2.611a5.012 5.012 0 0 1 -.537 .466a3.5 3.5 0 0 0 -1 3a2 2 0 1 1 -4 0a3.5 3.5 0 0 0 -1 -3a5 5 0 0 1 -.528 -7.544" />
                        <path d="M9.7 17h4.6" />
                        <path d="M3 3l18 18" />
                    </svg>
                </div>
                <script>
                    //dark/light mode
                    const TurnOff = document.querySelector('.turn-light');
                    const BodyDiv = document.querySelector('body');
                    TurnOff.onclick = function() {
                        BodyDiv.classList.toggle("b-dark");
                    };
                </script>
                <div class="pwrapper">
                    <div class="video-timeline">
                        <div class="progress-area">
                            <span>00:00</span>
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                    <ul class="video-controls">
                        <li class="options left">
                            <button class="volume">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--white-unchanged)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M15 8a5 5 0 0 1 0 8" />
                                    <path d="M17.7 5a9 9 0 0 1 0 14" />
                                    <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
                                </svg>
                            </button>
                            <input type="range" min="0" max="1" step="any">
                            <div class="video-timer">
                                <p class="current-time">00:00</p>
                                <p class="separator"> / </p>
                                <p class="video-duration">00:00</p>
                            </div>
                        </li>
                        <li class="options center">
                            <button class="skip-backward">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--white)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20.341 4.247l-8 7a1 1 0 0 0 0 1.506l8 7c.647 .565 1.659 .106 1.659 -.753v-14c0 -.86 -1.012 -1.318 -1.659 -.753z" stroke-width="0" fill="currentColor" />
                                    <path d="M9.341 4.247l-8 7a1 1 0 0 0 0 1.506l8 7c.647 .565 1.659 .106 1.659 -.753v-14c0 -.86 -1.012 -1.318 -1.659 -.753z" stroke-width="0" fill="currentColor" />
                                </svg>
                            </button>
                            <button class="play-pause">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--white)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="currentColor" />
                                </svg>
                            </button>
                            <button class="skip-forward">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-track-next-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--white)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M2 5v14c0 .86 1.012 1.318 1.659 .753l8 -7a1 1 0 0 0 0 -1.506l-8 -7c-.647 -.565 -1.659 -.106 -1.659 .753z" stroke-width="0" fill="currentColor" />
                                    <path d="M13 5v14c0 .86 1.012 1.318 1.659 .753l8 -7a1 1 0 0 0 0 -1.506l-8 -7c-.647 -.565 -1.659 -.106 -1.659 .753z" stroke-width="0" fill="currentColor" />
                                </svg>
                            </button>
                        </li>
                        <li class="options right">
                            <div class="playback-content">
                                <button class="playback-speed">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="var(--white-unchanged)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M5.636 19.364a9 9 0 1 1 12.728 0" />
                                        <path d="M16 9l-4 4" />
                                    </svg>
                                </button>
                                <ul class="speed-options">
                                    <li data-speed="2">2x</li>
                                    <li data-speed="1.5">1.5x</li>
                                    <li data-speed="1" class="active">Normal</li>
                                    <li data-speed="0.75">0.75x</li>
                                    <li data-speed="0.5">0.5x</li>
                                </ul>
                            </div>
                            <button class="pic-in-pic"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-picture-in-picture" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="var(--white-unchanged)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M11 19h-6a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4" />
                                    <path d="M14 14m0 1a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1z" />
                                </svg>
                            </button>
                            <button class="fullscreen">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-maximize" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="var(--white-unchanged)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
                                    <path d="M4 16v2a2 2 0 0 0 2 2h2" />
                                    <path d="M16 4h2a2 2 0 0 1 2 2v2" />
                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
                <?php
                include 'conn.php';

                $video_id = $_GET['v_id'];

                $sql = "SELECT videos.*, channels.* 
                FROM videos
                INNER JOIN channels ON videos.channel_id = channels.c_id where videos.v_id=$video_id";
                // $sql = "SELECT * FROM videos where v_id=$video_id";
                $result = mysqli_query($conn, $sql);

                $sql_update_views = "UPDATE videos SET v_views = v_views + 1 WHERE v_id = $video_id";
                $result_update_views = mysqli_query($conn, $sql_update_views);

                // Fetch the updated view count for the video
                $sql_total_views = "SELECT v_views FROM videos WHERE v_id = $video_id";
                $result_total_views = mysqli_query($conn, $sql_total_views);
                $row_total_views = mysqli_fetch_assoc($result_total_views);
                $total_views = $row_total_views['v_views'];

                if (isset($_SESSION['uid'])) {
                    $user_id = $_SESSION['uid']; // Replace with the actual user ID

                    // Get the channel ID from the database or any other method you use to fetch the video information
                    if (isset($row['c_id'])) {
                        $channel_id = $row['c_id']; // Replace with the actual channel ID

                        $sql_check_subscription = "SELECT COUNT(*) AS count FROM subscribers WHERE channel_id = ? AND user_id = ?";
                        $stmt = mysqli_prepare($conn, $sql_check_subscription);
                        mysqli_stmt_bind_param($stmt, "ii", $channel_id, $user_id);
                        mysqli_stmt_execute($stmt);
                        $result_check_subscription = mysqli_stmt_get_result($stmt);
                        $row_check_subscription = mysqli_fetch_assoc($result_check_subscription);
                        $isSubscribed = ($row_check_subscription['count'] > 0);

                        mysqli_stmt_close($stmt);
                    }
                }



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
                        <video src="Videos/<?php echo $row['v_file_path']; ?>"></video>

            </div>

            <div class="play-video-tags">
                <a href="?coding">#Coding</a>
                <a href="?html">#HTML</a>
                <a href="?css">#CSS</a>
                <a href="?javascript">#JavaScript</a>
                <a href="?youtubeclone">#YoutubeClone</a>
            </div>
            <div class="play-video-title">
                <h3 class="pointer">
                    <?php echo $row['v_title']; ?>
                </h3>
            </div>
            <div class="play-video-info">
                <!-- Display the total view count -->
                <p><?php echo $total_views; ?> Views &bull; <?php echo $timeAgo ?></p>
                <div class="play-video-links">
                    <div>
                        <button class="like-btn" data-video-id="<?php echo $row['v_id']; ?>">
                            <svg id="like-animation" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 11v8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3" />
                            </svg>
                        </button>
                        <p>Like</p>
                    </div>
                    <!-- <script>
                        const likeButton = document.getElementById("like-animation");

                        likeButton.addEventListener("click", () => {
                            likeButton.classList.add("animate");
                            likeButton.classList.add("active");

                            // Remove the animation class after the animation ends
                            setTimeout(() => {
                                likeButton.classList.remove("animate");
                            }, 500); // Same duration as the animation (0.6s)
                        });
                    </script> -->

                    <!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
                    <!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
                    <!-- Inside the <script> tag in watch.php -->
                    <script>
                        $(document).ready(function() {
                            $(".like-btn").on("click", function(e) {
                                e.preventDefault();

                                // Check if the user is logged in
                                <?php if (isset($_SESSION['uid'])) { ?>
                                    // If logged in, proceed with the like action
                                    const likeButton = $(this);
                                    const videoId = likeButton.data("video-id");

                                    // Make an AJAX request to like/unlike the video
                                    $.ajax({
                                        type: "POST",
                                        url: "controllers/like.php",
                                        data: {
                                            video_id: videoId
                                        },
                                        success: function(response) {
                                            // Handle the response from the PHP script (optional)
                                            if (response === "liked") {
                                                // If the like is successful, update the like count on the page
                                                const likeCountElement = likeButton.siblings(".like-count");
                                                const currentLikeCount = parseInt(likeCountElement.text());
                                                likeCountElement.text(currentLikeCount + 1);

                                                // Add the animation classes
                                                likeButton.addClass("animate");
                                                likeButton.addClass("active");

                                                // Remove the animation classes after the animation ends
                                                setTimeout(() => {
                                                    likeButton.removeClass("animate");
                                                    likeButton.removeClass("active");
                                                }, 500); // Same duration as the animation (0.5s)

                                                // Update the button state to indicate that the user has liked the video
                                                likeButton.data("is-liked", true);
                                            } else if (response === "unliked") {
                                                // If the user has unliked the video, update the like count on the page
                                                const likeCountElement = likeButton.siblings(".like-count");
                                                const currentLikeCount = parseInt(likeCountElement.text());
                                                likeCountElement.text(currentLikeCount - 1);

                                                // Update the button state to indicate that the user has unliked the video
                                                likeButton.data("is-liked", false);
                                            } else if (response === "already_liked") {
                                                // If the user has already liked the video, show a message (optional)
                                                alert("You have already liked this video.");
                                            } else if (response === "not_logged_in") {
                                                // If the user is not logged in, show an alert
                                                alert("Please log in to like the video.");
                                            } else {
                                                // If there was an error, display an error message (optional)
                                                alert("Error liking the video. Please try again later.");
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            // Handle AJAX errors (optional)
                                            alert("An error occurred. Please try again later.");
                                        }
                                    });
                                <?php } else { ?>
                                    // If not logged in, show an alert
                                    alert("Please log in to like the video.");
                                <?php } ?>
                            });
                        });
                    </script>



                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 13v-8a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v7a1 1 0 0 0 1 1h3a4 4 0 0 1 4 4v1a2 2 0 0 0 4 0v-5h3a2 2 0 0 0 2 -2l-1 -5a2 3 0 0 0 -2 -2h-7a3 3 0 0 0 -3 3" />
                        </svg>
                        <p>Dislike</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-share-3" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M13 4v4c-6.575 1.028 -9.02 6.788 -10 12c-.037 .206 5.384 -5.962 10 -6v4l8 -7l-8 -7z" />
                        </svg>
                        <p>Share</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-download" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 11l5 5l5 -5" />
                            <path d="M12 4l0 12" />
                        </svg>
                        <p>Download</p>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-flag" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0v9a5 5 0 0 1 -7 0a5 5 0 0 0 -7 0v-9z" />
                            <path d="M5 21v-7" />
                        </svg>
                        <p>Report</p>
                    </div>
                </div>

            </div>
            <hr class="line_break">
            <div class="play-channel">
                <img src="channel_img/<?php echo $row['c_profile']; ?>">
                <div class="play-channel-info">
                    <h3><?php echo $row['c_title']; ?>
                        <svg viewBox="0 0 24 24" aria-hidden="true" width="18" height="18" class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-1yjpyg1 r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr" xmlns="http://www.w3.org/2000/svg">
                            <title>Verified</title>
                            <g id="g963" style="fill:#1d9bf0;fill-opacity:1">
                                <path d="M22.25 12c0-1.43-.88-2.67-2.19-3.34.46-1.39.2-2.9-.81-3.91s-2.52-1.27-3.91-.81c-.66-1.31-1.91-2.19-3.34-2.19s-2.67.88-3.33 2.19c-1.4-.46-2.91-.2-3.92.81s-1.26 2.52-.8 3.91c-1.31.67-2.2 1.91-2.2 3.34s.89 2.67 2.2 3.34c-.46 1.39-.21 2.9.8 3.91s2.52 1.26 3.91.81c.67 1.31 1.91 2.19 3.34 2.19s2.68-.88 3.34-2.19c1.39.45 2.9.2 3.91-.81s1.27-2.52.81-3.91c1.31-.67 2.19-1.91 2.19-3.34zm-11.71 4.2L6.8 12.46l1.41-1.42 2.26 2.26 4.8-5.23 1.47 1.36-6.2 6.77z" style="fill:var(--main-color);fill-opacity:1" />
                            </g>
                        </svg>
                    </h3>
                    <span>
                        <div id="convertNo"><?php echo $row['c_subscribers']; ?></div> Subscriber
                    </span>

                </div>

        <?php

                        // Get the channel ID from the database or any other method you use to fetch the video information
                        $channel_id = $row['c_id'];
                    }
                } else {
                    echo 'No Videos';
                }

                $isSubscribed = false; // Default value

                if (isset($_SESSION['uid'])) {
                    // Check if the user is already subscribed to the channel
                    $user_id = $_SESSION['uid'];

                    $sql = "SELECT COUNT(*) AS count FROM subscribers WHERE channel_id = ? AND user_id = ?";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ii", $channel_id, $user_id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    $row = mysqli_fetch_assoc($result);
                    $isSubscribed = ($row['count'] > 0);

                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                }

        ?>

        <!-- Subscribe/Unsubscribe Button -->
        <button type="submit" class="subscribe-btn" data-channel-id="<?php echo $channel_id; ?>">
            <?php echo $isSubscribed ? 'Unsubscribe' : 'Subscribe';  ?>
        </button>


        <!-- Subscribe Ajax code -->
        <script>
            $(document).ready(function() {
                $(".subscribe-btn").on("click", function(e) {
                    e.preventDefault();

                    // Get the channel ID from the data attribute of the button
                    const channelId = $(this).data("channel-id");

                    // Make an AJAX request to subscribe/unsubscribe the user to/from the channel
                    $.ajax({
                        type: "POST",
                        url: "controllers/subscribe.php",
                        data: {
                            channel_id: channelId
                        },
                        success: function(response) {
                            // Handle the response from the PHP script (optional)
                            if (isLogin === "not_logged_in") {
                                // If the user is now subscribed, update the button text
                                alert("Please login first to subscribe channels.");
                            } else if (response === "subscribed") {
                                // If the user is now subscribed, update the button text
                                $(".subscribe-btn").text("Unsubscribe");
                            } else if (response === "unsubscribed") {
                                // If the user is now unsubscribed, update the button text
                                $(".subscribe-btn").text("Subscribe");
                            } else {
                                // If there was an error, display an error message (optional)
                                alert("Error subscribing/unsubscribing to the channel.");
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle AJAX errors (optional)
                            alert("An error occurred. Please try again later.");
                        }
                    });
                });
            });
        </script>

            </div>

            <div class="play-video-desc">
                <p>
                    <?php
                    include 'conn.php';
                    $video_id = $_GET['v_id'];
                    $sql = "SELECT * FROM videos where v_id=$video_id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <?php echo $row['v_description']; ?>
                    <?php
                        }
                    }
                    ?>
                    <span id="showMore">Show More</span>
                </p>
            </div>

            <script>
                const textContainer = document.querySelector('.play-video-desc p');
                const showMoreSpan = document.getElementById('showMore');
                let isExpanded = false;

                showMoreSpan.addEventListener('click', () => {
                    if (!isExpanded) {
                        textContainer.style.maxHeight = 'unset';
                        textContainer.style.webkitLineClamp = 'unset';
                        showMoreSpan.textContent = 'Show Less';
                    } else {
                        textContainer.style.maxHeight = '3em';
                        textContainer.style.webkitLineClamp = '2';
                        showMoreSpan.textContent = 'Show More';
                    }
                    isExpanded = !isExpanded;
                });

                function sub_click() {
                    var sub_btn = document.querySelector(".subscribe-btn");
                    sub_btn.innerHTML = "Subscribed";
                    sub_btn.classList.add("active");
                }

                window.onload = function formatCompactNumber() {
                    var number = parseFloat(document.getElementById("convertNo").textContent);
                    if (isNaN(number) || number < 0) {
                        document.getElementById("convertNo").textContent = 'Value cannot be negative';
                    } else if (number < 1000) {
                        document.getElementById("convertNo").textContent = number;
                    } else if (number >= 1000 && number < 1_000_000) {
                        document.getElementById("convertNo").textContent = (number / 1000).toFixed(1).replace(/\.0$/, "") + "K";
                    } else if (number >= 1_000_000 && number < 1_000_000_000) {
                        document.getElementById("convertNo").textContent = (number / 1_000_000).toFixed(1).replace(/\.0$/, "") + "M";
                    } else if (number >= 1_000_000_000 && number < 1_000_000_000_000) {
                        document.getElementById("convertNo").textContent = (number / 1_000_000_000).toFixed(1).replace(/\.0$/, "") + "B";
                    } else if (number >= 1_000_000_000_000 && number < 1_000_000_000_000_000) {
                        document.getElementById("convertNo").textContent = (number / 1_000_000_000_000).toFixed(1).replace(/\.0$/, "") + "T";
                    }
                }
            </script>

            <div class="flex-div2">
                <h4>245 Comments
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sort-ascending sort-icon" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--text-color)" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: -5px; margin-left: 30px;">
                            <title>Sort</title>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l7 0" />
                            <path d="M4 12l9 0" />
                            <path d="M4 18l16 0" />
                            <!-- <path d="M15 9l3 -3l3 3" />
                            <path d="M18 6l0 12" /> -->
                        </svg>
                    </span>
                </h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up show-up" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="#5a5a5a" fill="none" stroke-linecap="round" stroke-linejoin="round" id="show-up">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M6 15l6 -6l6 6" />
                </svg>
                <!-- <i class="fa-solid fa-chevron-up show-up" id="show-up"></i> -->
            </div>
            <div class="overflow-comment">
                <div class="comments" id="comment-sec">
                    <div class="add-comment">
                        <img src="assets/images/Jack.png">
                        <input type="text" placeholder="Add a Comment...">
                    </div>

                    <div class="old-comment">
                        <img src="assets/images/megan.png">
                        <div class="comment-text">
                            <h3>Megan Nelson <span>2 days ago</span></h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,
                                vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum
                                praesentium culpa expedita. Reiciendis, error?
                            </p>
                            <div class="comment-action">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span>244</span>
                                <i class="fa-regular fa-thumbs-down"></i>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="old-comment">
                        <img src="assets/images/megan.png">
                        <div class="comment-text">
                            <h3>Megan Nelson <span>2 days ago</span></h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,
                                vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum
                                praesentium culpa expedita. Reiciendis, error?
                            </p>
                            <div class="comment-action">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span>244</span>
                                <i class="fa-regular fa-thumbs-down"></i>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="old-comment">
                        <img src="assets/images/megan.png">
                        <div class="comment-text">
                            <h3>Megan Nelson <span>2 days ago</span></h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi qui natus aliquam beatae,
                                vel possimus quis adipisci deserunt, commodi esse autem culpa? Ducimus porro voluptatum
                                praesentium culpa expedita. Reiciendis, error?
                            </p>
                            <div class="comment-action">
                                <i class="fa-regular fa-thumbs-up"></i>
                                <span>244</span>
                                <i class="fa-regular fa-thumbs-down"></i>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var show_up = document.getElementById("show-up");
            var commentSec = document.getElementById("comment-sec");
            show_up.onclick = function() {
                show_up.classList.toggle("rotate_180");
                commentSec.classList.toggle("show-com");
            };
        </script>

        <div class="chips-container">
            <!-- <div class="chip-arrow-icon">
                <div class="chip-icon-left">&#8249;</div>
            </div> -->
            <div class="chip-box">
                <a href="#" class="chip chip-explore">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-edge" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M20.978 11.372a9 9 0 1 0 -1.593 5.773" />
                        <path d="M20.978 11.372c.21 2.993 -5.034 2.413 -6.913 1.486c1.392 -1.6 .402 -4.038 -2.274 -3.851c-1.745 .122 -2.927 1.157 -2.784 3.202c.28 3.99 4.444 6.205 10.36 4.79" />
                        <path d="M3.022 12.628c-.283 -4.043 8.717 -7.228 11.248 -2.688" />
                        <path d="M12.628 20.978c-2.993 .21 -5.162 -4.725 -3.567 -9.748" />
                    </svg>
                </a>
                <a href="#" class="chip active">All</a>
                <a href="#" class="chip newtoyou">
                    <span>
                        New To You
                    </span>
                </a>
                <a href="#" class="chip">Coding</a>
                <a href="#" class="chip">Pakistan</a>
                <a href="#" class="chip">Comedy</a>
                <a href="#" class="chip">Karachi</a>
                <a href="#" class="chip">Cricket</a>
                <a href="#" class="chip">Muslim</a>
                <a href="#" class="chip">Elections</a>
                <a href="#" class="chip">Gaming</a>
                <a href="#" class="chip">Snooker</a>
                <a href="#" class="chip">Football</a>
                <a href="#" class="chip">Youtuber</a>
                <a href="#" class="chip">Vlogging</a>
                <a href="#" class="chip">New To you</a>
            </div>
            <!-- <div class="chip-arrow-icon">
                <div class="chip-icon-right">&#8250;</div>
            </div> -->
        </div>
        <!-- Drag Functionality -->
        <script>
            const tabsBox = document.querySelector(".chip-box"),
                allTabs = document.querySelectorAll(".chip"),
                arrowIcons = document.querySelectorAll(".chip-arrow-icon div");

            let isDragging = false;

            const handleIcons = (scrollVal) => {
                let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
                arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
                arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
            }

            // arrowIcons.forEach(icon => {
            //     icon.addEventListener("click", () => {
            //         // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
            //         let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
            //         handleIcons(scrollWidth);
            //     });
            // });

            allTabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    tabsBox.querySelector(".active").classList.remove("active");
                    tab.classList.add("active");
                });
            });

            const dragging = (e) => {
                if (!isDragging) return;
                tabsBox.classList.add("dragging");
                tabsBox.scrollLeft -= e.movementX;
                handleIcons(tabsBox.scrollLeft)
            }

            const dragStop = () => {
                isDragging = false;
                tabsBox.classList.remove("dragging");
            }

            tabsBox.addEventListener("mousedown", () => isDragging = true);
            tabsBox.addEventListener("mousemove", dragging);
            document.addEventListener("mouseup", dragStop);
        </script>

        <div class="right-sidebar">
            <?php
            include 'conn.php';

            $video_id = $_GET['v_id'];

            $sql = "SELECT v2.*, ch.*, 
            SUM(
                CASE
                    WHEN v1.v_keyword LIKE CONCAT(v2.v_keyword, '%') OR v1.v_keyword LIKE CONCAT('%', v2.v_keyword) OR v1.v_keyword LIKE CONCAT('%', v2.v_keyword , '%') THEN 1
                    ELSE 0
                END
            ) AS match_count
            FROM videos v1
            INNER JOIN videos v2 ON v1.v_keyword LIKE CONCAT('%', v2.v_keyword, '%')
            INNER JOIN channels ch ON v2.channel_id = ch.c_id
            WHERE v1.v_id = $video_id AND v2.v_id <> $video_id
            GROUP BY v2.v_id
            ORDER BY match_count DESC;";

            // $sql = "SELECT * FROM videos where v_id=$video_id";
            $result = mysqli_query($conn, $sql);

            // $sql_update_views = "UPDATE videos SET v_views = v_views + 1 WHERE v_id = $video_id";
            // $result_update_views = mysqli_query($conn, $sql_update_views);

            // Fetch the updated view count for the video
            $sql_total_views = "SELECT v_views FROM videos WHERE v_id = $video_id";
            $result_total_views = mysqli_query($conn, $sql_total_views);
            $row_total_views = mysqli_fetch_assoc($result_total_views);
            $total_views = $row_total_views['v_views'];

            if (isset($_SESSION['uid'])) {
                $user_id = $_SESSION['uid']; // Replace with the actual user ID

                // Get the channel ID from the database or any other method you use to fetch the video information
                if (isset($row['c_id'])) {
                    $channel_id = $row['c_id']; // Replace with the actual channel ID

                    $sql_check_subscription = "SELECT COUNT(*) AS count FROM subscribers WHERE channel_id = ? AND user_id = ?";
                    $stmt = mysqli_prepare($conn, $sql_check_subscription);
                    mysqli_stmt_bind_param($stmt, "ii", $channel_id, $user_id);
                    mysqli_stmt_execute($stmt);
                    $result_check_subscription = mysqli_stmt_get_result($stmt);
                    $row_check_subscription = mysqli_fetch_assoc($result_check_subscription);
                    $isSubscribed = ($row_check_subscription['count'] > 0);

                    mysqli_stmt_close($stmt);
                }
            }

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
                    // $channel_id = $row['c_id'];
            ?>
                    <div class="side-video-list">
                        <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" class="small-thumbnail">
                            <img src="video_thumbnail/<?php echo $row['v_thumbnail']; ?>">
                        </a>
                        <div class="video-info">
                            <a><?php echo $row['v_title']; ?></a>
                            <p class="c-title"><?php echo $row['c_title']; ?></p>
                            <p class="v-views"><?php echo $row['v_views']; ?> Views &bull; <?php echo $timeAgo ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo 'No Videos';
            }
            ?>
        </div>
    </div>
</div>

<!-- JS File Links -->
<script src="assets/js/video.js" defer></script>
<script src="assets/js/script.js" defer></script>

</body>

</html>