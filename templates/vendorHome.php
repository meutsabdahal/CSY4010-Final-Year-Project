<?php
    include 'vendorHeader.php';

    echo $_SESSION['sessVendorId'];
?>


<section>
    <h1 class="text-center mt-4 font-italic">My Products</h1>
    <a href="manageProduct"><button class="ml-5">Add Product</button></a>
    <center>
    <table class="table table-hover mt-3 text-center">
    <thead>
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
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
                    <td><?php echo $product['price'];?></td>
                    <td><?php echo $product['quantity'];?></td>
                    <td><button>Delete</button></td>
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






