<?php
    session_start();
    if (isset($_SESSION['sessCustomerId'])) {
        
        // available from:
        // https://www.youtube.com/watch?v=3kzBJSUVsa4
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            
            $to = $_POST['email'];
            $subject = 'Order Conformation';
            $message = ' Hello '.$_POST['firstName'].',
            Your Order has been confirmed. Our team will soon contact you';
            mail($to, $subject, $message);

            $vendors = $vendor->find('vendorId', $_POST['vendorId']);
            $vendors = $vendors->fetch();

            $products = $product->find('productId', $_POST['productId']);
            $products = $products->fetch();

                        
            $toVendor = $vendors['email'];
            $subjectVendor = 'Order Conformation';
            $messageVendor = ' Hello '.$vendors['vendorName'].',
            Your Order for '.$products['productName'].' has been placed. Please send the respective product to our store.';
            mail($toVendor, $subjectVendor, $messageVendor);

            $productorder->insert($_POST);
            header("Location:orderConfirmation");
            

        }
 
        $products = $product->find('productId', $_GET['pId']);
        $products = $products->fetch();

        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/shippingBillingTemplate.php", ['categories' => $categories, 'products' => $products]);
    }
    else
        include 'logIn.php';
?>