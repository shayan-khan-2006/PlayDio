<?php include('header.php'); ?>

<div class="sidebar">
    <div class="sidebar-links">
        <a href="profile.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path stroke="var(--light-white)" stroke-width=".2" fill="var(--main-color)" d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path stroke="var(--black)" fill="var(--main-color)" d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
            </svg>
            <p>Profile</p>
        </a>
        <a href="channel.php" class="active">
            <!-- music svg -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 4h6v8h-6z" />
                <path stroke="var(--main-color)" fill="var(--main-color)" d="M4 16h6v4h-6z" />
                <path d="M14 12h6v8h-6z" />
                <path stroke="var(--main-color)" fill="var(--main-color)" d="M14 4h6v4h-6z" />
            </svg>
            <p>Your Channel</p>
        </a>
        <a href="feeds/subscriptions.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-playlist-add" width="22" viewBox="0 0 24 24" stroke-width="1.7" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M19 8h-14" />
                <path d="M5 12h9" />
                <path d="M11 16h-6" />
                <path stroke="var(--main-color)" d="M15 16h6" />
                <path stroke="var(--main-color)" d="M18 13v6" />
            </svg>
            <p>Subscription</p>
        </a>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-versions" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                <path stroke="var(--main-color)" d="M7 7l0 10" />
                <path stroke="var(--main-color)" d="M4 8l0 8" />
            </svg>
            <p>Library</p>
        </a>
        <hr class="line-break">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-history" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path stroke="var(--main-color)" d="M12 8l0 4l2 2" />
                <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
            </svg>
            <p>History</p>
        </a>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-tv" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path stroke="var(--main-color)" d="M16 3l-4 4l-4 -4" />
            </svg>
            <p>Videos</p>
        </a>
        <a href="feeds/watch_later.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-5" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path stroke="var(--main-color)" d="M12 12l2 3" />
                <path stroke="var(--main-color)" d="M12 7v5" />
            </svg>
            <p>Watch Later</p>
        </a>
        <a href="feeds/liked_videos.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-heart" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 8h.01" />
                <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5" />
                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l1.5 1.5" />
                <path stroke="var(--main-color)" d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" />
            </svg>
            <p>Liked Videos</p>
        </a>
        <a class="customize">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="30" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
                <path stroke="var(--dark-green)" d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path stroke="var(--main-color)" d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                <path stroke="var(--dark-blue)" d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
            </svg>
            <p>Customize</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--gray)" fill="none" stroke-linecap="round" stroke-linejoin="round" id="customize-pop-btn">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
            </svg>
        </a>
    </div>
    <hr class="line-break">
    <!--  Customize Pop Up  -->
    <div class="customize-popup">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" id="close-customize">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path stroke="var(--text-color)" d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
            <path stroke="var(--text-color) " d="M10 10l4 4m0 -4l-4 4" />
        </svg>
        <h3 class="customize-title">Choose Theme Color</h3>
        <div class="customize-colors">
            <span data-color="#ff0800" class="single-color" style="background-color: #ff0800;"></span>
            <span data-color="#0033cc" class="single-color" style="background-color: #0033cc;"></span>
            <span data-color="#00cc00" class="single-color" style="background-color: #00cc00;"></span>
            <span data-color="#660099" class="single-color" style="background-color: #660099;"></span>
            <span data-color="#ff9900" class="single-color" style="background-color: #ff9900;"></span>
        </div>
        <h3 class="customize-title">Choose Font Size</h3>
        <div class="customize-fonts">
            <div class="single-font fontsize-5">Aa</div>
            <div class="single-font fontsize-4">Aa</div>
            <div class="single-font fontsize-3">Aa</div>
            <div class="single-font fontsize-2">Aa</div>
            <div class="single-font fontsize-1">Aa</div>
        </div>
        <h3 class="customize-title">Choose Mode</h3>
        <div class="modes">
            <div class="light-mode">
                <input type="radio" class="c_checkbox">
                <span>Light</span>
            </div>
            <div class="dark-mode">
                <input type="radio" class="c_checkbox">
                <span>Dark</span>
            </div>
        </div>
    </div>

