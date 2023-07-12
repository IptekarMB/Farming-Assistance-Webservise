<?php
$name=$_POST["Name"];
$id=$_POST["ID"];
$contact=$_POST["Contact"];
$contact2=$_POST["Contact2"];
$email=$_POST["Email"];
$address=$_POST["Address"];
$dob=$_POST["DOB"];
$gen=$_POST["gender"];
$password=$_POST["Password"];
$conpassword=$_POST["Password2"];
$photo=$_FILES["Image"];
$mode=$_POST["mode"];

$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
die(" Connection Is Failed ");
$query="insert into formerdata values('$name','$id','$contact','$contact2','$email','$address','$dob','$gen','$mode','$password','$conpassword','$photo')";
$rst=mysqli_query($con,$query);
if($rst==true)
{  
    echo"Registration Succesfyll !!"; 
    header("location:login.html?flag=true");
}
else
{
    header("location:Registration.php ?flag=false");
}
mysqli_close($con)
?>

