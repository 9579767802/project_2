<?php include("connection.php");

$id = $_GET['id'];

$query= "SELECT * FROM users where id='$id'";
$data = mysqli_query($conn ,$query);

$total = mysqli_num_rows($data);
$result =mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
   <head>
      <title>User Registration</title>
      <!-- Include Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <style>
         body {background-color: white;}
      </style>

        <form action="" method="post">
      <div class="container mt-5">
         <h2 class="mb-4">Update User Details </h2>
         <div class="row justify-content-center">
            <div class="col-6">
               <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" value="<?php echo $result['user_name'];?>" class="form-control" id="username" name="username" required>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="Phone Number">Phone number:</label>
                  <input type="number"value="<?php echo $result['phone_no'];?>" class="form-control" id="phone_number" name="phone_number" required>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="vehicle_number">vehicle number:</label>
                  <input type="text" value="<?php echo $result['vehicle_no'];?>" class="form-control" id="vehicle_number" name="vehicle_number" required>
               </div>
            </div>
            <div class="col-6">
               <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" value="<?php echo $result['email'];?>" class="form-control" id="email" name="email" required>
               </div>
            </div>
            <div class="col-6  ">
               <div class="form-group">
                  <label for="password">password:</label>
                  <input type="password" value="<?php echo $result['password'];?>" class="form-control" id="password" name="password" required>
               </div>
            </div>
            <div class="col-6   "></div>
         </div>
         <br>
         <button type="submit" value="update details" name="Update" class="btn btn-primary" style="float:left">Update</button>
      </div>
      </form>

      <!-- Include Bootstrap JS and jQuery (optional) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>
<?php
if (isset($_POST['Update']))
 {
   
    $id = $_GET['id'];
    $fname = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $vehicle_number = $_POST['vehicle_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

   
   $sql = "UPDATE users SET user_name='$fname', phone_no='$phone_number', vehicle_no='$vehicle_number', email='$email', password='$password' WHERE id='$id'";
   $data = mysqli_query($conn,$query);  


    if ($conn->query($sql) === true) {
        //echo "New record created successfully";
        header("location: display.php");
        exit();
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   }

   $conn->close();
    ?>