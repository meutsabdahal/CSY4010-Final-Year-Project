<?php
    include 'vendorHeader.php';
?>


<section>
    <h1 class="text-center mt-4 font-italic">My Products</h1>
    <a href="manageProduct"><button class="ml-5">Add Product</button></a>
    <center>
    <table class="table table-hover mt-3 text-center">
    <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Category Name</th>
            <th scope="col">Price</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
         <?php
            foreach ($products as $product){
                ?>
                <tr>
                    <td><?php echo $product['productName'];?></td>
                    <td><?php echo $product['categoryName'];?></td>
                    <td><?php echo $product['price'];?></td>
                    <td><a href="vendorHome?pId=<?php echo $product['productId']?>"><button>DELETE</button>
                    <a href="editProduct?pId=<?php echo $product['productId']?>"><button>Edit</button></a>
                    </td>
                </tr>
            <?php }
            ?>

        
    </tbody>
</table>
    </center>
    
</section>

<?php
    require 'footer.php';
?>






