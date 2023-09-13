<?php 
include('connection.php');
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    
    $query = "SELECT * FROM users WHERE user_name = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      
      while($row = mysqli_fetch_assoc($result)) {
        $verify = password_verify($pwd, $row['password']);
        if ($verify) {
          $_SESSION['id'] = $row["id"];
          $_SESSION['name'] = $row["user_name"];
          $_SESSION['email'] = $row["email"];
          // echo 'session ' .  $_SESSION['id'];
  
          header('location: ./expenses/index.php');
        } 
        
      }
      echo 'please enter correct password';
    } else {
       //header('location: login.php');
    }
   
}
?>