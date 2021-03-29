<?php

    $admins = $admin->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminAdmin.php", ['admins' => $admins]);

?>