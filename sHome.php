<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="table-responsive">
                    <table class="table-striped text-center table-bordered border text-white" border>
                        <thead class="bg-dark text-white">
                            <tr class="">
                                <th class="py-3 text-white">Crops Name</th>
                                <th class="py-3 text-white">Crops Quantity</th>
                                <th class="py-3 text-white">Crops Rate</th>
                                <th class="py-3 text-white">Crops Picture</th>
                                <th class="py-3 text-white">Crops Picture-2</th>
                                       </tr>

                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","fawsp");
                            if(!$con)
                            die(" Connection Is Failed ");
                            $sql="Select * from selling_data";
                            $query=mysqli_query($con,$sql);
                            $rst=mysqli_fetch_array($query);
                            while($rst=mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $rst['crops_name']; ?>
                            </td><td><?php echo $rst['quantity_crops']; ?>
                            </td><td><?php echo $rst['crops_rate']; ?>
                            </td><td> <img src="<?php echo $rst['crops_Picture']; ?>" alt="" height="50" width="100"> 
                            </td><td> <img src="<?php echo $rst['crops_picture2']; ?>" alt="" height="50" width="100">  
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