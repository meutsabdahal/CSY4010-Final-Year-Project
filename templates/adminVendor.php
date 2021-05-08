<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Vendors</h1>
<!-- adding button -->
<a href="pendingVendor"><button class="ml-5 mb-4 adminButton float-right">Pending vendors</button></a>
<table class="table  table-hover">
    <thead>
        <!-- giving title to table -->
        <tr>
            <th scope="col">Vendor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">City</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <!-- displaying data in table -->
         <?php
            foreach ($vendors as $vendor){
                ?>
                <tr>
                    <td><?php echo $vendor['vendorName'];?></td>
                    <td><?php echo $vendor['email'];?></td>
                    <td><?php echo $vendor['phoneNumber'];?></td>
                    <td><?php echo $vendor['province'];?></td>
                    <td><a href="vendor?vId=<?php echo $vendor['vendorId']?>"><button>Delete</button></a></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>