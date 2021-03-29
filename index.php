<?php
	require 'includes/init.php';
    require 'functions/loadTemplate.php';
    
	if (isset($_GET['page'])) {
		require 'pages/'.$_GET['page'].'.php';
	}
	else
		require 'pages/home.php';

	$tempVars = [
		'title' => $title,
		'content' => $content
	];


	$html = loadTemplate('templates/layout.php', $tempVars);
	


?>