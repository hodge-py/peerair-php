<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        
    </script>
    

</head>
<body style="height: 100vh;">
    <div class="row p-3 border-end-0 shadow" style="backdrop-filter: blur(10px); width: 100vw; margin: 0px;">
        <div class="col-md-10">
        <h1 class="text-start ps-5 text-white"><a style="" href="./index.php">&#9736; PeerAir</a></h1>
        </div>
        <div class="col-md-2">
        <div class="d-flex justify-content-evenly align-items-center" style="height: 100%;">
            
        </div>
        </div>
        </div>


<div id="mainContain" class="container rounded" style=" color: white; width: 65%; height: 90%;">
    <div class="d-flex flex-column justify-content-center" style="height: 100%;">

<div class="row mb-4 m-0 rounded" id="sign-hide" style="background-color: rgba(0,0,0,.5);">
<div class="col">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h3 class="fw-bold mb-3 pt-3">Signup</h3>


    <div class="form-group mb-3 ">

      <label for="username1">Full Name:</label>
    <input id="username1" name="full-name" type="text" class="form-control" />

    <label for="username2">Email:</label>
    <input id="username2" name="username" type="text" class="form-control" />

    <label for="password2">Password:</label>
    <input id="password2" name="password" type="password" class="form-control" />

    <label for="password3">Confirm Password:</label>
    <input id="password3" type="password" type="password2" class="form-control" />

    
    </div>

    <button id='submit-form' type="submit" class="btn btn-primary form-control mb-4">Submit</button>

    <div class='text-center pb-3' id="message"></div>

</form>

<div class="d-flex justify-content-evenly pb-4">
    <a href="./login.php" class="">login</a>
    <a href="#" class="">Forgot Password</a>
    </div>

</div>

</div>




</div>

</div>


</body>

<?php

session_start();
$servername = 'mysql-284bd9f9-khodge1-9a96.a.aivencloud.com';
$username = 'avnadmin';
$password = 'AVNS_uj8SPMvMDIqb7M7_NqU';

try {
  $conn = new PDO("mysql:host=$servername;dbname=defaultdb;port=17203", $username, $password,);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["full-name"];
    $email = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO peerair_users (full_name, email, pass) VALUES ('$name', '$email', '$password')";
    
    if (!$conn->query($sql)) {
      echo"error";
    } else {
      echo "New record created successfully";
      $_SESSION['loggedIn'] = 'true';
      header('Location: index.php');
    }
}


?>

<style>


a {
color: white;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
  color: lightblue;
}

a:active {
  text-decoration: none;
}
    
    body {
        /* background-color: rgb(231, 231, 231); */
       background-color: rgb(56, 56, 56);
        background-size: cover;
        font-family: system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        
    }
    
</style>


<script>

$('#password2, #password3').on('keyup', function() {
  if ($('#password2').val() == $('#password3').val()) {
    $('#message').html('Matching').css('color', 'green');
    $('#submit-form').prop('disabled', false);
    return true;
  } else {
    $('#message').html('Not Matching').css('color', 'red');
    $('#submit-form').prop('disabled', true);
    return false;
  }
});

</script>


</html>