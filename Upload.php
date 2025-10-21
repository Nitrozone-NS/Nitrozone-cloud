<?php
session_start();
// This entire block is PHP
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My File Host</title>
    <style>
        body { font-family: sans-serif; }
        .welcome { color: green; }
    </style>
</head>
<body>
    <h1 class="welcome">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

    <h2>Your File Space</h2>
    <script>
        // Example JS for a simple alert
        document.addEventListener('DOMContentLoaded', () => {
            console.log("Page loaded successfully.");
        });
    </script>
</body>
</html>
