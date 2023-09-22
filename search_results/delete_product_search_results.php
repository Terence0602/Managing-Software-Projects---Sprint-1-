<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Product Records" />
        <link rel="stylesheet" href="../css/style.css">
        <title>Goto Grocery - Product Records Page</title>
    </head>
    <body>
        <header>
            <a href="../Home.php"><h1>Goto Grocery</h1></a>
            <hr />
            <nav>
                <a href="../member.php">Member Records</a>
                <a href="../product.php">Product Records</a>
                <a href="../sales.php">Sales Records</a>
            </nav>
            <hr />
        </header>
        <h1>Product Records Page</h1>
        <hr />
        <nav>
            <a href="../addProduct.php">Add Product Record</a>
            <a href="../editProduct.php">Edit Product Record</a>
            <a href="../deleteProduct.php">Delete Product Record</a>
            <a href="../searchProduct.php">Search Product Records</a>
        </nav>
        <h3>Delete Product Page</h3>
        <?php
            $query = $_GET['query'];
            echo "<p>Found X records for '$query'.</p>";
        ?>
        <label for="filter">Sort by:</label>
        <select id="filter">
            <option value="all">All</option>
            <option value="alpha_asc">Alphabetical Ascending</option>
            <option value="alpha_desc">Alphabetical Descending</option>
        </select>
        <br><br>
        <table>
            <thead>
                <tr>
                    <td>ProductID</td>
                    <td>ProductName</td>
                    <td>ProductStock</td>
                    <td>ProductSupplyDate</td>
                    <td>ProductSupplier</td>
                    <td>ProductPricePerUnit</td>
                    <td>Delete</td>
                </tr>
            </thead>
        </table>
        <hr />
    </body>
</html>