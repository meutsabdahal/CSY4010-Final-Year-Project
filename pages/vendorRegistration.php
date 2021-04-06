<?php
    $categories = $category->findAll();
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
    
        }
    

    $title = "MeKart";

    $content = loadTemplate("templates/vendorRegistrationTemplate.php", ['categories' => $categories]);

?>