<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>

<body>
    <div id="number">1220</div>
    <button onclick="formatCompactNumber()">Convert</button><br><br>
    <div id="result"> </div>Subscribers

<?php
// include('conn.php');
// $query = "SELECT * FROM videos where v_id = 6";
// $result = mysqli_query($conn, $query);
// if ($result) {
//     $row = mysqli_fetch_assoc($result);
//     $videoDate = $row['v_added_d'];
//     $videoTime = $row['v_added_t'];

//     mysqli_free_result($result);
// } else {
//     echo "Error executing the query: " . mysqli_error($conn);
// }
// // Convert video date and time to a DateTime object
// $videoDateTime = new DateTime($videoDate . ' ' . $videoTime);
// // Get the current DateTime object
// $currentDateTime = new DateTime();
// // Calculate the time difference
// $timeDifference = $currentDateTime->diff($videoDateTime);
// // Format the time ago
// $timeAgo = '';
// if ($timeDifference->y > 0) {
//     $timeAgo .= $timeDifference->y . ' year' . ($timeDifference->y > 1 ? 's' : '') . ' ago';
// } elseif ($timeDifference->m > 0) {
//     $timeAgo .= $timeDifference->m . ' month' . ($timeDifference->m > 1 ? 's' : '') . ' ago';
// } elseif ($timeDifference->d > 0) {
//     $timeAgo .= $timeDifference->d . ' day' . ($timeDifference->d > 1 ? 's' : '') . ' ago';
// } elseif ($timeDifference->h > 0) {
//     $timeAgo .= $timeDifference->h . ' hour' . ($timeDifference->h > 1 ? 's' : '') . ' ago';
// } elseif ($timeDifference->i > 0) {
//     $timeAgo .= $timeDifference->i . ' minute' . ($timeDifference->i > 1 ? 's' : '') . ' ago';
// } else {
//     $timeAgo = 'just now';
// }
// // Output the time ago
// echo 'Video added ' . $timeAgo;
?>

</body>
</html>
<script>
    function formatCompactNumber() {
        var number = document.getElementById("number").value;
        var result = document.getElementById("number");
        if (number < 0) {
            result.innerHTML = 'Value nan not be negative';
        }
        if (number > 0 && number < 1000) {
            result.innerHTML = number;
        } else if (number >= 1000 && number < 1_000_000) {
            result.innerHTML = (number / 1000).toFixed(1).replace(/\.0$/, "") + "K";
        } else if (number >= 1_000_000 && number < 1_000_000_000) {
            result.innerHTML = (number / 1_000_000).toFixed(1).replace(/\.0$/, "") + "M";
        } else if (number >= 1_000_000_000 && number < 1_000_000_000_000) {
            result.innerHTML = (number / 1_000_000_000).toFixed(1).replace(/\.0$/, "") + "B";
        } else if (number >= 1_000_000_000_000 && number < 1_000_000_000_000_000) {
            result.innerHTML = (number / 1_000_000_000_000).toFixed(1).replace(/\.0$/, "") + "T";
        }
    }
</script>

<!-- 
    header.php
<script>
                const Input = document.getElementById('search_input');
                const searchHistoryDropdown = document.getElementById('search_history_dropdown');

                function handleSearch(event) {
                    if (Input.value.trim() !== '') {
                        // Show the search history dropdown
                        searchHistoryDropdown.style.display = 'unset';
                    } else {
                        searchHistoryDropdown.style.display = 'none';
                    }

                    const searchInput = event.target.value;

                    if (searchInput.length > 0) {
                        // Perform the AJAX request to get search history suggestions
                        const xhr = new XMLHttpRequest();
                        xhr.open("GET", `controllers/get_search_history.php?query=${encodeURIComponent(searchInput)}`, true);

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                const searchHistorySuggestions = JSON.parse(xhr.responseText);
                                // Clear previous suggestions
                                searchHistoryDropdown.innerHTML = "";

                                // Function to highlight the matched words in the suggestion
                                function highlightMatchedText(suggestion, query) {
                                    const regex = new RegExp(query, 'gi');
                                    return suggestion.replace(regex, (match) => `<span style="font-weight: 400;">${match}</span>`);
                                }

                                // Populate the dropdown with the new suggestions
                                searchHistorySuggestions.forEach((query) => {
                                    const suggestionItem = document.createElement("div");
                                    suggestionItem.classList.add("search-history-item");

                                    // Highlight the matched words in the suggestion
                                    const highlightedQuery = highlightMatchedText(query, searchInput);
                                    suggestionItem.innerHTML = `
                                    <div class="search-history-icon">
                                    <svg viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path stroke="var(--black)" d="M12 8l0 4l2 2" />
                                            <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                                        </svg>
                                    </div>
                                    <p class="query" onclick="handleSuggestionClick('${query}')">${highlightedQuery}</p>
                                    <button class="remove-history-button">remove</button>
                                    `;

                                    searchHistoryDropdown.appendChild(suggestionItem);
                                });
                            }
                        };

                        xhr.send();
                    } else {
                        // Clear dropdown if search input is empty
                        searchHistoryDropdown.innerHTML = "";
                    }
                }

                // Function to handle when a suggestion is clicked
                function handleSuggestionClick(suggestion) {
                    // Redirect the user to result.php with the selected query as a parameter
                    window.location.href = `result.php?query=${encodeURIComponent(suggestion)}`;
                }

                // Event listener for clicks on the search history suggestions
                searchHistoryDropdown.addEventListener('click', function(event) {
                    const target = event.target;
                    // Check if the clicked element is a suggestion
                    if (target.classList.contains('query')) {
                        const suggestionText = target.textContent;
                        handleSuggestionClick(suggestionText);
                    }
                });
            </script>

get_search_history.php  -->
<?php

// session_start();

// include '../conn.php';
// // Get the user ID (you should have this information from the user session)
// $user_id = $_SESSION['uid']; // Replace with the actual user ID

// // Retrieve search history data for the logged-in user
// $query = $_GET['query'];
// $sql = "SELECT s_query FROM search_history WHERE s_query LIKE '%$query%' ORDER BY search_count DESC LIMIT 5";
// $result = mysqli_query($conn, $sql);

// $search_history = array();
// while ($row = mysqli_fetch_assoc($result)) {
//     $search_history[] = $row['s_query'];
// }

// // Return the search history as JSON
// echo json_encode($search_history);

// the above code is working perfectly but when the search doesn't that user search history or another user search something first time then it returns empty dropdown but i want that if search not match or another user search then it will show other user searches with which have are most search count and set a limit of 5 , how to do this update the code according to this and specify where you made change by means of comment
