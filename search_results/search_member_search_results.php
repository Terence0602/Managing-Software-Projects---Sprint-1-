<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Member Records" />
        <link rel="stylesheet" href="../css/style.css">
        <title>Goto Grocery - Member Records Page</title>
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
        <h1>Member Records Page</h1>
        <hr />
        <nav>
            <a href="../addMember.php">Add Member Record</a>
            <a href="../editMember.php">Edit Member Record</a>
            <a href="../deleteMember.php">Delete Member Record</a>
            <a href="../searchMember.php">Search Member Records</a>
        </nav>
        <h3>Search Members Page</h3>
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
                    <td>MemberID</td>
                    <td>MemberFirstName</td>
                    <td>MemberLastName</td>
                    <td>MemberDateOfBirth</td>
                    <td>MemberEmail</td>
                    <td>MemberPhone</td>
                    <td>MemberAddress</td>
                    <td>MemberSuburb</td>
                    <td>MemberState</td>
                    <td>MemberPostcode</td>
                    <td>MemberJoinDate</td>
                </tr>
            </thead>
        </table>
        <hr />
    </body>
</html>