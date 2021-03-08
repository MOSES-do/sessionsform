<?php  


session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
echo '<div class="top"><h3 style="text-align:right; margin-top:20px; margin-right:60px;";>  Hello, '   . $_SESSION["username"]. '</h2></div>';


echo '<div><h1 style="text-align:center";>Welcome To Your Dashboard</h1></div>';
} else {
    echo "<script> location.href='login.php' </script>";

}
?>

 <form action="logout.php" method ="POST">
        
<input type = "submit" value="Logout" class="logout" name="logout">
               
</form> 

<style>
.logout{
   cursor:pointer;
   position:absolute;
   left:86em;
   top:73px;

}
</style>


