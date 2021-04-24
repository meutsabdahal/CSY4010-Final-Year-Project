<?php
    session_start();
    $categories = $category->findAll();

    $vendors = $vendor->find('vendorId', $_GET['vId']);
    $vendors = $vendors->fetch();

    $reviews = $review->find('vendorId', $_GET['vId']);

    $title = "MeKart";

    $content = loadTemplate("templates/vendorTemplate.php", ['categories' => $categories, 'vendors' => $vendors, 'reviews' => $reviews]);

?>