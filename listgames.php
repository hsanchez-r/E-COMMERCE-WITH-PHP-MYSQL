<?php
$page_title="GAME CATALOG";
require 'includes/database.php';
include ('includes/header2.php');
?>

<h2>Games Offered</h2>
<table border="1">
    <tr>
        <th>Title</th>
        <th>Release Date </th>
        
        <th class="col3">Description</th>
        <th class="col4">Price</th>
        
        
    </tr>

    <!-- add PHP code here to list all books from the "books" table -->
    <?php
    //Selecting statement
    $sql = "SELECT * FROM vgames";

    //Executing query
    $query = $conn->query($sql);

    while (($row = $query->fetch_assoc()) !== NULL) {
        echo "<tr>"; 
        
        echo "<td class='gameLink'><a href=gamesdesc.php?id=", $row['id'], "><img class='coverArt' src='".$row['image']."'/>",$row['title'], "</a></td>";
        echo "<td class='RD'>", $row['release_date'], "</td>";
        
        echo "<td><p>", $row['description'], "</p></td>";
        
        echo "<td>", "$".$row['price'], "</td>";
        echo "</tr>";
    }
    ?>
</table>
<?php 
include ('includes/footer2.php');