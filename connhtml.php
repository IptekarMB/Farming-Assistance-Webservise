<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $servername='localhost:3306';
    $username='root';
    $dbpass='Manager#sql';
    $conn=mysql_connect($servername,$username,$password);
    if(!$conn)
    {
        die('connection Failed'.mysql_Error());

    }
    echo" Connection IS Successful";
    echo $conn;
    mysql_close($conn); 
    ?>
</body>
</html>