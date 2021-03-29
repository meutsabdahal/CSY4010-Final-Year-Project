<?php

    if(isset($_GET['cId'])){
        $categories = $category->delete('categoryId',$_GET['cId']);	
    }

    $categories = $category->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminCategory.php", ['categories' => $categories]);

?>