<?php
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    session_start();
    $user_id = $_SESSION['uid'];

    $video_id = mysqli_real_escape_string($conn, $_POST['v_id']);


    // Delete the video from the watch later list
    $delete_query = "DELETE FROM watch_later WHERE user_id = {$user_id} AND video_id = {$video_id}";
    mysqli_query($conn, $delete_query);

    // Respond with a JSON object to indicate success
    echo json_encode(array('status' => 'success', 'message' => 'Video has been removed from Watch Later.'));
    exit;
} else {
    // Respond with a JSON object to indicate an error if required parameters are missing
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request.'));
    exit;
}
