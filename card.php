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
                                <div class="row p-2">
      <div class="card col-5 m-2 p-1" style="width: 18rem;">
        <img src="<?php echo $rst['crops_Picture']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $rst['crops_name']; ?> </h5>
          <p class="card-text"> <?php echo $rst['crops_rate']; ?></p>
          <p class="card-text"><?php echo $rst['quantity_crops']; ?>  </p>
          <a href="#" class="btn btn-primary"> Buy Crops </a>
        </div>
      </div>
                                       
                                <?php
                            }
                            ?>
                   
                </div>

            </div>

        </div>

    </div>
</body>
</html>