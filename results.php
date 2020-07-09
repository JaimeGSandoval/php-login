<?php

// $username = $_POST['user_name'];
// $password = $_POST['user_password'];
$username = filter_input(INPUT_POST, 'user_name');
$password = filter_input(INPUT_POST, 'user_password');

if(empty($username)) {
  $name_error = 'Please insert your username';
} else if(strlen($username) < 6) {
  $name_error = 'Your username needs to have a minimum of 6 letters.';
}

if(empty($password)) {
  $password_error = 'Please insert a password';
} else if(strlen($username) < 6) {
  $password_error = 'Your password needs to have a minimum length of 6 characters.';
}

if(empty($name_error) && empty($password_error)) {
  include('success.php');
} else {
  include('index.php');
}
?>
