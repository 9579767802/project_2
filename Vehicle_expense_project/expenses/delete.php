<?php include "../connection.php";

// print_r($_GET) ;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $query = "SELECT image_name FROM expense where id='$id'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);

    $targetFilePath = $result['image_name'];

    if(file_exists($result['image_name'])) {
        unlink($targetFilePath);
    }

    // sql to delete a Expense
    $sql = "DELETE FROM expense WHERE id ='$id'";

    if ($conn->query($sql) === true) {
        echo "Expense deleted successfully";
        header("location:index.php");
        exit();
    } else {
        echo "Expense deleted successfully";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
}
