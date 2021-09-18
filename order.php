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

    <!-- start order -->
    <section class="food-search">
    <div class="container">
        <h1 class="text-center text-white">Fill this form to confirm your order.</h1>
        <form action="#" class="order">
            <fieldset class="order-food">
                <legend>Selected Food</legend>
                <div class="food-menu-img">
                    <img src="img/menu-pizza.jpg" alt="Chicken Pizza" class="img-responsive img-curve order-img">
                </div>

                <div class="food-menu-desc">
                    <h3>Food Title</h3>
                    <p class="food-price">$2.3</p>
                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" require>
                </div>
            </fieldset>

            <fieldset class="order-food">
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="E.g Thu Ha" class="input-responsive" require>

                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="E.g 0376xxxxx" class="input-responsive" require>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="E.g nguyenha@gmail.com" class="input-responsive" require>

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="E.g Street, City, Country" class="input-responsive" require></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary confirm-order">
            </fieldset>
        </form>
    </div>
    </section>

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
     