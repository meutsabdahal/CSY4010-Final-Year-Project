<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Customers</h1>
<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
         <?php
            foreach ($customers as $customer){
                ?>
                <tr>
                    <td><?php echo $customer['firstName'];?></td>
                    <td><?php echo $customer['lastName'];?></td>
                    <td><?php echo $customer['email'];?></td>
                    <td><?php echo $customer['phoneNumber'];?></td>
                    <td><button>Delete</button></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>