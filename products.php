<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our LifeStyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=1">
                                <img src="img/cannon_eos.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(1)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=2">
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(2)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=3">
                                <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(3)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=4">
                                <img src="img/olympus.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(4)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=4" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Product 5 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=5">
                                <img src="img/titan301.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(5)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=5" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=6">
                                <img src="img/titan201.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(6)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=6" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 7 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=7">
                                <img src="img/hmt.JPG" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(7)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=7" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 8 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=8">
                                <img src="img/favreleuba.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Favre Leuba</h3>
                                    <p>Price: Rs. 18000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(8)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=8" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Product 9 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=9">
                                <img src="img/raymond.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Raymond</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(9)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 10 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=10">
                                <img src="img/charles.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Charles</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(10)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 11 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=11">
                                <img src="img/HXR.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HXR</h3>
                                    <p>Price: Rs. 900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(11)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=11" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <!-- Product 12 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="product_detail.php?id=12">
                                <img src="img/pink.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>PINK</h3>
                                    <p>Price: Rs. 1200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php } else {
                                        if(check_if_added_to_cart(12)){
                                            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                        } else { ?>
                                            <a href="cart_add.php?id=12" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                        <?php }
                                    } ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Ayush Anand</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
