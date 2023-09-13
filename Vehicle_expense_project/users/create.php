
  <form action="post.php" method="post">
      		<div class="container mt-5">
        		<h2 align="center"class="mb-5">User Registration</h2>

          		<div class="row justify-content-center">
					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingInput" name="username" required placeholder="name@example.com">
							<label for="floatingInput">Username</label>
						</div>
					</div>

					<div class="col-6">
               			<div class="form-floating mb-3">
                  			<input type="text" class="form-control" id="floatingInput" name="phone_number" required placeholder="name@example.com">
                 			<label for="floatingInput">Phone Number</label>
               			</div>
            		</div>

					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingInput" name="vehicle_number" required placeholder="name@example.com">
							<label for="floatingInput">Vehicle No</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="floatingInput" name="email" required placeholder="name@example.com">
							<label for="floatingInput">Email</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="floatingInput" name="password" required placeholder="name@example.com">
							<label for="floatingInput">Password</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-floating mb-3">
							<input type="password" class="form-control" id="floatingInput" name="confirm_password" required placeholder="name@example.com">
							<label for="floatingInput">Confirm Password</label>
						</div>
            		</div>
         		</div>
				 <button type="submit" name="submit" class="btn btn-primary" style="float:left">Register</button>
				 <a href="display.php" class="btn btn-primary ms-3">Display</a>
			</div>
      	</form>
