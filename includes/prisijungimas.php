<?php

session_start();


if (isset($_POST['submit'])) {
  include 'dbh.inc.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);



  // ERROR HANDLERS
//Check if inputs are empty
    if (empty($username) || empty($pwd)) {
      header("Location: ../index.html?=empty");
      exit();
    }
    else
    {
      $sql = "SELECT * FROM users WHERE user_uid='$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1) {
        header ("Location: ../index.html?=Error");
        exit();
      }
      else
      {
        if ($row = mysqli_fetch_assoc($result)) {
          //De-hashing paswrd
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if ($hashedPwdCheck == false) {
            header ("Location: ../index.html?=Error");
            exit();
          } else if ($hashedPwdCheck == true) {
            // Log IN the USER HERE
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_uid'] = $row['user_uid'];
            header ("Location: ../dashboard.php");
            exit();
          }
        }
      }
    }

} else {
  header ("Location: ../index.html?=Error");
  exit();
}
