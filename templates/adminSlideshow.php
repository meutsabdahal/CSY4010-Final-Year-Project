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
                    <td><a href="category?cId=<?php echo $category['categoryId']?>"><button>DELETE</button></td>
                </tr>
            <?php }
            ?>

    </tbody>
</table>