<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if( isset($_SESSION['id']) ) { ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo strstr($_SERVER['REQUEST_URI'], "expenses") ? 'active' : '' ?>"
                        href="index.php">Expenses</a>
                </li>
                <?php } ?>

                
            </ul>
            <ul class="navbar-nav float-right">
                <?php if( !isset($_SESSION['id']) ) { ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo strstr($_SERVER['REQUEST_URI'], "login") ? 'active' : '' ?>"
                        aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo strstr($_SERVER['REQUEST_URI'], "register") ? 'active' : '' ?>"
                        href="register.php">Register</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item float-right">
                    <a class="nav-link float-right <?php echo strstr($_SERVER['REQUEST_URI'], "Logout") ? 'active' : '' ?>"
                        href="../logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
            
        </div>
    </div>
</nav>

