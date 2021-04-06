<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Vendors</h1>
<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Vendor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">City</th>
            <th scope="col">Proposal</th>
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
                    <td><?php echo $vendor['phoneNumber'];?></td>
                    <td><?php echo $vendor['city'];?></td>
                    <td><a href="<?php echo '../proposal/'.$vendor['proposal'];?>" target="_blank">View </a></td>
                   <td><form method="post">
                        <input type="hidden" name="vendorId" value="<?php echo $vendor['vendorId'];?>">
                        <button name="submit">Approve</button>
                   </form></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>