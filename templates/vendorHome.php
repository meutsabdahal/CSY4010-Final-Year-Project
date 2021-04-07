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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>

        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>

        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
    </center>
    
</section>

<?php
    require 'footer.php';
?>






