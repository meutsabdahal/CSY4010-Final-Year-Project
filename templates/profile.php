<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>

<section>
    <a href="signOut"><button class="float-right mr-5">Sign Out</button></a>
    <h1 class="text-center mt-4 font-italic">My Orders</h1>
    <center>
    <table class="table table-hover mt-3 text-center">
    <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
         <?php
            foreach ($orders as $order){
                ?>
                <tr>
                    <td><?php echo $order['productName'];?></td>
                    <td><?php
                        if ($order['orderStatus'] == 0) {
                            echo "Under Verfication";
                        }
                        elseif ($order['orderStatus'] == 1)
                            echo "On the Way"; 

                        elseif ($order['orderStatus'] == 2) 
                            echo "Delevered";
                        ?>
                       
                    </td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>
    </center>
    
</section>

    <?php
    require 'footer.php';

?>
