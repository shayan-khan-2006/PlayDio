<?php include('header.php'); ?>



<div class="sidebar">
    <div class="sidebar-links">
        <a href="profile.php" class="active">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path stroke="var(--light-white)" stroke-width=".2" fill="var(--main-color)" d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                <path stroke="var(--black)" fill="var(--main-color)" d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
            </svg>
            <p>Profile</p>
        </a>
        <a href="channel.php">
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
        <a href="#">
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


    //add active class on theme color div
    singleColors.forEach((color) => {
        color.addEventListener('click', () => {
            singleColors.forEach((otherColor) => {
                if (otherColor !== color) {
                    otherColor.classList.remove('active');
                }
            });

            color.classList.toggle('active');
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
    DarkMode.onclick = function() {
        BodyDiv.classList.add("b-dark");
    };
    LightMode.onclick = function() {
        BodyDiv.classList.remove("b-dark");
    };

</script>


<div class="container">
    <div class="flex-div profile_con">
        <div class="">
            <img src="user_images/<?php echo $_SESSION['u_img']; ?>">
        </div>
        <form method="POST">
        <?php
        $userid = $_SESSION['uid'];
        include 'conn.php';
        $sql = "SELECT * FROM user where u_id = $userid;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="left">
                <input type="text" name="u_fname" value="<?php echo $row['u_fname']; ?>">
                <input type="text" name="u_lname" value="<?php echo $row['u_lname']; ?>">
                <input type="text" name="u_name" id="u_name" onkeyup="checkAvailability()" autocomplete="off" min="8" value="<?php echo $row['u_username']; ?>">
                <div id="exist"></div>
                <input type="email" name="u_email" value="<?php echo $row['u_email']; ?>">
                <input type="text" name="u_password" value="<?php echo $row['u_password']; ?>">
                <input type="number" name="u_phone" value="<?php echo $row['u_phone']; ?>">
                <input type="number" name="u_age" value="<?php echo $row['u_age']; ?>">
                <input type="date" name="u_dob" value="<?php echo $row['u_dob']; ?>">
                <button><a href="update.php">Edit</a></button>
            </div>
        <?php
            }
        }
        ?>
        </form>
    </div>
</div>
<script type="text/javascript">
    function checkAvailability() {
        var username = $("#u_name").val();
        var existingUsername = "<?php echo $row['u_username']; ?>";

        if (username === existingUsername) {
            $("#exist").html("<span class='correct-div'>This is already your username.</span>");
            return; // Skip AJAX request
        }
        else {
        $.ajax({
            type: "POST",
            url: "controllers/username-check.php",
            cache: false,
            data: {
                type: 1,
                username: username,
            },
            success: function(data) {
                $("#exist").html(data);
            }
        });
    }
    }
</script>



<!-- JS File Links -->
<script src="assets/js/script.js" defer></script>
</body>

</html>
