<?php 
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

    header("location: home.php");
}


if(isset($_POST['submit'])){
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_BCRYPT);


$_SESSION['user'] = $user;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

if(empty($_SESSION['user']) || empty($_SESSION['email']) || empty($_SESSION['password'])){
  $error_msg = "All field is required";

}
else {
    header("location: login.php");
    
}


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Registration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<form action="" method="POST">
<p>Username</p>
<input type="text" class="form-control" name="user" placeholder="Enter username">

<p>Email</p>
<input type="text"  class="form-control" name="email" placeholder="Enter email">

<p>Password</p>
<input type="password" class="form-control" name="password" placeholder="Enter password"><br>

<input  type="submit" class="form-control btn"  name="submit" value="Register">
</form> 

<p class="error">
<?php if(isset($error_msg))
        echo $error_msg;
?>
</p>

<p>

<a class="ref" href="login.php"> Already have an account? Login here</a>

</p>
</div>
</body>
</html>




<style>

body{
	background-color: #9b59b6;

}

.form-control{
    width:30%;
}

form{
    margin-top:10%;
}

.error{
    color:red;
    padding:3px;
}

.ref{
    margin-left:10%;
    color:white;
}

.ref:hover{
    color:#2ecc71;
}

input[type="text"]{
width:100%;

}

input[type="password"]{
width:100%;

}


.btn{
width:100%;
background-color:#4CAF50;
}

</style>


















<!-- 

// $username = 'Daniel';
// $password = '12345';

// $_SESSION['user'] = $username;
// $_SESSION['pass'] = $password;

// if($username =='Moses' && $password == '12345'){
//     echo "Welcome to your dashboard" ." " .$_SESSION['user'];
// } else {
//     echo "Wrong username and password combination";
// } -->
