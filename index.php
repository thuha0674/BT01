<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant website</title>
    <!-- link our css file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- start wrapper -->
    <div class="wrapper"> 
    <!-- navbar section starts here  -->
    <section class="navbar">
        <!-- start container -->
        <div class="container">
            <div class="logo">
                <img src="img/logo.png" alt="Restaurant Logo" class="img-responsive" >
            </div>
            <!-- start menu -->
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- end menu -->
            <div class="clearfix"></div>
        </div>
        <!-- end container -->
    </section>
    <!-- navbar sectione Ends here -->

     <!-- food search section starts here  -->
     <section class="food-search text-center">
        <div class="container">
            <form action="">
                <input type="search" name="search" placeholder="Search for Food.." >
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- food search sectio ends here -->

    <!-- categories section starts here -->
    <section class="categories">
        <!-- start container -->
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>
            <div class = "block-explore"> 

                <a href="#">          
                    <div class="box float-container">
                        <img src="img/pizza.jpg" alt="Pizza" class="img-responsive img-curve">
                        <h3 class="float-text text-white">Pizza</h3> 
                    </div>
                </a>

                <a href="#">
                    <div class="box float-container">
                        <img src="img/burger.jpg" alt="Burger" class="img-responsive img-curve">
                        <h3 class="float-text text-white">Burger</h3> 
                    </div>
                </a>

                <a href="#">
                    <div class="box float-container">
                        <img src="img/momo.jpg" alt="Momo" class="img-responsive img-curve">
                        <h3 class="float-text text-white">Momo</h3> 
                    </div>
                </a>
                <div class="clearfix"></div>
            </div><!--end block explore-->   
        </div><!-- end container-->
    </section>
    <!-- categories section ends here -->

    <!-- food menu section starts here -->
    <section class="food-menu">
        <!-- start container -->
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <!-- img1 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-pizza.jpg" alt="Chicken Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>

            <!-- img2 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-burger.jpg" alt="Chicken Burger" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>
            
            <!-- img3 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-burger.jpg" alt="Chicken Burger" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Nice Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>

            <!-- img4 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-pizza.jpg" alt="Chicken Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>

            <!-- img5 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-pizza.jpg" alt="Chicken Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>

            <!-- img6 -->
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="img/menu-momo.jpg" alt="Chicken Momo" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>
                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
                 <div class="clearfix"></div>            
            </div>
           
            <div class="clearfix"></div>
        </div>
        <!-- end container -->
    </section>
    <!-- food menu section ends here -->

    <!-- social section starts here -->
    <section class="social">
        <!-- start container -->
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" alt="Instagram"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" alt="Twitter"/></a>
                </li>
            </ul>
        </div>
        <!-- ends container -->
    </section>
    <!-- social section ends here -->

    <!-- footer section starts here -->
    <section class="footer">
        <div class="container text-center">
           <p>All rights resserved. Designed by <a href="#">ThuHa</a></p>
        </div>
    </section>
    <!-- footer section ends here -->
    
    
    </div> <!--ends wrapper-->
</body>
</html>