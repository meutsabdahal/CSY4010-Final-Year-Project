<?php
    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // insertig data and file to vendor table
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
        
        $password = $_POST['password'];
		$pass = password_hash($password,PASSWORD_DEFAULT);
		$_POST['password'] = $pass;		

        $proposal = $_FILES['proposal']['name'];
        $tempPicture = $_FILES['proposal']['tmp_name'];
        move_uploaded_file($tempPicture, 'proposal/'.$proposal);
        $_POST['proposal'] = $proposal;
        $vendor->insert($_POST);
        header('Location:vendorLogIn');
    
    }
    
    // giving title to the page
    $title = "MeKart";
    
    // calling function for displaying contents on the page
    $content = loadTemplate("templates/vendorRegistrationTemplate.php", ['categories' => $categories]);

?>