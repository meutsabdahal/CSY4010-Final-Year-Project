<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        if(isset($_GET['aId'])){
            $admins = $admin->delete('adminId',$_GET['aId']);	
        }

        $admins = $admin->findAll();

        $title = "MeKart";

        $content = loadTemplate("templates/adminAdmin.php", ['admins' => $admins]);
    }

    else
        include 'adminLogIn.php';

?>