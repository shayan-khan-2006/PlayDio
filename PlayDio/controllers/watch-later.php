<?php
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user ID (you should have this information from the user session)
    session_start();
    $user_id = $_SESSION['uid']; 

    $video_id = mysqli_real_escape_string($conn, $_POST['v_id']);

    // Check if the video is not already added to the watch later list for this user
    $check_query = "SELECT * FROM watch_later WHERE user_id = {$user_id} AND video_id = {$video_id}";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) == 0) {
        // The video is not already in the watch later list, so add it
        $insert_query = "INSERT INTO watch_later (user_id, video_id) VALUES ({$user_id}, {$video_id})";
        mysqli_query($conn, $insert_query);
        // Respond with a JSON object to indicate success
        echo json_encode(array('status' => 'success', 'message' => 'Video has been saved to Watch Later.'));
    } else {
        // The video is already in the watch later list
        // Respond with a JSON object to indicate it's already added
        echo json_encode(array('status' => 'error', 'message' => 'Video is already in Watch Later.'));
    }
    exit; // Stop further execution of the PHP script after handling the AJAX request
}
