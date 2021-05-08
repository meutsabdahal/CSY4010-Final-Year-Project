<?php
    // starting session
    session_start();
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);

        // calling function to find email
        $customers = $customer->find('email', $_POST['email']);
        if ($customers->rowCount() > 0) {
            $customer = $customers->fetch();
            
            // verifying password from admin input and direction to admin's home page if password matched
            if (password_verify($_POST['password'], $customer['password'])) {
                $_SESSION['sessCustomerId'] = $customer['customerId'];
                header('Location:home');
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
    $content = loadTemplate("templates/logInTemplate.php", ['categories'=>$categories]);

?>