<?php include "../connection.php";

// print_r($_GET) ;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "id is :" . $id;

// sql to delete a record
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "record deleted successfully";
        header("location: display.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
mysqli_close($conn);
