<?php
$id=$_POST["id"];
$mode=$_POST["mode"];
$comp1=$_POST["comp1"];
$comp2=$_POST["comp2"];
$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
die(" Connection Is Failed ");
$query="insert into Complaint values('$id','$mode','$comp1','$comp2')";
$rst=mysqli_query($con,$query);
if($rst==true)
{  
    // echo "<img src='b.jpg' width='70' height='70'>";
    // echo "<h3 class='text-info specialHead text-center'><strong> Your Complaint  Is Successfully Submitted.</strong></h3>";
    // echo "<a href='complaint.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
    echo"Registration Succesfyll !!"; 
    header("location:login.html?flag=true");
}
else
{
    header("location:complaint.html ?flag=false");
}
mysqli_close($con)
?>
