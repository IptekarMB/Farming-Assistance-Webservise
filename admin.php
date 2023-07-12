<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="table-responsive">
                    <table class="table-striped text-center table-bordered border bg-dark text-white" border>
                        <thead class="bg-secondary text">
                            <tr class="">
                                <th class="py-3 text-white">Farmer Name </th>
                                <th class="py-3 text-white">Farmer ID</th>
                                <th class="py-3 text-white">Contact</th>
                                <th class="py-3 text-white">Contact-2</th>
                                <th class="py-3 text-white">Email-ID</th>
                                <th class="py-3 text-white">Address</th>
                                <th class="py-3 text-white">DOB</th>
                                <th class="py-3 text-white">Gender</th>
                                <th class="py-3 text-white">User-Mode</th>
                                <th class="py-3 text-white">Picture</th>
 
                                       </tr>

                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","fawsp");
                            if(!$con)
                            die(" Connection Is Failed ");
                            $sql="Select * from formerdata";
                            $query=mysqli_query($con,$sql);
                            $rst=mysqli_fetch_array($query);
                            while($rst=mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $rst['Formar_Name']; ?>
                            </td><td><?php echo $rst['ID']; ?>
                            </td><td><?php echo $rst['Contact']; ?>
                            </td><td> <?php echo $rst['2Contact']; ?>
                            </td><td> <?php echo $rst['Email_ID']; ?>
                            </td><td> <?php echo $rst['Address']; ?>
                            </td><td> <?php echo $rst['DOB']; ?>
                            </td><td> <?php echo $rst['User_Gender']; ?>
                            </td><td> <?php echo $rst['User_Mode']; ?>
                    
                            </td><td> <img src="<?php echo $rst['Picture']; ?>" alt="" height="50" width="100">  
                                    </td>
                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>

                    </table>
                    

                </div>

            </div>

        </div>

    </div>
</body>
</html>