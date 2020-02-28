<?php session_start();
  if (isset($_SESSION['user'])){
    header("Location: ../index.php");
  }

      require_once('database.php');

      $username = $_POST['username'];
      $pass = $_POST['password'];

      $sql = "SELECT id FROM admin WHERE username = '$username' AND password = '$pass' ";

      if(isset($_POST['submit'])){
          if($username==''||$pass==''){
              echo "Please input values";
          }else if($result = mysqli_query($conn,$sql)){
              $row = mysqli_num_rows($result);

              if($row == 1){
                echo "Login successful";
                $_SESSION['user'] = $username;
                header("Refresh:.5; url=../index.php");
              }else{
                  echo "User not found";
              }
              }
          }
      ?>