</div>
<script>
    const customizePop = document.querySelector(".customize-popup");
    const customize_open = document.querySelector(".customize");
    const customize_close = document.querySelector("#close-customize");

    customize_open.addEventListener("click", () => {
        customizePop.style.display = 'block';
    });
    customize_close.addEventListener("click", () => {
        customizePop.style.display = 'none';
    });

    const singleColors = document.querySelectorAll('.single-color');

    document.querySelector(':root').style.setProperty('--main-color', localStorage.getItem('theme-color'));

    // document.body.classList.add(localStorage.getItem['theme-color'])
    //add active class on theme color div
    singleColors.forEach((color) => {
        color.addEventListener('click', () => {
            singleColors.forEach((otherColor) => {
                if (otherColor !== color) {
                    otherColor.classList.remove('active');
                }
            });

            color.classList.toggle('active');
            localStorage.setItem('theme-color', color.getAttribute('data-color'))
        });
    });

    //theme color change
    singleColors.forEach((color) => {
        color.addEventListener('click', () => {
            let dataColor = color.getAttribute('data-color');
            document.querySelector(':root').style.setProperty('--main-color', dataColor);
        });
    });

    //dark/light mode
    const DarkMode = document.querySelector('.dark-mode');
    const LightMode = document.querySelector('.light-mode');
    const BodyDiv = document.querySelector('body');
    if (localStorage.getItem('theme-mode', 'dark') == 'dark') {
        BodyDiv.classList.add("b-dark");
    } else {
        BodyDiv.classList.remove("b-dark");
    }
    DarkMode.onclick = function() {
        BodyDiv.classList.add("b-dark");
        localStorage.setItem('theme-mode', 'dark')
    };
    LightMode.onclick = function() {
        BodyDiv.classList.remove("b-dark");
        localStorage.setItem('theme-mode', 'light')
    };
</script>
<style>
    .container {
        overflow-x: hidden;
    }
</style>

<div class="container">

    <?php
    include 'conn.php';

    $user_id = $_SESSION['uid'];

    // Check if the user has a channel entry in the channels table
    $sql_channel = "SELECT channels.*, user.*
    FROM channels
    INNER JOIN user ON channels.user_id = user.u_id
    WHERE channels.user_id = $user_id";
    $result_channel = mysqli_query($conn, $sql_channel);

    if (mysqli_num_rows($result_channel) > 0) {
        $channel_row = mysqli_fetch_assoc($result_channel);
    ?>
        <div class="channel-top flex-div">
            <div class="left flex-div">
                <img src="channel_img/<?php echo $channel_row['c_profile']; ?>">
                <div class="left-text">
                    <div class="channel-title"><?php echo $channel_row['c_title']; ?></div>
                    <p>@<?php echo $channel_row['u_username']; ?></p>
                    <div class="flex-div">
                        <p>
                            <?php
                            if ($channel_row['c_subscribers'] == 0) {
                                echo 'No Subscriber';
                            } else {
                                echo $channel_row['c_subscribers'];
                            }
                            ?> Subscribers </p>
                        <p>&bull;</p>
                        <p>
                            <?php
                            if ($channel_row['c_videos'] == 0) {
                                echo 'No Videos';
                            } else {
                                echo $channel_row['c_videos'];
                            }
                            ?> Videos </p>
                    </div>
                </div>
            </div>
            <div class="right flex-col">
                <button class="subscribe-btn">Customize Channel</button>
                <button class="subscribe-btn">Manage Channel</button>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="flex-div profile_con">
            <a href="create_channel.php?user_id=<?php echo $_SESSION['uid']; ?>">Create Channel</a>
        </div>
    <?php
    }
    ?>

    <div class="channel-middle">
        <!-- Tab links -->
        <div class="screen">
            <button class="tablinks active" onclick="openCity(event, 'screen1')">Home</button>
            <button class="tablinks" onclick="openCity(event, 'screen2')">Videos</button>
            <button class="tablinks" onclick="openCity(event, 'screen3')">Channels</button>
            <button class="tablinks" onclick="openCity(event, 'screen4')">About</button>
        </div>

        <!-- Tab content -->
        <div id="screen1" class="tabcontent">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="screen2" class="tabcontent">
            <h3>videos</h3>
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
                        <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" target="_blank">
                            <img src="video_thumbnail/<?php echo $row['v_thumbnail']; ?>" class="thumbnail">
                        </a>
                        <div class="flex-div">
                            <img src="channel_img/<?php echo $row['c_profile']; ?>">
                            <div class="video-info">
                                <a href="#"><?php echo $row['v_title']; ?></a>
                                <div id="title-tooltip" class="title-tooltip"></div>
                                <p class="channel-name"><?php echo $row['c_title']; ?></p>
                                <p><?php echo $row['v_views']; ?> &bull; <?php echo $timeAgo ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <p>No Videos Found</p>

            <?php
            }
            ?>
            <a href="create_video.php?uid=<?php echo $_SESSION['uid']; ?>&cid=<?php echo $channel_row['c_id']; ?>">
                <button> Upload Video </button>
            </a>
        </div>
        <div id="screen3" class="tabcontent">
            <h3>channel Description</h3>
            <p><?php echo $channel_row['c_description']; ?></p>
        </div>
        <div id="screen4" class="tabcontent">
            <h3>Details</h3>
            <p><?php echo $channel_row['c_added']; ?></p>
        </div>

    </div>


</div>


<script defer>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.classList.add("active");
    }
</script>

<!-- JS File Links -->
<script src="assets/js/script.js" defer></script>
</body>

</html>