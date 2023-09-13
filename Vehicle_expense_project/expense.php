
<?php
include './layouts/header.php';
include './layouts/navbar.php';
?>

<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Display</title>
    <style>
    body {
        background: whitesmoke;
    }

    table {
        background-color: white;
    }
    </style>
</head>
<?php
include "../connection.php";
$userprofile = $_SESSION['user_name'];
if (empty($userprofile)) {
    header('location:login.php');
} 

$query = "SELECT * FROM expense";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

//echo $result['user_name']."   ".$result ['phone_no']."   ".$result['vehicle_no']."    ".$result['email'];

if ($total != 0) {
    // echo "table has recorded";
    ?>
<h2 align="center"><mark> Displaying All Records</mark></h2>


<table class="table container">
    <thead class="table-dark">
        <span class="border border-5"></span>

        <th width="7%"> ID</th>
        <th width="15%"> </th>
        <th width="15%"> Phone No</th>
        <th width="15%"> Vehicle no</th>
        <th width="25%"> Email </th>
        <th width="25%"> Operations </th>
    </thead>
    <tbody>
        <?php
while ($result = mysqli_fetch_assoc($data)) {
        echo "<tr>
        <td> " . $result['id'] . "</td>
        <td> " . $result['user_name'] . "</td>
        <td> " . $result['phone_no'] . "</td>
        <td> " . $result['vehicle_no'] . "</td>
        <td> " . $result['email'] . "</td>
        <td>
                <a class='btn btn-primary' href='update.php?id=$result[id]&usern=$result[user_name]&pn=$result[phone_no]&vn=$result[vehicle_no]&em=$result[email]'>Update</a>
                <a class='btn btn-danger' name='delete' href='delete.php?id=$result[id]'>Delete</a>

            </td>

        </tr>
        ";

    }
} else {
    echo "no record found";
}
?>
    </tbody>
</table>



<!-- </table> -->

</html>
	<?php
include './layouts/footer.php';
?>
<?php
include("session.php");

?>