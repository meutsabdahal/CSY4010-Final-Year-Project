<?php
    // starting session
    session_start();

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // calling function to join two tables with condition
        $products = $product->joinTableCondition('vendor', 'vendorId', 'vendorId', 'productId', $_GET['pId']);
        
        // calling function to extarct all the data from product table 
        $allProducts = $product->findAll();
        
        // calling function to join two tables with condition
        $reviews = $review->joinTableCondition('customer', 'customerId', 'customerId', 'productId', $_GET['pId']);


        // inserting data to review table when customer is logged in
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            if (isset($_SESSION['sessCustomerId'])) {
                $review->insert($_POST);  
                header('Refresh:0');
            }
            else
                echo "hello";
        }

        // insering data to cart table
        if (isset($_POST['cart'])) {
            unset($_POST['cart']);
            $cart->insert($_POST);
        }
        
        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/productDetailsTemplate.php", ['categories' => $categories, 'products' => $products, 'allProducts' => $allProducts,
                                                                            'reviews' => $reviews]);                                           

?>