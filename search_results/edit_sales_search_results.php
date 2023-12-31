<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Sales Records" />
        <link rel="stylesheet" href="../css/style.css">
        <title>Goto Grocery - Sales Records Page</title>
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
        <h1>Sales Records Page</h1>
        <hr />
        <nav>
            <a href="../addSales.php">Add Sales Record</a>
            <a href="../editSales.php">Edit Sales Record</a>
            <a href="../deleteSales.php">Delete Sales Record</a>
            <a href="../searchSales.php">Search Sales Records</a>
        </nav>
        <h3>Edit Sales Page</h3>
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
                    <td>SalesID</td>
                    <td>DateOfSale</td>
                    <td>MemberFirstName</td>
                    <td>MemberLastName</td>
                    <td>ProductID</td>
                    <td>ProductName</td>
                    <td>ProductQuantity</td>
                    <td>ProductPricePerUnit</td>
                    <td>TotalCost</td>
                    <td>Edit</td>
                </tr>
            </thead>
        </table>
        <hr />
    </body>
</html>