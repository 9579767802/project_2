<?php
include "../connection.php";
include '../layouts/header.php';
include '../layouts/navbar.php';

$id = $_GET['id'];

$query = "SELECT * FROM expense where id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if (isset($_POST['edit'])) {

    $id = $_GET['id'];
    $name = $_POST['expense_name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $userId = $_SESSION['id'];

    $sql = "UPDATE expense SET expense_name = '$name', amount = '$amount',date ='$date', user_id = '$userId'
    WHERE id ='$id'";
    $data = mysqli_query($conn, $query);

    if ($conn->query($sql)) {
        echo "New record created successfully";
        // echo '<script>location.reload();</script>';
        header('location: index.php');
        exit();
    } else {
        //echo "New record created unsuccessfully";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//$conn->close();
?>

	<body>
      	<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
      		<div class="container mt-5">
        		<h2 align="center" class="mb-5">Vehicle Expenses</h2>

          		<div class="row justify-content-center">

				  <div class="col-6">
						<div class="form-floating mb-3">
							<input type="text" value="<?php echo $result['expense_name'] ?>" class="form-control" id="expense_name" name="expense_name" required placeholder="Name">
							<label for="expense_name">Expense Name</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="number" value="<?php echo $result['amount'] ?>" class="form-control" id="amount" name="amount" required placeholder="Amount">
							<label for="amount">Amount</label>
						</div>
					</div>

					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="date" value="<?php echo date('Y-m-d', strtotime($result['date'])) ?>" class="form-control" id="date" name="date" required>
							<label for="date">Date</label>
						</div>
					</div>
					<div class="col-6">
					<div>
					      <label for="floatingInput" class="form-label"></label>
					      <input class="form-control form-control-lg" name="image_name" id="formFileLg" accept="image/png, image/jpeg" type="file">
					  </div>
            		</div>
         		</div>
				 <button type="submit" name="edit" class="btn btn-primary" style="float:right">Submit</button>

			</div>
      	</form>

	</body>
<?php
include '../layouts/footer.php';
?>
