<?php
    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // inserting data to customer table by hashing password
    if (isset($_POST['submit'])) {
        $password = $_POST['customer']['password'];
		$pass = password_hash($password,PASSWORD_DEFAULT);
		$_POST['customer']['password'] = $pass;
		$customer->save($_POST['customer'],'customerId');
		$customer = $_POST['customer'];
        header('Location:logIn');   
    }

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/registerTemplate.php", ['customer' => $customer, 'categories' => $categories]);

?>