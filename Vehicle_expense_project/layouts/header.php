<html>
   	<head>
      	<title>Registration</title>
      	<!-- Include Bootstrap CSS -->
      	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <?php
        // $_SESSION['id'] = '2';
        session_start();
        $userId = isset($_SESSION['id']) ? $_SESSION['id'] : '';

        $link = $_SERVER['PHP_SELF'];
        // $link_array = explode('/',$link);
        
        // if($link_array[2] != 'login.php' && $link_array[2] != 'register.php') {
        //     if($userId == null ) {
        //         header('location: ../login.php'); 
        //     } 
        // }
        
        if(strpos($link, 'login.php') == false  &&  strpos($link, 'register.php') == false){
            if($userId == null ) {
                header('location: ../login.php'); 
            } 
        }
    ?>
    
    

    <body>