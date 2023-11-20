<?php
include 'header.php';
include 'conn.php';
include 'sidebar.php';
?>
<title>PlayDio</title>

<div class="container">
    <div class="result_chip">
        <?php include('assets/includes/chips.php'); ?>
        <div class="filter">
            <p>Filters</p>
            <svg class="filter_svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--text-color)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M4 6l8 0" />
                <path d="M16 6l4 0" />
                <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M4 12l2 0" />
                <path d="M10 12l10 0" />
                <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M4 18l11 0" />
                <path d="M19 18l1 0" />
            </svg>
        </div>
    </div>

    <div class="video-container v_flow">
        <?php
        include 'conn.php';

        if (isset($_GET['query'])) {

            $search_term = mysqli_real_escape_string($conn, $_GET['query']);
            $user_id = isset($_SESSION['uid']) ? $_SESSION['uid'] : null;

            if (!empty($search_term) && $user_id !== null) {

                $sq_time = date('h:i:s');
                $sq_date = date('Y-m-d');
                $query_added = $sq_date . ' ' . $sq_time;

                // Check if the search term already exists in the search_history table for the current user
                $sql_check_search_query = "SELECT * FROM `search_history` WHERE `user_id` = '$user_id' AND `s_query` = '$search_term'";
                $result_check_search_query = mysqli_query($conn, $sql_check_search_query);

                if (!$result_check_search_query) {
                    echo 'Error checking search history.';
                } else {
                    if (mysqli_num_rows($result_check_search_query) > 0) {
                        // If the search term exists, update the search_count and query_added
                        $search_row = mysqli_fetch_assoc($result_check_search_query);
                        $search_count = $search_row['search_count'] + 1;
                        $sql_update_search_query = "UPDATE `search_history` SET `search_count`='$search_count', `s_added`='$query_added' WHERE `user_id` = '$user_id' AND `s_query` = '$search_term'";
                        $result_update_search_query = mysqli_query($conn, $sql_update_search_query);
                        if (!$result_update_search_query) {
                            echo 'Error updating search history.';
                        }
                    } else {
                        // If the search term does not exist, insert a new record
                        $search_count = 1;
                        $sql_insert_search_query = "INSERT INTO `search_history`(`user_id`, `s_query`, `search_count`, `s_added`) VALUES ('$user_id','$search_term', '$search_count', '$query_added')";
                        $result_insert_search_query = mysqli_query($conn, $sql_insert_search_query);
                        if (!$result_insert_search_query) {
                            echo 'Error inserting search history.';
                        }
                    }
                }
            }

            $sort = "RAND()"; // Default sorting by upload date
            $type = ""; // Default sorting by upload date


            if (isset($_GET['sort'])) {
                switch ($_GET['sort']) {
                    case 'upload_date':
                        $sort = "v_added_t ASC";
                        break;
                    case 'most_viewed':
                        $sort = "v_views DESC";
                        break;
                    case 'rating':
                        $sort = "v_rating DESC";
                        break;
                    default:
                        // Invalid sort option, handle as needed or set a default sorting.
                }
            }
            if (isset($_GET['type'])) {
                $type = mysqli_real_escape_string($conn, $_GET['type']);
            }

            $sql = "SELECT videos.*, channels.* FROM videos
                INNER JOIN channels ON videos.channel_id = channels.c_id
                WHERE (videos.v_title LIKE '%$search_term%' OR channels.c_title LIKE '%$search_term%') ";

            if (!empty($type)) {
                $sql .= "AND videos.v_type = '$type' ";
            }

            $sql .= "ORDER BY $sort";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo 'Error executing the query: ' . mysqli_error($conn);
            } else {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {


                        $videoDate = $row['v_added_d'];
                        $videoTime = $row['v_added_t'];
                        // Convert video date and time to a DateTime object
                        $videoDateTime = new DateTime($videoDate . ' ' . $videoTime);
                        // Get the current DateTime object
                        $currentDateTime = new DateTime();
                        // Calculate the time difference
                        $timeDifference = $currentDateTime->diff($videoDateTime);
                        // Format the time ago
                        $timeAgo = '';
                        if ($timeDifference->y > 0) {
                            $timeAgo .= $timeDifference->y . ' year' . ($timeDifference->y > 1 ? 's' : '') . ' ago';
                        } elseif ($timeDifference->m > 0) {
                            $timeAgo .= $timeDifference->m . ' month' . ($timeDifference->m > 1 ? 's' : '') . ' ago';
                        } elseif ($timeDifference->d > 0) {
                            $timeAgo .= $timeDifference->d . ' day' . ($timeDifference->d > 1 ? 's' : '') . ' ago';
                        } elseif ($timeDifference->h > 0) {
                            $timeAgo .= $timeDifference->h . ' hour' . ($timeDifference->h > 1 ? 's' : '') . ' ago';
                        } elseif ($timeDifference->i > 0) {
                            $timeAgo .= $timeDifference->i . ' minute' . ($timeDifference->i > 1 ? 's' : '') . ' ago';
                        } else {
                            $timeAgo = 'just now';
                        }
        ?>


                        <div class="videos">
                            <a href="watch.php?v_id=<?php echo $row['v_id']; ?>" target="_blank">
                                <img src="video_thumbnail/<?php echo $row['v_thumbnail']; ?>" class="thumbnail">
                            </a>
                            <div class="flex-div">
                                <a href="#"><?php echo $row['v_title']; ?></a>
                                <div id="title-tooltip" class="title-tooltip"></div>
                                <p><?php echo $row['v_views']; ?> views &bull; <?php echo $timeAgo ?></p>
                                <div class="flex-div2">
                                    <img src="channel_img/<?php echo $row['c_profile']; ?>">
                                    <p class="channel-name"><?php echo $row['c_title']; ?></p>
                                </div>
                                <p class="v_keyword">
                                    <?php echo $row['v_keyword']; ?>
                                </p>
                            </div>
                        </div>
        <?php
                    }
                } else {
                    echo '<div class="row d-flex align-items-center justify-content-center mb-5 pb-3">
                        <div class="heading-section ftco-animate text-center">
                          <h2 class="mb-4">No Record Found</h2>
                          <span class="subheading">Try Again With a Different Name</span>
                        </div>
                      </div>';
                }
            }
        } else {
            echo "You are not logged in.";
        }
        ?>
    </div>
