<?php
    session_start();
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);

        $customers = $customer->find('email', $_POST['email']);
        if ($customers->rowCount() > 0) {
            $customer = $customers->fetch();

            if (password_verify($_POST['password'], $customer['password'])) {
                $_SESSION['sessCustomerId'] = $customer['customerId'];
                header('Location:home');
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

    $content = loadTemplate("templates/logInTemplate.php", ['categories'=>$categories]);

?>