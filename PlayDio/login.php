<?php
session_start();

if (isset($_POST['log'])) {
    include('conn.php');

    $email = $_POST['u_email'];
    $password = $_POST['u_pass'];

    $sql = "SELECT * FROM `user` WHERE u_email = '$email' OR u_username = '$email' AND u_password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $_SESSION['username'] = $row['u_username'];
            $_SESSION['u_name'] = $row['u_fname'];
            $_SESSION['u_email'] = $row['u_email'];
            $_SESSION['u_loc'] = $row['u_location'];
            $_SESSION['u_phone'] = $row['u_phone'];;
            $_SESSION['u_img'] = $row['u_img'];
            $_SESSION['uid'] = $row['u_id'];

            header('Location: index.php');
            exit(); // Terminate the script after redirection
        }
    } else {
        echo "
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <div id='toast-notification' class='toast-notification toast-error '></div>
        <script>
            $(document).ready(function() {
                const toastNotification = $('#toast-notification');
                toastNotification.text('Invalid email or password');

                toastNotification.fadeIn().delay(3000).fadeOut();
            });
        </script>";
    }
}

include('no-user-header.php');



?>

<title> PlayDio | Login </title>

<!-- <ul class="notifications">
        <div class="toast">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Warning: This is a warning toast.</span>
            </div>
            <i class="fa-solid fa-xmark" onclick="removeToast()"></i>
        </div>
        <button type="submit" class="ok_btn" onclick="removeToast()">OK</button>
    </ul> -->
<style>
    .form-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }
</style>
<div class="form-container">
    <form method="POST">
        <div class="form_inner">
            <h1>Login</h1>
            <h5>Continue Your Journey Now..!</h5>
            <input type="text" name="u_email" placeholder="Enter Your Email or Username" autocomplete="off" required>
            <input type="password" name="u_pass" placeholder="Enter Your Password" required>
            <h5><a href="#">Forgot Password?</a></h5>
            <input type="submit" name="log" class="btn" value="Login">
            <h4>Not a Member <a href="register.php">Register?</a></h4>
        </div>
    </form>
</div>
</body>

</html>