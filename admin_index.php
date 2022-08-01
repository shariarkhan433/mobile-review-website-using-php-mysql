<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- first child -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="conatainer-fluid">
                <img src="img/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Wellcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!-- third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="img/user.jpg" alt="" class="admin_img"></a>
                    <p class="text-light text-center">Shariar Khan</p>
                </div>
                
                <div class="button text-center">
                    <button><a href="insert_products.php" class="nav-link text-light bg-info my-1">insert products</a></button>
                 
                    <button><a href="admin_index.php?categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button><a href="admin_index.php?brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="http://localhost/signup/main.php" class="nav-link text-light bg-info my-1">GO Homepage</a></button>
                    <button><a href="http://localhost/signup/logout.php" class="nav-link text-light bg-info my-1">Log Out</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">User Info</a></button>
         
                </div>
            </div>
        </div>
<!-- fourth child -->
<div class="container my-3">
    <?php
    if(isset($_GET['categories'])){
        include('categories.php');
    }
    if(isset($_GET['brands'])){
        include('brands.php');
    }
    ?>

</div>

        <div class="bg-info p-3 text-center footer">
<p>All right  reserved by shariar khan</p>
        </div>
    </div>

    <!--js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>