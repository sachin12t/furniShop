<?php include 'layout/header.php' ?>
<div class="shop-section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <h3 class="fs-1">Shop</h3>
            </div>
        </div>
    </div>
</div>
<!-- material section start-->
<section class="material">
        <div class="container">
            <div class="row">
            <?php include 'dbconnect/config.php';
                    $query = "Select * from product";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){

                            while($row = mysqli_fetch_assoc($result)){

                
                ?>

            <div class="col-lg-3 material-image">
                    <img src="admin/productimage/<?= $row['image']?>" class="img-fluid" alt="">
                    <!-- <span class="brandname"><?= $row['brand']; ?></span> -->
                    <h3 class="material-title"><?= $row['productname'];?></h3>
                     <strong class="material-price"><?='INR'.number_format($row['price'],2); ?></strong>
                </div>
               
            <?php
                            }
                        }
                       ?>  
            </div>
        </div>
       
    </section>
<?php include 'layout/footer.php' ?>