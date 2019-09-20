<?php
$page_title="SHOPPING CART";
require_once ('includes/header2.php');
require_once('includes/database.php');

?>
<h2>My Shopping Cart</h2>
<?php
if (!isset($_SESSION['cart']) || !$_SESSION['cart']) {
    echo "Your shopping cart is empty.<br><br>";
    include ('includes/footer2.php');
    exit();
}

$cart = $_SESSION['cart'];
?>
<table class="booklist">
    <tr>
        
        <th style="width: 500px"></th>
        <th style="width: 60px">Price</th>
        <th style="width: 60px">Quantity</th>
        <th style="width: 60px">Total</th>
    </tr>
    <?php
    $sql = "SELECT id, title, price FROM vgames WHERE 0";
    
    foreach(array_keys($cart) as $id){
        $sql.=" OR id=$id";
    }
    //echo $sql . "<br>";
    
    
    $query=$conn->query($sql);
    //print_r($query);
    
    $final_total = 0;
    
    while($row=$query->fetch_assoc()){
        $id=$row['id'];
        $title=$row['title'];
        $price=$row['price'];
        $qty=$cart[$id];
        $total=$qty*$price; 
        $final_total += $total;
        echo"<tr>",
                "<td><ahref='bookdetails.php?id=$id'>$title</a></td>",
                "<td>$$price</td>",
                "<td>$qty</td>",
                "<td>$$total</td>",
                "</tr>";
        
    }
    
    echo"<tr>",
                "<td></td>",
                "<td></td>",
                "<td>Grand Total: </td>",
                "<td>$$final_total</td>",
                "</tr>";

    ?>
</table>
<br>
<div>
    <input type="button" value="Checkout" onclick="window.location.href = 'checkout.php'"/>
    <input type="button" value="Cancel" onclick="window.location.href = 'listgames.php'" />
</div>
<br><br>

<?php
include ('includes/footer2.php');


