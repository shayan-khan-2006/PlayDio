<?php
include('../feed_header.php');
include '../conn.php';
?>
<title>PlayDio</title>
<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-links">
        <a href="#" class="active">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path stroke="var(--main-color)" d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
            </svg>
            <p>Home</p>
        </a>
        <a href="#">
            <!-- music svg -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-bandlab" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M6.885 7l-2.536 4.907c-2.021 3.845 -2.499 8.775 3.821 9.093h6.808c4.86 -.207 7.989 -2.975 4.607 -9.093l-2.988 -4.907" />
                <path stroke="var(--main-color)" d="M15.078 4h-5.136l3.678 8.768c.547 1.14 .847 1.822 .162 2.676c-.053 .093 -1.332 1.907 -3.053 1.495c-.825 -.187 -1.384 -.926 -1.32 -1.74c.04 -.91 .62 -1.717 1.488 -2.074a4.463 4.463 0 0 1 2.723 -.358" />
            </svg>
            <p>Shorts</p>
        </a>
        <a href="subscriptions.php">
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
        <a href="library.php">
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
        <a href="watch_later.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-hour-5" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path stroke="var(--main-color)" d="M12 12l2 3" />
                <path stroke="var(--main-color)" d="M12 7v5" />
            </svg>
            <p>Watch Later</p>
        </a>
        <a href="#">
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
                <path stroke="none" d="M0s 0h24v24H0z" fill="none" />
                <path d="M9 6l6 6l-6 6" />
            </svg>
        </a>

    </div>
    <hr class="line-break">
    <!-- subscription -->
    <div class="subscription">
        <h3 class="z-1">Subscribed</h3>
        <?php
        if (isset($_SESSION['uid'])) {
            $user_id = $_SESSION['uid']; // Replace with the actual user ID
            // Fetch all the channels that the user has subscribed to
            $sql = "SELECT c.* 
                FROM channels c
                INNER JOIN subscribers s ON c.c_id = s.channel_id
                WHERE s.user_id = $user_id";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <a href="#" class="active">
                        <img src="../channel_img/<?php echo $row['c_profile'] ?>">
                        <p><?php echo $row['c_title'] ?></p>
                    </a>
                <?php
                }
            } else {
                ?>
                <a href="#" class="active">
                    <p>No Channel Subscribed Yet.</p>
                </a>
                <?php
            }
        } else {
            $sql = "SELECT * FROM channels ORDER BY c_subscribers DESC LIMIT 1";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row2 = mysqli_fetch_assoc($result)) {
                ?>
                        <a href="#" class="active">
                            <p class="z-1">No Channel Subscribe Yet.</p>
                        </a>
                        <img class="sub_img" src="assets/images/waiting.png">
        <?php
                    }
                } else {
                    echo "No channels found.";
                }
            } else {
                echo "Query execution failed: " . mysqli_error($conn);
            }
        }
        ?>
    </div>

</div>
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
<style>
    .single-color.active {
        border: 4px solid var(--white);
    }
</style>
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
<?php
if (isset($_SESSION['uid'])) {
    // Assuming you have the user ID (you should have this information from the user session)

    $user_id = $_SESSION['uid']; // Replace with the actual user ID

    // Fetch all the channels that the user has subscribed to
    $sql = "SELECT c.* 
        FROM channels c
        INNER JOIN subscribers s ON c.c_id = s.channel_id
        WHERE s.user_id = $user_id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

?>
            <!-- Main Content -->
            <div class="container">
                <div class="sub_wrapper">
                    <div class="sub_box">
                        <img src="../channel_img/<?php echo $row['c_profile'] ?>">
                        <h3><?php echo $row['c_title'] ?></h3>
                        <button class="main-btn"><?php echo $row['c_subscribers'] ?> Subscribers</button>
                    </div>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="container">
            <div class="sub_wrapper">
                <div class="sub_box">
                    <h3>No channels Subscribe Yet</h3>
                </div>
            </div>
        </div>
<?php
    }
}
?>


<?php
if (!isset($_SESSION['uid'])) {

    $sql = "SELECT * FROM channels ORDER BY c_subscribers DESC LIMIT 1";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row2 = mysqli_fetch_assoc($result)) {
?>
                <div class="container">
                    <h2>Most Subscribed Channel</h2>
                    <div class="sub_wrapper">
                        <div class="sub_box">
                            <img src="../channel_img/<?php echo $row2['c_profile'] ?>">
                            <h4><?php echo $row2['c_title'] ?></h4>
                            <h4><?php echo $row2['c_subscribers'] ?></h4>
                        </div>
                    </div>
                </div>
<?php
            }
        } else {
            echo "No channels found.";
        }
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }

    // Remember to close the database connection
    mysqli_close($conn);
}

?>


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

    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
            let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
            handleIcons(scrollWidth);
        });
    });

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
</script>

<!-- JS File Links -->
<script src="assets/js/script.js" defer></script>
</body>

</html>

<!-- api key -->
<!-- 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 -->