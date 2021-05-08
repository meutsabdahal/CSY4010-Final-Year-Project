<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // getting id from category table and deleting that id by calling the function
        if(isset($_GET['cId'])){
            $categories = $category->delete('categoryId',$_GET['cId']);	
        }

        // calling function to extarct all the data from category table
        $categories = $category->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminCategory.php", ['categories' => $categories]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>