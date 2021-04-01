<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Orders</h1>
<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Order Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Vendor Name</th>
            <th scope="col">Address</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
         <?php
            foreach ($orders as $order){
                ?>
                <tr>
                    <td><?php echo $order['firstName'];?></td>
                    <td><?php echo $order['lastName'];?></td>
                    <td><?php echo $order['email'];?></td>
                    <td><?php echo $order['phoneNumber'];?></td>
                    <td><button>Delete</button></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>