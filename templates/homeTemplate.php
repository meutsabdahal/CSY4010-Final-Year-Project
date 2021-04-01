<?php
    require 'header.php';

?>


<section>
    <div id="carouselExampleIndicators" class="carousel slide mt-5 " data-ride="carousel">
        <ol class="carousel-indicators ">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <center>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-80" src="img/1.jpg" alt="">
            </div>
            <?php
                foreach($slideshows as $slideshow){
                    ?>
                    <div class="carousel-item">
                        <img src="slideshow/<?php echo $slideshow['images'];?>" alt="">
                    </div>
                <?php
                    }
                ?>
            
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="" aria-hidden="true"><img role="img" src="svg/previous.svg"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="" aria-hidden="true"><img role="img" src="svg/next.svg"></span>
            <span class="sr-only">Next</span>
        </a>
        </center>
    </div>

    <h4 class="mt-4 ml-5 font-italic">Top Deals</h4>

    <div class="container-product">
        <div class="row">
            <a href="product">
            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>    
            </div>
            </a>

            
            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>

            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>

            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>

            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>


            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>


            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>


            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>

            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>


            <div class="col-sm text-center mt-3">
                <div class="product-container mt-1">
                    <center><img src="img/shoe.jpg" class="product-view-img"><br></center>
                    Rs. 150
                </div>  
            </div>

        </div>
    </div>
</section>

<?php
    require 'footer.php';
?>






