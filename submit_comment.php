<?php
include 'database.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment']; // Get the comment from the form

    // Insert the comment into the database
    $sql = "INSERT INTO user_comment (comment) VALUES ('$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "Comment submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
