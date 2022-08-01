<?php
include('img/connect1.php');
if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $description=$_POST['description'];
    $product_keyword=$_POST['product_keyword'];
    $product_category=$_POST['product_categories'];
    $product_brands=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $product_status="true";
    //accessing images
$product_image1=$_FILES['product_image1']['name'];

//image temp name
$temp_image1=$_FILES['product_image1']['tmp_name'];



//checking empty condition
if($product_title=='' or $description=='' or $product_category=='' or $product_keyword==''
or $product_brands=='' or $product_price=='' or $product_image1==''){
    echo "<script>alert('Please fill all the available fields')</script>";
exit(); 
}else{
    move_uploaded_file($temp_image1,"img/$product_image1");
    

    //inert the products
    $insert_products="insert into products (product_title,product_description,product_keyword,
    category_id,brand_id,image1,price,date,status) 
    values('$product_title',' $description',' $product_keyword','$product_category',' $product_brands',
    '$product_image1','$product_price',NOW(),'$product_status')";
    $result_query=mysqli_query($con,$insert_products);
    if ($result_query) {
        echo "<script>alert ('Successfully inserted the products')</script>";
    }
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form_control"
                    placeholder="Enter product title" autocomplete="off" required="required">

            </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form_control"
                    placeholder="Enter description" autocomplete="off" required="required">

            </div>
            <!-- keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-label">Product keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form_control"
                    placeholder="Enter keyword" autocomplete="off" required="required">

            </div>
            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_categories" id="" class="form-select">
                <option value="">Select a Category</option>
              <?php 
                 $select_query="Select * from categories";
                 $result_query=mysqli_query($con,$select_query);
                 while($row=mysqli_fetch_assoc($result_query)){
                    $cat_title=$row['category_title'];
                    $cat_id=$row['category_id'];
                   echo "<option value=' $cat_id'>$cat_title</option>";
                 }

               ?>

             
               </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="form-select">
                <option value="">Select a Brands</option>
                <?php 
                 $select_query="Select * from brands";
                 $result_query=mysqli_query($con,$select_query);
                 while($row=mysqli_fetch_assoc($result_query)){
                    $brand_title=$row['brand_name'];
                    $brand_id=$row['brand_id'];
                   echo "<option value=' $brand_id'>$brand_title</option>";
                 }

               ?>
               </select>
            </div>
            
            <!--image 1  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form_control"
                    required="required">

            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form_control"
                    placeholder="Enter Price" autocomplete="off" required="required">

            </div>

             <!-- Price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3"
                value="Insert Products">

            </div>

            <div class="form-outline mb-4 w-50 m-auto" href="http://localhost/signup/admin_index.php">
                <input type="submit" name="insert_product" class="mb-3 px-3"
                value="Go to admin page">

            </div>
        </form>



    </div>

</body>

</html>