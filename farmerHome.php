<?php
$fname=$_POST["name"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$address=$_POST["address"];
$name=$_POST["cName"];
$qty=$_POST["cQty"];
$rate=$_POST["cRate"];
$pic1=$_POST["cImage"];
$pic2=$_POST["cImage2"];

$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
die(" Connection Is Failed ");
$query="insert into selling_data values('$fname','$contact','$email','$address','$name','$qty','$rate','$pic1','$pic2')";
$rst=mysqli_query($con,$query);
if($rst==true)
{  
  //  echo" Selling Crops Information Register Successfully  "; 
   header("location:formerHome.html ?flag=true");
}
else
{
    echo"  information Is Not Register  ";
   // header("location:formerHome.html ?flag=false");
}
mysqli_close($con)
?>

