<?php
// like.php
session_start();

include '../conn.php';

if (!isset($_SESSION['uid'])) {
    // User is not logged in, return an error response
    echo "not_logged_in";
    exit();
}

// Get the video ID from the AJAX request
$video_id = $_POST['video_id'];

// Get the user ID (you should have this information from the user session)
$user_id = $_SESSION['uid']; // Replace with the actual user ID

// Check if the user has already liked the video
$sql_check_like = "SELECT COUNT(*) AS count FROM likes WHERE video_id = ? AND user_id = ?";
$stmt = mysqli_prepare($conn, $sql_check_like);
mysqli_stmt_bind_param($stmt, "ii", $video_id, $user_id);
mysqli_stmt_execute($stmt);
$result_check_like = mysqli_stmt_get_result($stmt);
$row_check_like = mysqli_fetch_assoc($result_check_like);
$isLiked = ($row_check_like['count'] > 0);

mysqli_stmt_close($stmt);

if ($isLiked) {
    // User has already liked the video, so remove the like
    $sql_delete_like = "DELETE FROM likes WHERE user_id = ? AND video_id = ?";
    $stmt = mysqli_prepare($conn, $sql_delete_like);
    mysqli_stmt_bind_param($stmt, "ii", $user_id, $video_id);
    $result_delete_like = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result_delete_like) {
        // Decrement the v_likes count in the videos table
        $sql_update_likes_count = "UPDATE videos SET v_likes = v_likes - 1 WHERE v_id = ?";
        $stmt = mysqli_prepare($conn, $sql_update_likes_count);
        mysqli_stmt_bind_param($stmt, "i", $video_id);
        $result_update_likes_count = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result_update_likes_count) {
            echo "unliked";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else {
    // User has not liked the video, so insert the like record
    $sql_insert_like = "INSERT INTO likes (user_id, video_id) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql_insert_like);
    mysqli_stmt_bind_param($stmt, "ii", $user_id, $video_id);
    $result_insert_like = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if ($result_insert_like) {
        // Increment the v_likes count in the videos table
        $sql_update_likes_count = "UPDATE videos SET v_likes = v_likes + 1 WHERE v_id = ?";
        $stmt = mysqli_prepare($conn, $sql_update_likes_count);
        mysqli_stmt_bind_param($stmt, "i", $video_id);
        $result_update_likes_count = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result_update_likes_count) {
            echo "liked";
        } else {
            echo "error";
        }
    } else {
        // User has already liked the video, show an error message or handle as you like
        echo "already_liked";
    }
}

// Close the connection
mysqli_close($conn);
