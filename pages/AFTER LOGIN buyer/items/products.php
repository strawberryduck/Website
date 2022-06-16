<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>
<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="products.css">
    </head>

    <body>
        <section id="header">
            <a href="../../login/after login.php"><img src="../../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../login/after login.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="../../about/about.html">About</a></li>
                    <li><a href="../cart/cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>
        <br>

        <section id="products" class="section-p1">
            <h2>PRODUCTS</h2>
            <p>Summer Collection is all the rage right now!</p>
            <form action="search.php" method="post">
                <input type="text" name="search" style="width: 500px; padding: 2px; border: 1px solid black"></input><input type ="submit" value="SEARCH">
            </form>
            <br>
            FILTERS <br><br>
            BY BRAND <br>
            <?php
            $nike= 'Nike';
            $toei= 'Toei';
            ?>
            <?php echo "<a href='sort.php?Brand=$nike'><button>NIKE</button></a><a href='sort.php?Brand=$toei'><button>TOEI</button></a>"?> <br>
            BY PRICE <br>
            <a href="low.php"><button>LOW TO HIGH</button></a><a href="high.php"><button>HIGH TO LOW</button></a>
            <div class="prod-container">
                <?php 
                    include("../../../php/database_connect.php");
                    // include("../../php/login.php");
                    $query = " select p_id, PName, Brand, Price, image_1 from items ";
                    $result = mysqli_query($conn,$query);
                     
                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($items as $item){
                ?>
                <div class='prod'>
                <img source src="<?php echo '../../after login/add item/uploads/' .$item['image_1'];?>">
                        <div class='des'>
                            <span><?php echo $item['Brand'] ?></span>
                            <h5><?php echo  $item['PName'] ?></h5>
                            <h4><?php echo $item['Price'] ?></h4>
                        </div>
                        <?php 
                            echo "<a href='../single-product/single-product.php?p_id=$item[p_id]'>View Item</a>";
                        ?>
                        <br>
                </div>
                  <?php } ?>
            </div>
        </section>
    </body>    
        
</html>