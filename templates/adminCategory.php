<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Category</h1>
<!-- adding button to page -->
<a href="manageCategory"><button class="ml-5 mb-4 adminButton">Add Category</button></a>
<table class="table  table-hover">
    <thead>
        <!-- giving title to table -->
        <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <!-- dispalying data -->
            <?php
            foreach ($categories as $category){
                ?>
                <tr>
                    <td><?php echo $category['categoryName'];?></td>
                    <td><a href="manageCategory?cId=<?php echo $category['categoryId']?>"><button>Edit</button></a>
                    <a href="category?cId=<?php echo $category['categoryId']?>"><button>DELETE</button>
                    </td>
                </tr>
            <?php }
            ?>

    </tbody>
</table>