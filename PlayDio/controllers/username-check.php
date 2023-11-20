<?php
include('../conn.php');

if (isset($_POST['type']) && $_POST['type'] == 1) {
    $username = $_POST['username'];

    $errors = array(); // Store the error messages

    if (strlen($username) < 8) {
        $errors[] = "Username should be 8 characters long.";
    }

    if (!preg_match('/[0-9]/', $username)) {
        $errors[] = "Username must contain one number.";
    }

//    if (!preg_match('/[^A-Za-z0-9]/', $username)) {
//        $errors[] = "Username must contain one special character.";
//    }

    if (empty($errors)) {
        $query = "SELECT * FROM user WHERE u_username = '$username';";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('Error executing query: ' . mysqli_error($conn));
        }

        if (empty($username)) {
            echo "<span class='status-invalid'></span>";
        } else {
            $rowcount = mysqli_num_rows($result);
            if ($rowcount > 0) {
                echo "<span class='error-div'>$username    Username already exists.</span>";
            } else {
                echo "<span class='correct-div'>$username     Username Available.</span>";
            }
        }
    } else {
        $errorMessages = implode("<br>", $errors);
        echo "<span class='error-div'>$errorMessages</span>";
    }
}
?>
