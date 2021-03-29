<?php


    // if (isset($_POST['submit'])) {
    //     $admin->save($_POST['admin'],'adminId');
    //     $admin = $_POST['admin'];
    //     header('Location:admin');   
    // }


    // else{
    //     if (isset($_GET['cId'])) {
    //         $admin = $admin->find('adminId',$_GET['cId']);
    //         $admin = $admin->fetch();
    //     }
    //     else
    //         $category = false;
    // }

    $categories = $category->findAll();
    $title = "MeKart";

    $content = loadTemplate("templates/adminManageProduct.php", ['categories' => $categories]);

?>