<?php  

session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

    header("location: home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form action='' method='POST'>

<p> Username</p>
<input type='text' class='form-control' name='username' placeholder='Enter username'>

<p> Password</p>
<input type='password' class='form-control' name='pass' placeholder='Enter password'>
<br>
<input type='submit'  name='login' value='Login'>

</form>

</div>
</body>
</html>

<?php  


if(isset($_POST['login'])){



$username = $_POST['username'];
$pass = $_POST['pass'];

$_SESSION['username'] = $username;
$_SESSION['pass'] = $pass;

if(empty($username && $pass)){
    $error = "All field is required";
} 
 elseif(!isset($_SESSION['username '])) {
        $error_mssg = "Session not found";
} else {
$passw = $_SESSION['password'];
$pass_decode = password_verify($pass, $passw);


if(($_SESSION['user'] == $_SESSION['username'] && $pass_decode ==  $_SESSION['pass'])){

    header("location: home.php");

  }else{
    $error_msg = "Incorrect credentials";
             }
        } 
    }


echo "<div class='error'>";
if(isset($error_msg)){
echo $error_msg;
}
echo "</div>";

echo "<div class='error'>";
if(isset($error_mssg)){
echo $error_mssg;
}
echo "</div>";

echo "<div class='err'>";
if(isset($error)){
echo $error;
}
echo "</div>";


echo "<p class ='msg'>";
echo "<a class='ref' href='userform.php'> Don't have an account? Click here</a>";
echo "</p>";

?>



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
    margin-left: 5.5%;
}

.err{
    color:red;
    margin-left: 5.5%;
}


.msg{
    color:blue;
    margin-top:10px;
    margin-left: 10%; 
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
