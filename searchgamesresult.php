<?php
$page_title="RESULTS";
require_once ('includes/header2.php');
require_once('includes/database.php');

if (filter_has_var(INPUT_GET, "terms")) {
    $terms_str = filter_input(INPUT_GET, 'terms', FILTER_SANITIZE_STRING);
} else {
    echo "There was not search terms found.";
    include ('includes/footer.php');
    exit;
}

//explode the search terms into an array
$terms = explode(" ", $terms_str);

//select statement using pattern search. Multiple terms are concatnated in the loop.
$sql = "SELECT * FROM vgames WHERE 1";
foreach ($terms as $term) {
    $sql .= " AND title LIKE '%$term%'";
}


//execute the query
$query = $conn->query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg.";
    $conn->close();
    include ('includes/footer2.php');
    exit;
}

echo "<h2>Games: $terms_str</h2>";

//display results in a table
if ($query->num_rows == 0)
    echo "<p>Your search <i>'$terms_str'</i> did not match any games in our inventory</p>";
else {
    ?>
    <table>
        <tr>
            <th>Title</th>
            
            <th>Price</th>
        </tr>

        <?php
        //insert a row into the table for each row of data
        while (($row = $query->fetch_assoc()) !== NULL) {
            echo "<tr>";
            echo "<td><a href='gamesdesc.php?id=", $row['id'], "'>", $row['title'], "</a></td>";
            
            echo "<td>", "$". $row['price'], "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php
}
// clean up resultsets when we're done with them!
$query->close();

// close the connection.
$conn->close();

include ('includes/footer2.php');

