<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>
<html>
    <title>PRODUCT NAME</title>
    <head>
        <link rel="stylesheet" href="single-product.css">
    </head>

    <body>
        <section id="header">
            <a href="../../login/after login.php"><img src="../../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../login/after login seller.php">Home</a></li>
                    <li><a href="../items/products.php">Products</a></li>
                    <li><a href="../manage products/manage.php">Manage Items</a></li>
                    <li><a href="../../about/about.html">About</a></li>
                    <li><a href="../cart/cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>
        <br>

        <section id="proddetails" class="section-p1">
            <div class="single-prod-img">
                <img src="../../../images/jacket1.jpg" width="100%" id="MainImg" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="../../../images/jacket2.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="../../../images/jacket1.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="single-prod-details">
                <!-- <h2>Home / Jacket</h2> -->
                <h3>Jacket</h3>
                <h3>PRICE here</h3>
                <button>Add to Cart</button>
                <h2>Product Details</h2>
                <span>TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM
                    TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM TEXT DETAILS LOREM IPSUM
                </span>
            </div>
        </section>
        
        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");

            smallimg[0].onclick = function(){
                MainImg.src = smallimg[0].src;
            }

            smallimg[1].onclick = function(){
                MainImg.src = smallimg[1].src;
            }
        </script>
    </body>    
        
</html>