<?php
 include('img/connect1.php');
 if(isset($_POST['insert_brand'])){
    $brand_name=$_POST['brand_name'];

    $select_query="select * from brands where brand_name='$brand_name'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    $insert_query="insert into brands (brand_name) value('$brand_name')";
    if($number>0){
        echo "<script>alert('This Brand is present inside the database')</script>";
    }
    else{

    
    $insert_query="insert into brands (brand_name) value('$brand_name')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('Brand has been inserted successfully')</script>";
    }
    }
 }
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-3">
  <span class="input-group-text bg-info" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
  </span>
  <input type="text" class="form-control" name="brand_name" 
  placeholder="Insert brands" aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
  
  
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert Brands">
  

</div>
</form>