</div>

<div class="filter-popup">
    <div class="flex-div2 f-up">
        <h4>Search Filters</h4>
        <?php
        if (isset($_GET['type']) != NULL || isset($_GET['sort']) != NULL) {
        ?>
            <div>
                <a href="?query=<?php echo urlencode($search_term); ?>">Clear Filters</a>
            </div>
        <?php
        } else {
            echo '';
        }
        ?>

        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round" id="close-filter">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path stroke="var(--text-color)" d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
            <path stroke="var(--text-color) " d="M10 10l4 4m0 -4l-4 4" />
        </svg>
    </div>
    <div class="flex-div2 f-down">
        <div class="flex-col">
            <h5>UPLOAD DATE </h5>
            <ul>
                <li>
                    <a href="#">Last hour</a>
                </li>
                <li>
                    <a href="#">Today</a>
                </li>
                <li>
                    <a href="#">This week</a>
                </li>
                <li>
                    <a href="#">This month</a>
                </li>
                <li>
                    <a href="#">This year</a>
                </li>
            </ul>
        </div>
        <div class="flex-col">
            <h5>VIDEO CATEGORY </h5>
            <ul>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&type=video<?php echo isset($_GET['sort']) ? '&sort=' . $_GET['sort'] : ''; ?>">Video</a>
                </li>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&type=movie<?php echo isset($_GET['sort']) ? '&sort=' . $_GET['sort'] : ''; ?>">Movie</a>
                </li>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&type=channel<?php echo isset($_GET['sort']) ? '&sort=' . $_GET['sort'] : ''; ?>">Channel</a>
                </li>
            </ul>

        </div>
        <div class="flex-col">
            <h5>VIDEO CATEGORY </h5>
            <ul>
                <li>
                    <a href="#">Action</a>
                </li>
                <li>
                    <a href="#">Romance</a>
                </li>
                <li>
                    <a href="#">Comedy</a>
                </li>
                <li>
                    <a href="#">Sci-Fi</a>
                </li>
                <li>
                    <a href="#">Drama</a>
                </li>
                <li>
                    <a href="#">Movie</a>
                </li>
            </ul>
        </div>
        <div class="flex-col">
            <h5>SORT BY</h5>
            <ul>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&sort=upload_date&type=<?php echo isset($_GET['sort']) ? $_GET['sort'] : ''; ?>">Upload Date</a>
                </li>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&sort=most_viewed&type=<?php echo isset($_GET['sort']) ? $_GET['sort'] : ''; ?>">Most Viewed</a>
                </li>
                <li>
                    <a href="?query=<?php echo urlencode($search_term); ?>&sort=rating&type=<?php echo isset($_GET['sort']) ? $_GET['sort'] : ''; ?>">Rating</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    const filterPop = document.querySelector(".filter-popup");
    const filter_open = document.querySelector(".filter");
    const filter_close = document.querySelector("#close-filter");

    filter_open.addEventListener("click", () => {
        filterPop.style.display = 'block';
    });
    filter_close.addEventListener("click", () => {
        filterPop.style.display = 'none';
    });
</script>