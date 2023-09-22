<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Member Records" />
        <link rel="stylesheet" href="./css/style.css">
        <title>Goto Grocery - Member Records Page</title>
    </head>
    <body>
        <header>
            <a href="Home.php"><h1>Goto Grocery</h1></a>
            <hr />
            <nav>
                <a href="member.php">Member Records</a>
                <a href="product.php">Product Records</a>
                <a href="sales.php">Sales Records</a>
            </nav>
            <hr />
        </header>
        <h1>Member Records Page</h1>
        <hr />
        <nav>
            <a href="addMember.php">Add Member Record</a>
            <a href="editMember.php">Edit Member Record</a>
            <a href="deleteMember.php">Delete Member Record</a>
            <a href="searchMember.php">Search Member Records</a>
        </nav>
        <h3>Search Members Page</h3>
        <p>To search for a member's record, please enter a search query below.</p>
        <form action="search_results/search_member_search_results.php" method="GET">
            <input type="text" name="query" placeholder="Enter a query.">
            <input type="submit" value="Search">
        </form>
        <hr />
    </body>
</html>