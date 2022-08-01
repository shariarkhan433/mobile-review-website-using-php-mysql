<!-- connect file -->
<?php
include('img/connect1.php');

?>
<!DOCTYPE html>

<head>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <!-- font awesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
   integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  <link rel="stylesheet" href="style.css">

    <style type="text/css">
    p {
        color: red;
    }
</style>

</head>
<html>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Top Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Top Ratings</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Smartphone</i></a></li>
                            <li><a class="dropdown-item" href="#">Feature Phone</a></li>
                            <li><a class="dropdown-item" href="#">Tablet</a></li>
                            <li><a class="dropdown-item" href="#">Smrtwatch</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Showroom
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Showrooms</a></li>
                            <li><a class="dropdown-item" href="#">Showrooms add</a></li>
                            <li><a class="dropdown-item" href="#">Service centers</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/signup/login.php">Admin Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/signup/sign-up.php">Admin Sign up</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h3> Phone Brands</h3></a>
                </li>
                <?php
                $select_brands="Select * from brands";
                $result_brands=mysqli_query($con,$select_brands);
                
                while($row_data=mysqli_fetch_assoc($result_brands)){
                    $brand_title=$row_data['brand_name'];
                    $brand_id=$row_data['brand_id'];
                    echo " <li class='nav-item' >
                    <a href='main.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                    </li>";
                }
                ?>
               
            </ul>

            <!-- price range -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h3>Category</h3></a>
                </li>
                <?php
                $select_categories="Select * from categories";
                $result_categories=mysqli_query($con,$select_categories);
              
                while($row_data=mysqli_fetch_assoc($result_categories)){
                    $cat_title=$row_data['category_title'];
                    $cat_id=$row_data['category_id'];
                    echo " <li class='nav-item' >
                    <a href='main.php?category=$cat_id' class='nav-link text-light'>$cat_title</a>
                    </li>";
                }
                ?>

            </ul>
            
        </div>


        <div class="col-md-10">
            <div class="area">
                <h1 class="title">Latest Update Devices</h1>
                <!-- products -->
                <div class="row px-3">
                    <!-- collecting products -->
                    <?php
                    $select_query="Select * from products";
                    $result_query=mysqli_query($con,$select_query);
               while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_keyword=$row['product_keyword'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                $product_image1=$row['image1'];
                $product_price=$row['price'];

                echo "<div class='col-md-4'>
                <div class='card' style='width: 20rem;'>
                    <img src='img/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <h6>$product_description</h6>
                        <p class='card-text'>BDT 10,500</p>
                        <a href='#' class='btn btn-secondary'>View Details</a>
                    </div>
                </div>
            </div>";
               }

                    ?>

                   
            
                </div>
            </div>
        </div>
    </div>

    <div class="area">
        <h2 class="title">Mobile Reviews</h2>
        <div class="row">
            <div class="post-thumb thumbnail">
                <div class="col-sm-1">
                    <b><img src="reviewpage/Samsung-Galaxy-Note-20-Ultra-5G.JPG" width="100px" height="100px"
                            class="card-img-top" padding="2px">Samsung Galaxy Note 20 Ultra 5G
                        Review</b>

                </div>
                <div class="col-sm-12">
                    <div>The Samsung Galaxy Note series has always been the smartphone of most professionals, myself
                        included.
                        I was originally connected and haven't been able to walk since then. With Note devices, you feel
                        like you can do whatever matters.
                        And that's the feeling I got again after holding the Samsung Galaxy Note 20 Ultra 5G in my hand.
                        But worth Rs 1 Lakh+ money, is this phone worth it? Read the review for
                        <a href="#">Bangla</a> or <a href="#">English</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="post-thumb thumbnail">
                <div class="col-sm-1">
                    <b><img src="reviewpage/Vivo-Y20-Nebula-Blue.JPG" width="100px" height="100px" class="card-img-top"
                            padding="2px">Vivo Y20 Review</b>

                </div>
                <div class="col-sm-12">
                    <div>
                        Vivo has recently launched a mid-range segment in August 2020. And It's a Y-series(20)
                        smartphone. Before this Y20,Vivo has
                        already launched a lot of Y series phone at a very affordable price such as Y50, Y11, Y90 etc.
                        This time we are going to see what new or special features Vivo has added. With Vivo Y20, Vivo
                        also has launched another model of Y series that is named Y20i. This two phones

                        <a href="#">Bangla</a> or
                        <a href="#">English</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="post-thumb thumbnail">
                <div class="col-sm-1">
                    <b><img src="reviewpage/Tecno-Spark-6-Air-Ocean-Blue.JPG" width="100px" height="100px"
                            class="card-img-top" padding="2px">Tecno Spark 6 Air Review</b>

                </div>
                <div class="col-sm-12">
                    <div>
                        Tecno's popular series of smartphones 'Tecno Spark 6 Air' has been launched in Bangladesh which
                        is a low budget phone. Officially,
                        the sale of the phone has already started in the market. The last few days I have been using
                        this phone.
                        And I have found the similarity of the Tecno Pouvier 4 with the phone in use. The key is to buy
                        the phone that will attract the buyers.
                        <a href="#">Bangla</a> or
                        <a href="#">English</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="post-thumb thumbnail">
                <div class="col-sm-1">
                    <b><img src="reviewpage/Realme-7i-Polar-Blue.JPG" width="100px" height="100px" class="card-img-top"
                            padding="2px">Realme 7i Review</b>

                </div>
                <div class="col-sm-12">
                    <div>
                        Technological advances are making cell phones smarter every day. But the price went up too! If
                        you want to buy a smartphone at an affordable price with modern features,
                        don't miss to check out the realme 7 series! Recently, Realme has launched a new smartphone in
                        its Realme 7 series - the Realme 7i.
                        The new budget Realme smartphone joins the Realme 7 and the Realme 7 Pro devices that were
                        launchedBangla
                        <a href="#">Bangla</a> or
                        <a href="#">English</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>