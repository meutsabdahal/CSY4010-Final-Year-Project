<?php


    if (isset($_POST['submit'])) {
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

?>