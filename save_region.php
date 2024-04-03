<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['region_id'])) {
    // Save selected region ID in session
    $_SESSION['selected_region_id'] = $_POST['region_id'];
    $_SESSION['selected_region_name'] = $_POST['region_name'];
    // Respond with success status
    http_response_code(200);
} else {
    // Respond with error status
    http_response_code(400);
}
?>
