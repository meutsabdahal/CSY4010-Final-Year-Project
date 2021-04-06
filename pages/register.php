<?php
    $categories = $category->findAll();
    if (isset($_POST['submit'])) {
        $password = $_POST['customer']['password'];
		$pass = password_hash($password,PASSWORD_DEFAULT);
		$_POST['customer']['password'] = $pass;
		$customer->save($_POST['customer'],'customerId');
		$customer = $_POST['customer'];
        header('Location:logIn');   
    }




    $title = "MeKart";
    $content = loadTemplate("templates/registerTemplate.php", ['customer' => $customer, 'categories' => $categories]);

?>