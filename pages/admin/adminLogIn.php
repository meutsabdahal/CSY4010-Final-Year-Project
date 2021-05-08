<?php
    
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
    
        // calling function to find email
        $admins = $admin->find('email', $_POST['email']);
        if ($admins->rowCount() > 0) {
            $admin = $admins->fetch();
            
            // verifying password from admin input and direction to admin's home page if password matched
            if (password_verify($_POST['password'], $admin['password'])) {
                $_SESSION['sessAdminId'] = $admin['adminId'];
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

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/adminlogIn.php", []);

?>