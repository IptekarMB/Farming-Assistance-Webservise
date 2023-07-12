<?php
$id=$_POST["id"];
$password=$_POST["pass1"];
$mode=$_POST["mode"];
$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
{
    die("Error: Connection Is Failed");
}
$sql="delete from formerdata wherer ID='".$id."' and  Mode='".$mode."' and  Password='".$password."'";
// $rst=mysqli_query($con,$sql);
if(mysqli_query($con,$sql))
{
    echo" User Account Is Deleted  ";
    
}
else
{
    echo" User Account Is Not Found ";
}
mysqli_close($con);
?>