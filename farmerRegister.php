<?php
$fname=$_POST["farmerName"];
$fid=$_POST["farmerID"];
$fcontact=$_POST["farmerContact"];
$contact2=$_POST["farmerContact2"];
$femail=$_POST["farmerEmail"];
$faddress=$_POST["farmerAddress"];
$fdob=$_POST["farmerDOB"];
$fgen=$_POST["farmergender"];
$fpassword=$_POST["farmerPassword"];
$fconpassword=$_POST["farmerPassword2"];
$fphoto=$_POST["farmerImage"];

$con=mysqli_connect("localhost","root","","project_database");
if(!$con)
die(" Connection Is Failed ");
$query="insert into farmer data project values('$fname','$fID','$fcontact','$fcontact2','$femail','$faddress','$fdob','$fgen','$fpassword','$fconpassword','$fphoto')";
$rst=mysqli_query($con,$query);
if($rst==true)
{  
    hearder("lacation:farmerLogin.php ?flag=true");
}
else
{
    header("location:formerRegistration.html ?flag=false");
}
mysqli_close($con)
?>

