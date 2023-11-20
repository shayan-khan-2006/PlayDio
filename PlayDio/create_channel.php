<?php


if (isset($_POST['create_channel'])) {
    include 'conn.php';

    $c_img_name = $_FILES['c_img']['name'];
    $c_img_tmp = $_FILES['c_img']['tmp_name'];

    move_uploaded_file($c_img_tmp, "channel_img/" . $c_img_name);

    $c_name = $_POST['c_name'];
    $c_desc = $_POST['c_desc'];
    $status = $_POST['c_status'];

    $user_id = $_GET['user_id'];

    // Prepare the SQL statement with placeholders, including the user_id value
    $sql = "INSERT INTO channels (user_id, c_title, c_description, c_profile, c_status)
    VALUES ('$user_id', '$c_name', '$c_desc', '$c_img_name', '$status')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Redirect to the channel page
        header('Location: channel.php');
        exit;
    } else {
        echo 'Error inserting data.';
    }
}


include('header.php');
?>

<style>
    .form-con {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }

    form {
        display: flex;
        width: 500px;
    }

    form .form_inner {
        text-align: left
    }

    form .form_inner label {
        color: var(--black);
        font-size: 18px;
        font-weight: 500;
        margin: 10px 0;
    }
</style>
<div class="form-con">
    <form method="POST" enctype="multipart/form-data">
        <div class="form_inner">
            <h1>Channel</h1>
            <h5>Create Your New Channel Now..!</h5>
            <br>
            <label for="c_name">Channel Title <span class="text-red">*</span></label>
            <input type="text" name="c_name" placeholder="Enter Your Channel Name" autocomplete="off" required>
            <label for="c_desc">Channel Description <span class="text-red">*</span></label>
            <input type="text" name="c_desc" placeholder="Enter Your Channel Description" required>
            <label for="c_img">Channel Profile</label>
            <input type="file" name="c_img">
            <input type="text" class="d-none" name="c_status" value="active">
            <input type="submit" name="create_channel" class="btn" value="Create">
        </div>
    </form>
</div>
</body>

</html>