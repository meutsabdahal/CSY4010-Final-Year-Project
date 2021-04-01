<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Category</h1>
<a href="manageSlideshow"><button class="ml-5 mb-4 adminButton">Add More</button></a>
<table class="table  table-hover">
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
            <?php
            foreach ($slideshows as $slideshow){
                ?>
                <tr>
                    <td><?php echo $slideshow['images'];?></td>
                    <td><a href="slideshow?sId=<?php echo $slideshow['slideshowId']?>"><button>Delete</button></td>
                </tr>
            <?php }
            ?>

    </tbody>
</table>