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
                <form method="post">
                    <td><?php echo $vendor['vendorName'];?></td>
                    <td><?php echo $vendor['email'];?></td>
                    <td><?php echo $vendor['phoneNumber'];?></td>
                    <td><?php echo $vendor['city'];?></td>
                    <td><a href="<?php echo '../proposal/'.$vendor['proposal'];?>" target="_blank">View </a></td>
                   <td>
                        <input type="hidden" name="vendorId" value="<?php echo $vendor['vendorId'];?>">
                        <input type="hidden" name="email" value="<?php echo $vendor['email'];?>">
                        <button name="submit">Approve</button>
                  </td>
                  </form>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>