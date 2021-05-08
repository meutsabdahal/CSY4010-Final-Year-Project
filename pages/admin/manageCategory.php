<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to insert/update the data when categoryId is set
        if (isset($_POST['submit'])) {
            $category->save($_POST['category'],'categoryId');
            $category = $_POST['category'];
            header('Location:category');   
        }

        // update/insert the data when categoryId isn't set
        else{
            if (isset($_GET['cId'])) {
                $category = $category->find('categoryId',$_GET['cId']);
                $category = $category->fetch();
            }
            else
                $category = false;
        }

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminManageCategory.php", ['category' => $category]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>