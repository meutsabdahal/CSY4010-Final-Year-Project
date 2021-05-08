<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // getting id from admin table and deleting that id by calling the function
        if(isset($_GET['aId'])){
            $admins = $admin->delete('adminId',$_GET['aId']);	
        }

        // calling function to extarct all the data from admin table
        $admins = $admin->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminAdmin.php", ['admins' => $admins]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>