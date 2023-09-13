<?php
include '../connection.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $vehicle_number = $_POST['vehicle_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    
    if ($_POST["password"] === $_POST["confirm_password"]) {
       echo "<script> alert(' Entered passwords are same') </script>";
    }else{
        echo "<script> alert(' Please enter same passwords ') </script>";
        header("location:../register.php");
        return 0;
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

     
    $sql = "INSERT INTO users (user_name, phone_no, vehicle_no, email, password ,confirm_password)
    VALUES ('$fname','$phone_number', '$vehicle_number', '$email', '$hashed_password', '$cpassword')";

    if ($conn->query($sql) === true) {
        header("location:../login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
