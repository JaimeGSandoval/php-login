<?php
if(!isset($username)) {
  $username = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>PHP Form Validation</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="img_container">
        <img src="user.png" alt="default user avatar">
      </div>
      <form action="results.php" method="POST">
        <input type="text" placeholder="username" name="user_name" value="<?php echo htmlspecialchars($username)?>"> <br>

      <!--***** php *******-->
       <?php

       if(isset($name_error)) {?>

       <p><?php echo $name_error?></p>

       <?php }?>

       <input type="password" placeholder="password" name="user_password"><br>

        <?php

       if(isset($password_error)) {?>

       <p><?php echo $password_error?></p>

       <?php }?>

       <!--***** End php ******-->

       <input type="submit" value="REGISTER" class="register-button">
      </form>
    </div>
  </div>
</body>
</html>
