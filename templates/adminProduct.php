<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Product</h1>
<table class="table  table-hover">
    <thead>
        <!-- giving title to table -->
        <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Keywords</th>
            <th scope="col">Vendor</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <!-- displaying data in table -->
        <?php
        foreach ($products as $product){
                ?>
                <tr>
                    <td><?php echo $product['productName'];?></td>
                    <td><?php echo $product['price'];?></td>
                    <td><?php echo $product['keyword'];?></td>
                    <td><?php echo $product['vendorName'];?></td>
                    <td><a href="product?pId=<?php echo $product['productId']?>"><button>DELETE</button></td>
                </tr>
            <?php }
            ?>

    </tbody>
    </tbody>
</table>