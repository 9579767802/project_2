<?php
include '../layouts/header.php';
include '../layouts/navbar.php';
?>

	<body>
      	<form action="post.php" method="post" enctype="multipart/form-data">
      		<div class="container mt-5">
        		<h2 align="center"class="mb-5">Vehicle Expenses</h2>

          		<div class="row justify-content-center">
					<div class="col-6">
						<div class="form-floating mb-4">
							<input type="text" class="form-control" id="floatingInput" name="expense_name" required placeholder="name@example.com">
							<label for="floatingInput"> Expense Name</label>
						</div>
					</div>

					<div class="col-6">
               			<div class="form-floating mb-4">
                  			<input type="number" class="form-control" id="floatingInput" name="amount" required placeholder="name@example.com">
                 			<label for="floatingInput"> Expense Amount</label>
               			</div>
            		</div>


					<div class="col-6">
						<div class="form-floating mb-4">
							<input type="date" class="form-control" id="floatingInput" name="date" required placeholder="name@example.com">
							<label for="floatingInput">Date</label>
						</div>
					</div>
					<div class="col-6">
                      <div>
					      <label for="floatingInput" class="form-label"></label>
					      <input class="form-control form-control-lg" name="image_name" id="formFileLg" accept="image/png, image/jpeg, image/jpg" type="file">
					  </div>
					</div>
                </div>
				     <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>

			</div>
      	</form>

	</body>
<?php
include '../layouts/footer.php';
?>