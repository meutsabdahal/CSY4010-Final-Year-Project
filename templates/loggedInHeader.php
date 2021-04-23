<header class="shadow bg-white">
    <!-- div for  -->
    <div class = "top ">
        <a href="vendorLogIn" class="text-dark mr-2">Sell on MeKart</a>
        <a href="" class="text-dark">Track Order</a>
        <a href="" class="text-dark ml-3">SignIn</a>
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
    <a href="signOut"><button type="button" class="float-right sign-in-up mt-4">Sign Out</button></a>

    <!-- navigation bar -->
    <!-- available from : https://getbootstrap.com/docs/4.0/components/navbar/ -->
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <?php
                    foreach ($categories as $category) {
                       ?>
                        <li class="nav-item">
                            <a class="nav-link" href="productByCategory?cId=<?php echo $category['categoryId']; ?>"><?php echo $category['categoryName'];?></a>
                        </li>
                    <?php   
                    }
                ?>
            </ul>
        </div>
    </nav>  
</header>