<?php
include 'layouts/header.php';
include 'layouts/navbar.php';
?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="login-container">
                    <h1 class="text-center">Login</h1>
					<br>

                    <form action="log-session.php" method="post">

						 <div class="col-15">
               			      <div class="form-floating mb-4">
                  			      <input type="text" class="form-control" id="username" name="username" required placeholder="name@example.com">
                 			      <label for="username">Username</label>
                             </div>
               			</div>
						   <div class="col-15">
               			        <div class="form-floating mb-4">
                  			      <input type="password" class="form-control" id="password" name="password" required placeholder="name@example.com">
                 			      <label for="Password">Password</label>
                               </div>
               			  </div>
            		        <br>
                        <button type="submit" name="login" class=" mb-4 btn btn-primary btn-block ">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
include 'layouts/footer.php';
?>