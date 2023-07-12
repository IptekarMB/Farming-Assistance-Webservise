<?php
$id=$_POST["id"];
$password=$_POST["oldpassword"];
$new=$_POST["newpassword"];
$conf=$_POST["conpassword"]
$con=mysqli_connect("localhost","root","","fawsp");
if(!$con)
    die(" Connection Is Failed ");
    $sql="update  into formerdata set Password='".$new.",'Re_password='".$conf."' where ID='".$id."' and Password='".$password."'";

   // $sqls="select * from formerdata where ID='".$id."' and User_Mode='".$supplier."' and Password='".$password."'";

   if(mysqli_query($con,$sql));
// if(mysqli_num_rows($rst)>0)
{
  // $row=mysqli_fetch_assoc($rst);
       header("location:login.php ?flag=true");
}
else
{
  header("location:forgetPass.html ?flag=false");
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   
</body>

<script>
  function validatForm()
          {
        var new=document.getElementById("newpassword").value;
        var con=document.getElementById("conpassword").value;
        //var pass1=document.getElementById("password").value;
        
            // var uid=document.getElementById("uid").value;
            // var pa=document.getElementById("pass1").value;
            if(new != con)
            {
              alert("please Provide Same Password");
              return false;
            }
            if(pass1 ==='')
            {
              alert("Please provide password ");
              return false;
            }
            if(pass2==='')
            {
              alert("Please Provide Confrim Password..");
              return false;
            }          
            if(pass1.length<8)
            {
              alert("The length of the password must be greater than 8 character");
              return false;
            }
            if(con==new){
              alert(" Password Changed Successfully .. ");
            }
          }
</script>
</html>