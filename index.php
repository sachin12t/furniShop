<?php include 'layout/header.php' ?>
    <!-- hero section start-->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="hero-content">
                        <h1 class="hero-heading">Modern Interior Design Studio</h1>
                        <p class="hero-para pt-3 pb-3">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <button class="btn btn-warning rounded-pill px-4">Shop Now</button>
                        <button class="btn rounded-pill  px-4 btn-techsima">Explore</button>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-image">
                        <img src="images/couch.png" class="img-fluid" alt="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end-->
    <!-- material section start-->
    <section class="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 material-content">
                    <h2 class="material-heading">Crafted with excellent material.</h2>
                    <p class="material-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <button class="btn btn-dark rounded-pill px-4 py-2">Explore</button>
                </div>
                <?php include 'dbconnect/config.php';
                    $query = "Select * from product";
                    $result = mysqli_query($con,$query);
                    if(mysqli_num_rows($result) > 0){

                            while($row = mysqli_fetch_assoc($result)){

                
                ?>
                <div class="col-lg-3 material-image">
                    <img src="admin/productimage/<?= $row['image']?>" class="img-fluid" alt="">
                    <h3 class="material-title"><?= $row['brand'];?></h3>
                    <strong class="material-price"><?='INR'.number_format($row['price'],2);?></strong>
                </div>
                <?php
                            }
                        }
                        ?>
            </div>
        </div>
    </section>
    <!-- material section end-->
    <!-- choose section start-->
    <section class="choose">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Why Choose Us</h2>
                    <p class="">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <div class="row">
                        <div class="col-lg-6 sub-choose ps-2 pe-2">
                            <div class="choose-icon">
                                <img src="images/truck.svg" alt="choose icons" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content pt-2">Fast & Free Shipping</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose ps-2 pe-2">
                            <div class="choose-icon">
                                <img src="images/bag.svg" alt="choose icons" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content pt-2">Easy to Shop</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose ps-2 pe-2">
                            <div class="choose-icon">
                                <img src="images/support.svg" alt="choose icons" class="img-fluids">
                            </div>
                            <h3 class="choose-icon-content pt-2">24/7 Support</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                        <div class="col-lg-6 sub-choose ps-2 pe-2">
                            <div class="choose-icon">
                                <img src="images/return.svg" alt="choose icons" class="img-fluid">
                            </div>
                            <h3 class="choose-icon-content pt-2">Fast & Free Shipping</h3>
                            <p class="choose-icon-des">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 choose-image">
                    <img src="images/choose.jpg" alt="choose image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- choose section end-->
    <!-- interior section start-->
    <section class="interior">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 interior-image">
                    <img src="images/img-grid-1.jpg" alt="" class="img-fluid">
                    <div class="img-grid2">
                        <img src="images/img-grid-2.jpg" alt="interior image" class="immg-fluid">
                    </div>
                    <div class="img-grid3">
                        <img src="images/img-grid-3.jpg" alt="interior image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5 interior-content">
                    <h3 class="interior-heading fs-2">We Help You Make Modern Interior Design</h3>
                    <p class="interior-des">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                    <ul class="interior-listing">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <button class="btn btn-dark rounded-pill px-4 py-2">Explore</button>
                </div>
            </div>
        </div>
    </section>
    <section class="interior-sub-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 interior-sub">
                    <div class="inerior-sub-image">
                        <img src="images/product-1.png" alt="inerior-sub-image" class="img-fluid">
                    </div>
                    <div class="inerior-sub-content">
                        <h3>Nordic Chair</h3>
                        <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                        <a href="">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 interior-sub">
                    <div class="inerior-sub-image">
                        <img src="images/product-2.png" alt="inerior-sub-image" class="img-fluid">
                    </div>
                        <div class="inerior-sub-content">
                            <h3>Nordic Chair</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                            <a href="">Read more</a>
                        </div>
                    </div>
                <div class="col-lg-4 interior-sub">
                    <div class="inerior-sub-image">
                        <img src="images/product-3.png" alt="inerior-sub-image" class="img-fluid">
                    </div>
                        <div class="inerior-sub-content">
                            <h3>Nordic Chair</h3>
                            <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                            <a href="">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- interior section end-->
    <!-- testimonial section start-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Testimonials</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora nostrum dicta hic quidem rerum beatae, saepe ipsa iure minus, autem architecto atque? Magni laudantium omnis consequatur, nobis minus</p>
                        <div class="test-image">
                            <img src="images/person_1.jpg" alt="">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora nostrum dicta hic quidem rerum beatae, saepe ipsa iure minus, autem architecto atque? Magni laudantium omnis consequatur, nobis minus</p>
                        <div class="test-image">
                            <img src="images/person_2.jpg" alt="">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora nostrum dicta hic quidem rerum beatae, saepe ipsa iure minus, autem architecto atque? Magni laudantium omnis consequatur, nobis minus</p>
                        <div class="test-image">
                            <img src="images/person_3.jpg" alt="">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                    <div class="item">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora nostrum dicta hic quidem rerum beatae, saepe ipsa iure minus, autem architecto atque? Magni laudantium omnis consequatur, nobis minus</p>
                        <div class="test-image">
                            <img src="images/person_4.jpg" alt="">
                        </div>
                        <strong>Maria Jones</strong>
                        <span>CEO, Co-Founder, XYZ Inc.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end-->
    <!-- blog section start-->
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="blog-heading">
                    <h2>Recent Blog</h2>
                    <a href="#">View All Post</a>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-1.jpg" alt="" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-2.jpg" alt="" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
                <div class="col-lg-4 post-image">
                    <img src="images/post-3.jpg" alt="" class="img-fluid">
                    <h3>First Time Home Owner Ideas</h3>
                    <p>by <a href="">Kristin Watson</a> on <a href="#">Dec 19, 2021</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- bolg section end-->
    <?php include 'layout/footer.php' ?>