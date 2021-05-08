<?php
    // calling function to get url
    function getURL($parameters = null){
        return "http://localhost/CSY4010-Final-Year-Project/" . $parameters;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <!-- title of the page and link to css and bootstrap cdn links -->
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo getURL('css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo getURL('css/admin.css'); ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <section>
        <!-- contents of the page -->
        <div>
            <?php echo $content; ?>
        </div>
    </section>


</body>
</html>