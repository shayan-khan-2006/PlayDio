<?php

session_start();

include '../conn.php';
// Get the user ID (you should have this information from the user session)
$user_id = $_SESSION['uid']; // Replace with the actual user ID

// Retrieve search history data for the logged-in user
$query = $_GET['query'];
$sql = "SELECT s_query FROM search_history WHERE user_id = $user_id AND s_query LIKE '%$query%' ORDER BY search_count DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

$search_history = array();
while ($row = mysqli_fetch_assoc($result)) {
    $search_history[] = $row['s_query'];
}

// Return the search history as JSON
echo json_encode($search_history);
