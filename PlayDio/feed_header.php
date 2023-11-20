<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/d49b90c6aa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- JQuery | Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JQuery -->
</head>

<body class="body">

    <!-- Navbar -->
    <nav class="flex-div">
        <!-- menu svg -->
        <a class="nav-left flex-div">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2 menu-icon" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path stroke="var(--main-color)" d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
            <div class="logo-icon">
                <!-- <img src="assets/images/play.png"> -->
                <svg viewBox="28.307 12.581 320.723 334.352" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:bx="https://boxy-svg.com" width="30" height="30">
                    <g transform="matrix(2.034522, 0, 0, 1.924928, -367.887543, -301.695404)">
                        <g>
                            <g>
                                <path d="M 245.215 221.752 Q 255.172 204.175 265.129 221.752 L 335.732 346.386 Q 345.689 363.963 325.775 363.963 L 184.569 363.963 Q 164.655 363.963 174.612 346.386 Z" style="paint-order: fill;" transform="matrix(0, 1, -1, 0, 561.48053, -6.067238)" fill="var(--white)" stroke="var(--main-color)" stroke-width="4" bx:shape="triangle 164.655 204.175 181.034 159.788 0.5 0.11 1@c4a78e98"></path>
                            </g>
                            <ellipse fill="var(--main-color)" stroke="var(--main-color)" cx="257.122" cy="248.707" rx="20.066" ry="20.259"></ellipse>
                            <line fill="var(--main-color)" stroke="var(--main-color)" stroke-width="3" x1="203.829" y1="166.231" x2="272.931" y2="236.197"></line>
                            <line fill="var(--main-color)" stroke="var(--main-color)" stroke-width="3" x1="202.966" y1="331.212" x2="238.38" y2="240.516"></line>
                            <line fill="var(--main-color)" stroke="var(--main-color)" stroke-width="3" x1="258.248" y1="268.883" x2="347.216" y2="248.152"></line>
                        </g>
                    </g>
                </svg>
                Sparkly <sup>PK</sup>
            </div>
        </a>
        <div class="nav-middle flex-div">
            <div class="search-box flex-div">
                <input type="search" placeholder="Search..." id="search_input">
                <!-- search svg -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search search-icon" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                </svg>
            </div>
            <!-- voice svg -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic mic-icon">
                <path fill="var(--main-color)" stroke="var(--main-color)" d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                <path stroke="var(--black)" d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                <line stroke="var(--black)" x1="12" y1="19" x2="12" y2="23"></line>
                <line stroke="var(--black)" x1="8" y1="23" x2="16" y2="23"></line>
            </svg>
        </div>
        <div class="nav-right flex-div">
            <!-- moon svg -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none" stroke="var(--black)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg> -->
            <!-- moon svg 2 -->
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-moon" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg> -->
            <!-- sun svg -->
            <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun" style="display:none;">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
            </svg>
            <!-- video svg -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-video-plus video-icon" width="22" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                <path stroke="var(--main-color)" d="M7 12l4 0" />
                <path stroke="var(--main-color)" d="M9 10l0 4" />
            </svg>
            <!-- bell svg -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                <path stroke="var(--main-color)" fill="var(--main-color)" d="M9 17v1a3 3 0 0 0 6 0v-1" />
            </svg>
            <?php

            if (isset($_SESSION['u_img']) && !empty($_SESSION['u_img'])) {
                echo '<a id="user_img">
                              <img src="../user_images/' . $_SESSION['u_img'] . '" class="user-icon">
                          </a>';
            } else {
                echo '<button id="sign_in_button"><a href="login.php">Sign In</a></button>';
            }
            ?>

            <div class="profile-popup">
                <ul>
                    <li>
                        <a target="_blank" href="channel.php?uid=<?php echo $_SESSION['uid']; ?>">Your Channel</a>
                    </li>
                    <li>
                        <a target="_blank" href="profile.php?uid=<?php echo $_SESSION['uid']; ?>">Profile</a>
                    </li>
                    <li>
                        <a href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <script>
                //                const profilePop = document.querySelector(".profile-popup");
                //                const profileOpen = document.querySelector("#user_img");
                //
                //                profileOpen.addEventListener("click", () => {
                //                    profilePop.style.display = 'flex';
                //                });
            </script>
        </div>
    </nav>