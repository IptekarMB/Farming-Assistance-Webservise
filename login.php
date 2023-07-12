<?php
$id=$_POST["id"];
$farmer="Farmer";
$supplier="Supplier";
$admin="admin";
//$farmer=$_POST["mode"];
//$supplier=$_POST["mode"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
    die(" Connection Is Failed ");
$sqls="select * from formerdata where ID='".$id."' and User_Mode='".$supplier."' and Password='".$password."'";
$rst=mysqli_query($con,$sqls);
$sqlf="select * from formerdata where ID='".$id."' and user_Mode='".$farmer."' and Password='".$password."'";
$rstf=mysqli_query($con,$sqlf);
$sqla="select * from formerdata where ID='".$id."' and user_Mode='".$admin."' and Password='".$password."'";
$rsta=mysqli_query($con,$sqla);

//$rst=mysqli_num_rows($row>0);
if(mysqli_num_rows($rst)>0)
{
  $row=mysqli_fetch_assoc($rst);
        // echo" Login Succesfully ";
        //  echo" User Name: ".$row['Former Name']."<br><br>";
        //  echo" Email-ID: ".$row['Email-ID']."<br><br>";
       // header("location:formerHome.html ?flag=true");
       header("location:suplierHome.php ?flag=true");
}
elseif(mysqli_num_rows($rstf)>0) 
{
  $rowf=mysqli_fetch_assoc($rstf);
  header("location:formerHome.html ?flag=true");
}
elseif(mysqli_num_rows($rsta)>0)
{
  $rowa=mysqli_fetch_assoc($rsta);
  header("location:adminHome.php ?flag=true");
}
else
{
   // echo" Record Not Found ";
  header("location:login.html ?flag=false");
}
mysqli_close($con);
?>