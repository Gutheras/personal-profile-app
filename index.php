<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>My profile</h1>
    <form action="save_profile.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea><br>

        <label for="profile_pic">Profile Picture:</label>
        <input type="file" id="profile_pic" name="profile_pic" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
