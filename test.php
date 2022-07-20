<!DOCTYPE html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <style type="text/css">
    p {
        color: red;
    }

    nav {
        background: rgb(38, 50, 56);
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
                            <li><a class="dropdown-item" href="#">Smartphone</a></li>
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
                        <a class="nav-link" href="#">Compare</a>
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
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <b>phone Brands</b>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Apple</a></li>
                    <li class="list-group-item"><a href="#">Samsung</a></li>
                    <li class="list-group-item"><a href="#">Realme</a></li>
                    <li class="list-group-item"><a href="#">Oppo</a></li>
                    <li class="list-group-item"><a href="#">Vivo</a></li>
                    <li class="list-group-item"><a href="#">Xiaomi</a></li>
                    <li class="list-group-item"><a href="#">Oneplus</a></li>
                    <li class="list-group-item"><a href="#">Nokia</a></li>
                    <li class="list-group-item"><a href="#">Tecno</a></li>
                    <li class="list-group-item"><a href="#">Infinix</a></li>
                    <li class="list-group-item"><a href="#">Symphony</a></li>
                    <button type="button" class="btn btn-block">All Brands</button>
                </ul>
            </div>
        </div>

        <div class="col-md-10">
            <div class="area">
                <h1 class="title">Latest Update Devices</h1>
                <div class="row">

                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\frontpage\Nokia-8210-4G.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Nokia 8210 Xpress Audio</h5>
                                <h6>Upcoming launch date 23th July</h6>
                                <p class="card-text">BDT 10,500</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\Honor-X40i.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">HONOR X40i</h5>
                                <h6>Upcoming launch date 29th July</h6>
                                <p class="card-text">BDT 25,000</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\Realme-GT2-Explorer-Master.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Realme GT-2 Master Explorer Edition</h5>
                                <h6>Upcoming launch date 12 August</h6>
                                <p class="card-text">BDT 56,000</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\Infinix-Note-12-5G.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Infinix Note 12 5G</h5>
                                <h6>Upcoming launch date September</h6>
                                <p class="card-text">BDT 19,500</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\Samsung-Galaxy-M13-India.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Samsung M13(India)</h5>
                                <h6>Upcoming launch date 4th August</h6>
                                <p class="card-text">BDT 16,500</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <img src="signup\Oppo-A97.JPG" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Oppo A97</h5>
                                <h6>Upcoming launch date 30th August</h6>
                                <p class="card-text">BDT 32,000</p>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="area">
        <h2 class="title">Mobile Reviews</h2>
        <div class="row">
            <div class="post-thumb thumbnail">
                <div class="col-sm-12">
                    <b><a href="reviewpage/Samsung-Galaxy-Note-20-Ultra-5G.JPG">Samsung Galaxy Note 20 Ultra 5G
                            Review</a></b>

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
                <div class="col-sm-12">
                    <b><a href="https://www.gsmarena.com.bd/review/vivo-y20-review/">Vivo Y20 Review</a></b>

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
        </div>
    </div>


</body>

</html>