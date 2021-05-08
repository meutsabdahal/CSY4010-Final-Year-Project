<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to insert/update data to table by hashing password
        if (isset($_POST['submit'])) {
            $password = $_POST['admin']['password'];
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $_POST['admin']['password'] = $pass;
            $admin->save($_POST['admin'],'adminId');
            $admin = $_POST['admin'];
            header('Location:admin');   
        }

        // insert/update the data
        else{
            if (isset($_GET['aId'])) {
                $admin = $admin->find('adminId',$_GET['aId']);
                $admin = $admin->fetch();
            }
            else
                $admin = false;
        }

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminManageAdmin.php", ['admin' => $admin]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>
 