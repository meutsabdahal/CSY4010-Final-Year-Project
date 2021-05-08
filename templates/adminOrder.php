<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Orders</h1>
<table class="table  table-hover">
    <thead>
        <!-- giving title to table -->
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Email</th>
            <th scope="col">Vendor Name</th>
            <th scope="col">Address</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <!-- displaying data to table -->
         <?php
            foreach ($orders as $order){
                ?>
                <tr>
                    <td><?php echo $order['productName'];?></td>
                    <td><?php echo $order['firstName'].' '. $order['lastName']; ?></td>
                    <td><?php echo $order['email'];?></td>
                    <td><?php echo $order['vendorName'];?></td>
                    <td><?php echo $order['province'].' '. $order['city'].' '. $order['street'];?></td>
                    <td>
                    <?php
                        if ($order['orderStatus'] == 0){
                        ?>
                            <a href="order?oId=<?php echo $order['orderId']; ?>"><button>Under Verfication</button></a>
                        <?php
                        }      
                        elseif ($order['orderStatus'] == 1) {
                        ?>  
                            <a href="order?wId=<?php echo $order['orderId']; ?>"><button>On the Way</button></a>
                        <?php
                        }
                        elseif ($order['orderStatus'] == 2){
                        ?>
                            <a href=""><button>Delivered</button></a>
                            <?php 
                        } 
                        ?>
                    </td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>