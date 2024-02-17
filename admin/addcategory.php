<?php
include 'dashboard.php';
include '../dbconnect/config.php';
$err='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['addcategory'])){
        if(empty($_POST['categoryname']) || $_POST['categoryname']==''){
            $err="*Please Enter your product name";
        }
        else{
            $category = $_POST['categoryname'];
            $query = "INSERT INTO category(categoryname) 
            values('$category')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your product addded successfully');
                    window.location.href='addcategory.php';
                </script>";
            }else{
                echo "something went wrong".mysqli_error($con);
            }
        }
    }
}
?>
<div class="addproduct mt-5">
    <div class="container p-5">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h3 class="text-center">Addcategory</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">PoroductName:</label>
                        <input type="text" class="form-control" name="categoryname" placeholder="Enter your product name">
                        <small style="color:red"><?php echo $err;?></small>
                        <input type="submit" class="btn btn-primary" name="addcategory" value="Add product">
                    </div>
                        
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
 