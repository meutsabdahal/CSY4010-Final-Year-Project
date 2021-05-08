<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to count the number of rows in category table
        $categories = $category->countRow();
        $categories = $categories->fetch();

        // calling function to count the number of rows in category table
        $products = $product->countRow();
        $products = $products->fetch();

        // calling function to count the number of rows in category table
        $admins = $admin->countRow();
        $admins = $admins->fetch();

        // calling function to count the number of rows in category table
        $customers = $customer->countRow();
        $customers = $customers->fetch();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminHome.php", ['categories' => $categories, 'products' => $products, 'admins' => $admins,
                                                                'customers' => $customers]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';
?>