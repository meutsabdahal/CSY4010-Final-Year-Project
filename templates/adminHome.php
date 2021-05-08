<?php
    // adding admin's layout
	require 'adminLayout.php';
?>

<section>

<h1 class="text-center mt-1 font-italic">Dashboard</h1>
<!-- creating container and displaying number of rows in a table -->
<div class="container-product">
    <div class="row">
        <a href="category">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-box shadow bg-white mt-5">
                <h4>Category</h4><br>
                <?php echo $categories[0]; ?>  
            </div>    
        </div>
        </a>

        <a href="product">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-box shadow bg-white mt-5">
                <h4>Product</h4><br>
                <?php echo $products[0]; ?>
            </div>    
        </div>
        </a>

        <a href="vendor">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-box shadow bg-white mt-5">
                <h4>Vendor</h4><br>
                6  
            </div>    
        </div>
        </a>

        <a href="admin">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-box shadow bg-white mt-5">
                <h4>Admin</h4><br>
                <?php echo $admins[0]; ?> 
            </div>    
        </div>
        </a>

        <a href="customer">
        <div class="col-sm text-center mt-3 ml-5">
            <div class="dashboard-box shadow bg-white mt-5">
                <h4>Customer</h4><br>
                <?php echo $customers[0]; ?> 
            </div>    
        </div>
        </a>


        </div>
    </div>
    </section>