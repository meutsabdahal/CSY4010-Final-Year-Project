<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Vendors</h1>
<a href="pendingVendor"><button class="ml-5 mb-4 adminButton float-right">Pending vendors</button></a>
<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Vendor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">City</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
         <?php
            foreach ($vendors as $vendor){
                ?>
                <tr>
                    <td><?php echo $vendor['vendorName'];?></td>
                    <td><?php echo $vendor['email'];?></td>
                    <td><?php echo $vendor['password'];?></td>
                    <td><?php echo $vendor['province'];?></td>
                    <a href="vendor?vId=<?php echo $vendor['vendor']?>"><button>Delete</button></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>