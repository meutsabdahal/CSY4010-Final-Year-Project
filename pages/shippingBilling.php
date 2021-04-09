<?php
    // if (isset($_SESSION['sessCustomerId'])) {
        
        // available from:
        // https://www.youtube.com/watch?v=3kzBJSUVsa4
        if(isset($_POST['submit'])){
            $to = $_POST['email'];
            $subject = 'Order Conformation';
            $message = ' Hello '.$_POST['firstName'].', Your Order has been confirmed. Our team will soon contact you';
            mail($to, $subject, $message);
        }
  

        $categories = $category->findAll();
        $title = "MeKart";

        $content = loadTemplate("templates/shippingBillingTemplate.php", ['categories' => $categories]);
    // }
    // else
    //     include 'logIn.php';
?>