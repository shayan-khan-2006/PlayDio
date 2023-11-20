<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Assuming you have a database connection established
include '../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['uid'])) {
    // Get the user ID (you should have this information from the user session)
    session_start();
    $user_id = $_SESSION['uid']; // Replace with the actual user ID

    // Get the channel ID from the POST data sent by the AJAX request
    $channel_id = $_POST['channel_id'];

    // Check if the user is already subscribed to the channel
    $sql = "SELECT COUNT(*) AS count FROM subscribers WHERE channel_id = ? AND user_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ii", $channel_id, $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    $isSubscribed = ($row['count'] > 0);

    // Close the statement
    mysqli_stmt_close($stmt);

    if ($isSubscribed) {
        // User is already subscribed, so unsubscribe
        $sql = "DELETE FROM subscribers WHERE channel_id = ? AND user_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ii", $channel_id, $user_id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result) {
            // Unsubscription successful

            // Update the c_subscribers count in the channels table
            $sql_update_subscribers = "
                UPDATE channels c
                SET c.c_subscribers = (
                    SELECT COUNT(*)
                    FROM subscribers s
                    WHERE s.channel_id = c.c_id
                )
                WHERE c.c_id = $channel_id
            ";

            $result_update_subscribers = mysqli_query($conn, $sql_update_subscribers);

            if ($result_update_subscribers) {
                echo "unsubscribed";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    } else {
        // User is not subscribed, so subscribe
        $subscription_date = date('Y-m-d');
        $sql = "INSERT INTO subscribers (channel_id, user_id, subscription_date) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iis", $channel_id, $user_id, $subscription_date);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if ($result) {
            // Subscription successful

            // Update the c_subscribers count in the channels table
            $sql_update_subscribers = "
                UPDATE channels c
                SET c.c_subscribers = (
                    SELECT COUNT(*)
                    FROM subscribers s
                    WHERE s.channel_id = c.c_id
                )
                WHERE c.c_id = $channel_id
            ";

            $result_update_subscribers = mysqli_query($conn, $sql_update_subscribers);

            if ($result_update_subscribers) {
                echo "subscribed";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    }
} else {
    $response = 'not_logged_in';

    // Close the connection
    mysqli_close($conn);
}
