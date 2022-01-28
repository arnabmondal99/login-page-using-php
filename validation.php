<?php
//creating session

session_start();



$servername = "localhost";
$username = "root";
$password = "";
$database="registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully<br>";

}

$name = $_POST['user'];
$passwrod = $_POST['password'];

$sql = "select * from reglog where name='$name' && password = '$passwrod'";

 $result= mysqli_query($conn,$sql);

 $num = mysqli_num_rows($result);

 if($num==1){
     $_SESSION['username'] = $name;
     header('location:home.php');
    
 }

 else{
    echo "first sign in";
    header('location:login.php');

 }

?>