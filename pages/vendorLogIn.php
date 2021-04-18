<?php

    if (isset($_POST['submit'])) {
        unset($_POST['submit']);

        $vendors = $vendor->find('email', $_POST['email']);
        if ($vendors->rowCount() > 0) {
            $vendor = $vendors->fetch();

            if (password_verify($_POST['password'], $vendor['password'])) {
                $_SESSION['sessVendorId'] = $vendor['vendorId'];
                header('Location:vendorHome');
            }
        }
            else
        ?>
        <script>
            alert("Wrong Email or Passwod");
        </script>
        <?php
        

    }


    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/vendorLogInTemplate.php", ['categories' => $categories]);

?>