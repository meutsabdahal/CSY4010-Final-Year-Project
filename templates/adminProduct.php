<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Product</h1>
<a href="manageProduct"><button class="ml-5 mb-4 adminButton">Add Product</button></a>
<table class="table  table-hover">
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