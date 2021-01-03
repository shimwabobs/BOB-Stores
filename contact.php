<?php


include("dbconnect.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob store|Contact</title>
    <link rel="stylesheet" href="contact_styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <h1 class="login-title" style="color:#3693ff;">BOB STORE WE ARE READY TO TALK TO YOU</h1>
    <form action="user_process.php" method="post" name="user">
        Name: <input type="text" name="name" placeholder="Enter your name" class="login-input"><br>
        City: <input type="text" name="city" placeholder="Enter your location/city" class="login-input"><br>
        Email: <input type="email" name="email" placeholder="youremail@domain.com"  class="login-input"><br>
        Message: <textarea name=message  placeholder="Enter your message"class="login-input-message"></textarea>
        <input type="submit" value="Send"class="login-button">
    </form>
</body>
</html>