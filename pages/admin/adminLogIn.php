<?php
    // session_start();
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
    
        $admins = $admin->find('email', $_POST['email']);
        if ($admins->rowCount() > 0) {
            $admin = $admins->fetch();
    
            if (password_verify($_POST['password'], $admin['password'])) {
                $_SESSION['sessAdminId'] = $admin['adminId'];
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
    $title = "MeKart";

    $content = loadTemplate("templates/adminlogIn.php", []);

?>