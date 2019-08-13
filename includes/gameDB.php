<?php
$dbServername = "127.0.0.1:3306";
$dbUsername = "u465015952_admin";
$dbPassword = "kebabas159";
$dbName = "u465015952_farm";


                  // CREATE CONNECTION//
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                // Check connection//
                if ($conn->connect_error) {
                  die("Connection failed :".$conn->connect_error);
                }


            $sql = "SELECT * FROM resourses";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc())
            {
              $userID =$_SESSION['u_uid'];
              $sql = "SELECT * FROM production WHERE user_id ='$userID'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);

              $wood_production = $row['wood_production'];
              $wheat_production = $row['wheat_production'];
              $cabage_production = $row['cabage_production'];
              $fruit_production = $row['fruit_production'];

              $sql = "UPDATE resourses SET wood = wood + '$wood_production' WHERE id= '$userID'";
              if (mysqli_query($conn, $sql))
              {
                echo "Farm wood have been updated!</br>";
              }

              $sql = "UPDATE resourses SET wheat = wheat + '$wheat_production' WHERE id= '$userID'";
              if (mysqli_query($conn, $sql))
              {
                echo "Farm wheat have been updated!</br>";
              }

              $sql = "UPDATE resourses SET cabage = cabage + '$cabage_production' WHERE id= '$userID'";
              if (mysqli_query($conn, $sql))
              {
                echo "Farm cabage have been updated!</br>";
              }

              $sql = "UPDATE resourses SET fruit = fruit + '$fruit_production' WHERE id= '$userID'";
              if (mysqli_query($conn, $sql))
              {
                echo "Farm fruit have been updated!</br>";
              }

            }
 ?>
