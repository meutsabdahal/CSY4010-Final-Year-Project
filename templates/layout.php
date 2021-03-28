<?php
    // function to get url
    function getURL($parameters = null){
        return "http://localhost/CSY4010-Final-Year-Project/" . $parameters;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo getURL('css/style.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header class="shadow bg-white">

        <!-- div for  -->
        <div class = "top ">
            <a href="vendorLogIn" class="text-dark mr-2">Sell on MeKart</a>
            <a href="" class="text-dark">Track Order</a>
        </div>

        <!-- adding a search bar -->
        <div class="inner-svg mt-1">
            <input type=text name=search placeholder="Search for Products" class="search-bar ml-5 mt-4">
            <img role="img" src="svg/search.svg" class="search-svg">
        </div> 

        <!-- adding logo to header -->
        <img src="img/logo.png" class="logo-img">

        <!-- adding add to cartlogo to header -->
        <img src="svg/cart.svg" class="cart-svg">(0)
        <a href="login"><button type="button" class="float-right sign-in-up mt-4">Sign In/Sign Up</button></a>

        <!-- navigation bar -->
        <!-- available from : https://getbootstrap.com/docs/4.0/components/navbar/ -->
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item text-dark">
                        <a class="nav-link" href="#">Home & LifeStyle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Men's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Women's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kid's Fashion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Stationary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Health & Beauty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Watches & Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </nav>  
    </header>

    <section>
        <div>
            <?php echo $content; ?>
        </div>
    </section>

    

    <footer>
        <!-- adding logo to footer -->
        <center><img src="img/logo.png" class="footer-logo-img"></center>

        <!-- adding container of text to footer -->
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <b>Customer Service</b><br>
                    Shipping and Return Policy
                </div>
                <div class="col-sm">
                    <b>About Us</b><br>
                    Shipping and Return Policy
                </div>
                <div class="col-sm">
                    <b>Contact Us</b><br>
                    mekart@gmail.com<br>
                    01-2345678<br>
                    01-3345566<br>
                    Kathmandu, Nepal<br>
                </div>
                <div class="col-sm">
                    <b>Follow Us on</b><br>
                    Facebook<br>
                    Instagram<br>
                    Twitter<br>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>