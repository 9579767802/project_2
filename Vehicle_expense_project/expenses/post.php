<?php
include "../connection.php";
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['expense_name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $userId = $_SESSION['id'];
    $statusMsg = '';

//file upload path
    $targetDir = "../file-upload/";
    $fileName = basename($_FILES["image_name"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    

    if (move_uploaded_file($_FILES["image_name"]["tmp_name"], $targetFilePath)) {
        $statusMsg = "The file " . $fileName . " has been uploaded.";
    } else {
        $statusMsg = "Sorry, there was an error uploading your file.";
    }

    $sql = "INSERT INTO expense (expense_name, amount, date, image_name, user_id )
    VALUES ('$name', '$amount', '$date', '$targetFilePath', '$userId')";

    //  echo $sql;die();
    if ($conn->query($sql)) {
        echo "New record created successfully";
        header("location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
