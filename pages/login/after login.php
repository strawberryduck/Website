<?php
//include auth_session.php file on all user panel pages
include("../../php/session_start.php");
?>
<html>
    <title>Thrifted</title>
    <head>
        <link rel="stylesheet" href="after login.css">
    </head>

    <body>
        <section id="header">
            <a href="#"><img src="../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                <li><p>Hey, <?php echo $_SESSION['first_name']; ?>!</p></li>
                    <li><a href="after login.php">Home</a></li>
                    <li><a href="items/products.html">Products</a></li>
                    <li><a href="./manage products/manage.html">Manage Items</a></li>
                    <li><a href="../about/about.html">About</a></li>
                    <li><a href="cart/cart.html">Cart</a></li>
                    <li><a href="../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>

        <br>
        <section id="categories" class="section-p1">
            <h2>Get Started With Categories</h2>
            <div class="cat-box">
                <img src="../../images/male_category.jpg" alt="">
                <h4>Men's</h4>
            </div>

            <div class="cat-box">
                <img src="../../images/female_category.jpg" alt="">
                <h4>Women's</h4>
            </div>
        </section>

        <section id="brands" class="section-p1">
            <h2>Popular Brands</h2>
            <div class="brand-box">
                <img src="../../images/adidas.jpg" alt="">
                <h4>Adidas</h4>
            </div>

            <div class="brand-box">
                <img src="../../images/ysl.jpg" alt="">
                <h4>YSL</h4>
            </div>

            <div class="brand-box">
                <img src="../../images/dior.png" alt="">
                <h4>DIOR</h4>
            </div>
        </section>
</html>