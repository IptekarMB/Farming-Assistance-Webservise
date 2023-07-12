<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin home </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#"> <i class="bi bi-bricks">  </i> शेतकरी </a>
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
                            <li><a class="dropdown-item" href="adminLogin.html"> Login In </a></li>
                            <li><a class="dropdown-item" href="homeFarmer.html"> LOg out </a></li>
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
                        <a class="nav-link active" aria-current="page" href="#"> <i
                                class="bi bi-question-diamond-fill"></i> Help desk </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <i class="bi bi-box-arrow-in-left"></i>
                            Crops Information </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-list-task"></i> Complaints
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#"> Former Complaint </a></li>
                            <li><a class="dropdown-item" href="#"> Supplier Complaint </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="seecomp.php"> All Complaint </a></li>
                        </ul>
                    </li>

                </ul>
                
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container m-4 p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="table-responsive">
                    <table class="table-striped text-center rounded-pill table-bordered border  text" border>
                        <thead class="bg-success text">
                            <tr class="">
                                <th class="py-3 text-white"> User ID </th>
                                <th class="py-3 text-white"> User Mode</th>
                                <th class="py-3 text-white"> Complaint-1 </th>
                                <th class="py-3 text-white"> Complaint-2</th>
                                
                                       </tr>

                        </thead>
                        <tbody>
                            <?php
                            $con=mysqli_connect("localhost","root","","fawsp");
                            if(!$con)
                            die(" Connection Is Failed ");
                            $sql="Select * from Complaint";
                            $query=mysqli_query($con,$sql);
                            $rst=mysqli_fetch_array($query);
                            while($rst=mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $rst['ID']; ?>
                            </td><td><?php echo $rst['Mode']; ?>
                            </td><td><?php echo $rst['Complaint_1']; ?>
                            </td><td> <?php echo $rst['Complaint_2']; ?>
                            </td>   <td>
                                      <button class="btn-primary rounded-pill" type="button" >
                                         Take Action

                                      </button>
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
    <div class="row">
    <div class="col-4">

    </div>
    <div class="col-2 ">
                <button type="reset" class="btn btn-dark shadow w-100 rounded-pill"> <a class="text-white" href="adminhome.php"> Back </a> </button>

              </div>
              </div>
</body>
</html>