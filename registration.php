<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bob Store | Register</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css>
    <style>
        .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
    </style>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  <p class='link'>Click here to <a href='index.php' >Continue</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  <p class='link'>Click here to <a href='login.php'>login</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="index.php" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username..." required />
        <input type="text" class="login-input" name="email" placeholder="Email...">
        <input type="password" class="login-input" name="password" placeholder="Password..." >
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <span class="link" >I already have an account <a href="login.php"style="text-decoration: none;"> <em style="color:blue;">Login</em></a></span>
    </form>
<?php
}
?>
</body>
</html>