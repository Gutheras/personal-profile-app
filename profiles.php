<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'profiles_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch profiles from database
$sql = "SELECT * FROM profiles";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>User Profiles</h1>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='profile'>";
            echo "<img src='" . $row['profile_pic'] . "' alt='Profile Picture'>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Phone: " . $row['phone'] . "</p>";
            echo "<p>Address: " . $row['address'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No profiles found.";
    }
    $conn->close();
    ?>
</body>
</html>