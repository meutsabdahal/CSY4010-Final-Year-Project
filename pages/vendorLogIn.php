<?php

    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
        // calling function to find email
        $vendors = $vendor->find('email', $_POST['email']);
        if ($vendors->rowCount() > 0) {
            $vendor = $vendors->fetch();
            // verifying password from admin input and direction to admin's home page if password matched
            if (password_verify($_POST['password'], $vendor['password'])) {
                $_SESSION['sessVendorId'] = $vendor['vendorId'];
                header('Location:vendorHome');
            }
        }
        // if password didn't matched shwowing alert message
            else
        ?>
        <script>
            alert("Wrong Email or Passwod");
        </script>
        <?php
        

    }

    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/vendorLogInTemplate.php", ['categories' => $categories]);

?>