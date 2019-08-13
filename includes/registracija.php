<?php

if (isset($_POST['submit'])) {

include_once 'dbh.inc.php';
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  $fermname = mysqli_real_escape_string($conn, $_POST['ferm']);


  //Error handller
  // check if fields are emty
  if (empty($email) || empty($username) || empty($pwd) ||empty($fermname)  ) {
    header("Location: ../index.html?=EmtyFields");
    exit();
  }
  else
  {
    //check if imput charachter are valid
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
      header("Location: ../index.html?=InvalidUsername");
      exit();
    }
    else
    {
      //check if email is valid
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.html?=EmailNotValid");
        exit();
      }
      else
      {
        $sql = "SELECT * FROM users WHERE user_uid='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          header("Location: ../index.html?=WrongUsername");
          exit();
        } else
        {
          //hashing the password
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          //INSER the user into datebase
          $sql = "INSERT INTO users (user_uid, user_email, user_pwd, ferm_name) VALUES('$username', '$email',  '$hashedPwd', '$fermname');";
          mysqli_query($conn, $sql);
          header("Location: ../index.html?=Sucess");
          exit();
        }
      }
    }
  }
}
else {
header("Location: ../index.html");
  exit();
}
