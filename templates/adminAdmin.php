<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Admins</h1>
<a href="manageAdmin"><button class="ml-5 mb-4 adminButton">Add Admin</button></a>
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
            foreach ($admins as $admin){
                ?>
                <tr>
                    <td><?php echo $admin['firstName'];?></td>
                    <td><?php echo $admin['lastName'];?></td>
                    <td><?php echo $admin['email'];?></td>
                    <td><?php echo $admin['phone'];?></td>
                    <td><button>Edit</button>
                    <button>Delete</button></td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>