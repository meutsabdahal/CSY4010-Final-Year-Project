<?php
    // starting session and checking customer's login
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {
        
        // available from:
        // https://www.youtube.com/watch?v=3kzBJSUVsa4
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            
            // sending email
            $to = $_POST['email'];
            $subject = 'Order Conformation';
            $message = ' Hello '.$_POST['firstName'].',
            Your Order has been confirmed. Our team will soon contact you';
            mail($to, $subject, $message);

            $vendors = $vendor->find('vendorId', $_POST['vendorId']);
            $vendors = $vendors->fetch();

            $products = $product->find('productId', $_POST['productId']);
            $products = $products->fetch();

            // sending email
            $toVendor = $vendors['email'];
            $subjectVendor = 'Order Conformation';
            $messageVendor = ' Hello '.$vendors['vendorName'].',
            Your Order for '.$products['productName'].' has been placed. Please send the respective product to our store.';
            mail($toVendor, $subjectVendor, $messageVendor);

            // inserting data to productorder table
            $productorder->insert($_POST);
            header("Location:orderConfirmation");
            

        }
 
        // calling function to extarct all the data with condition from category table
        $products = $product->find('productId', $_GET['pId']);
        $products = $products->fetch();

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/shippingBillingTemplate.php", ['categories' => $categories, 'products' => $products]);
    }
    // when customer is not loggedin displing customer's login page
    else
        include 'logIn.php';
?>