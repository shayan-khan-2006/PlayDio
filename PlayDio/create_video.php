<?php
if (isset($_POST['create_video'])) {
    include 'conn.php';

    $v_thumb_name = $_FILES['v_thumb']['name'];
    $v_thumb_tmp = $_FILES['v_thumb']['tmp_name'];

    move_uploaded_file($v_thumb_tmp, "video_thumbnail/" . $v_thumb_name);

    $v_video_name = $_FILES['v_video']['name'];
    $v_video_tmp = $_FILES['v_video']['tmp_name'];

    // Specify the directory where you want to store video files
    $v_directory = "Videos/";

    // Move the uploaded video file to the desired location
    move_uploaded_file($v_video_tmp, $v_directory . $v_video_name);

    $v_name = $_POST['v_name'];
    $v_desc = $_POST['v_desc'];
    $v_keyword = $_POST['v_keyword'];
    $v_time = date('h:i:s');
    $v_date = date('Y-m-d');
    $status = $_POST['v_status'];

    $user_id = $_GET['uid'];
    $channel_id = $_GET['cid'];

    // Prepare the SQL statement with placeholders, including the user_id value
    $sql = "INSERT INTO `videos`(`channel_id`, `user_id`, `v_title`, `v_description`, `v_file_path`, `v_added_t`, `v_added_d`, `v_thumbnail`, `v_keyword`, `v_status`) VALUES ('$channel_id', '$user_id','$v_name', '$v_desc', '$v_video_name', '$v_time', '$v_date', '$v_thumb_name', '$v_keyword' , '$status')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: channel.php?uid='.$user_id.'&cid='.$channel_id.'');
        exit;
    } else {
        echo 'Error inserting video.';
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
            <h1>Video</h1>
            <h5>Create Your New Video Now..!</h5>
            <br>
            <label for="v_name">Video Title <span class="text-red">*</span></label>
            <input type="text" name="v_name" placeholder="Enter Your Video Title" autocomplete="off" required>

            <label for="v_desc">Video Description <span class="text-red">*</span></label>
            <input type="text" name="v_desc" placeholder="Enter Your Video Description" required>

            <label for="v_desc">Video Keywords <span class="text-red"></span></label>
            <input type="text" name="v_keyword" placeholder="Enter Your Video Description">

            <label for="v_thumb">Video Thumbnail</label>
            <input type="file" name="v_thumb">

            <label for="v_thumb">Video Thumbnail</label>
            <input type="file" name="v_video">

            <input type="text" class="d-none" name="v_status" value="active">

            <input type="submit" name="create_video" class="btn" value="Create">
        </div>
    </form>
</div>
</body>

</html>