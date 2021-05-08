<?php
    // starting session
    session_start();

    // calling function to extarct all the data from category table
    $categories = $category->findAll();

    // calling function to extarct all the data with condition from vendor table table
    $vendors = $vendor->find('vendorId', $_GET['vId']);
    $vendors = $vendors->fetch();

    // calling function to join two tables with condition
    $reviews = $review->joinTableCondition('customer', 'customerId', 'customerId', 'vendorId', $_GET['vId']);

    // giving title to the page
    $title = "MeKart";

    // calling function for displaying contents on the page
    $content = loadTemplate("templates/vendorTemplate.php", ['categories' => $categories, 'vendors' => $vendors, 'reviews' => $reviews]);

?>