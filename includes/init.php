<?php

	// function to get baseurl
	function baseURL($url){
		return $_SERVER['DOCUMENT_ROOT'].'/CSY4010-Final-Year-Project/'.$url;
	}

	require baseURL('db/connect.php');
	require baseURL('classes/databasetable.php');
	
	// creating objects for the class tables
	$category = new DatabaseTable('category');
	$customer = new DatabaseTable('customer');
	$admin = new DatabaseTable('admin');
	$slideshow = new DatabaseTable('slideshow');
	$vendor = new DatabaseTable('vendor');
	$order = new DatabaseTable('productOrder');
	$product = new DatabaseTable('product');
	$review = new DatabaseTable('review');
    ?>