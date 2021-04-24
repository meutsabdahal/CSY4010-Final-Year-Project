<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        if (isset($_POST['submit'])) {
            $password = $_POST['admin']['password'];
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $_POST['admin']['password'] = $pass;
            $admin->save($_POST['admin'],'adminId');
            $admin = $_POST['admin'];
            header('Location:admin');   
        }

        else{
            if (isset($_GET['aId'])) {
                $admin = $admin->find('adminId',$_GET['aId']);
                $admin = $admin->fetch();
            }
            else
                $admin = false;
        }

        $title = "MeKart";

        $content = loadTemplate("templates/adminManageAdmin.php", ['admin' => $admin]);
    }
    else
        include 'adminLogIn.php';

?>
 