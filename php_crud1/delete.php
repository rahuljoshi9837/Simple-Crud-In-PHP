<?php
// include database connection file
include_once("conn.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");
// After delete redirect to Home, so that latest user list will be displayed.0
?>
<a href="view.php">Back to view page</a>

