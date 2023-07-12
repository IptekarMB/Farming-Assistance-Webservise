<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forme Home Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#"> <i class="bi bi-bricks"> </i> शेतकरी </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homeFarmer.html"> <i
                                class="bi bi-house-fill"></i> Home </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-brightness-high-fill"></i> Farmer
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="FarmerLOgin.html"> Sing In </a></li>
                            <li><a class="dropdown-item" href="homeFarmer.html"> Sing out </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="farmerregistration.html"> Farmer Register </a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-emoji-smile"></i> Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="adminLogin.html"> Log In </a></li>
                            <li><a class="dropdown-item" href="homeFarmer.html"> Log out </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"> Admin Register </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-broadcast-pin"></i> Suplier
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="suplierlogin.html"> Sing In </a></li>
                            <li><a class="dropdown-item" href="homeFarmer.html"> Sing out </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="suplierRegistration.html"> Supplier Register </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="complaint.html"> <i
                                class="bi bi-bullseye"></i> Complaint </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="helpdesk.html"> <i
                                class="bi bi-question-diamond-fill"></i> Help desk </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-box-arrow-in-left"></i>
                            Crops Information </a>
                    </li>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    <li class=" m-3 nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                        </a>

                    </li>
                </ul>
                <ul>
          <li class="d-flex">
            <button class="btn-dark text-center text-white rounded-pill">
              <a href="homeFarmer.html" class="text-white">Log-out</a>
            </button>
          </li>
        </ul>
            </div>
        </div>
    </nav>
    <div class="row p-2">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
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
                    <div class="row p-2 m-3">
                        <div class="card col-12 m-2 p-1" style="width: 18rem;">
                            Image-1 Of Crops: <img src="<?php echo $rst['crops_Picture']; ?>" class="card-img-top"
                                alt="...">
                            Image-2 Of Crops: <img src="<?php echo $rst['crops_picture2']; ?>" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title"> Farmer Name: <?php echo $rst['User_Name']; ?> </h5>
                                <h5 class="card-title"> Farmer Contact: <?php echo $rst['Contact']; ?> </h5>
                                <h5 class="card-title"> Farmer Email_ID: <?php echo $rst['Email_ID']; ?> </h5>
                                <h5 class="card-title"> Farmer Address: <?php echo $rst['Address']; ?> </h5>
                                <h5 class="card-title"> Crops Name: <?php echo $rst['crops_name']; ?> </h5>
                                <p class="card-text"> Crops Rate: <?php echo $rst['crops_rate']; ?></p>
                                <p class="card-text"> Crops Quantity: <?php echo $rst['quantity_crops']; ?> </p>
                                <!-- <button></button> -->
                                <a href="#" name="confirm" class="btn btn-primary"> Buy Crops </a>
                            </div>
                        </div>

                        <?php
                              }
                              ?>

                    </div>

                </div>

            </div>

        </div>
    </div>
</body>

</html>