<?php
$page_title = "GAME DETAILS";
require_once 'includes/header2.php';
require 'includes/database.php';


//Below retireving id from query string
if (!filter_has_var(INPUT_GET, 'id')) {

    echo "Error: user id was not found.";

    require_once ('includes/footer2.php');

    exit();
}

$vgamesid = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT id, title, dev.dev_name, release_date, description, plat.plat_type, image, twitch, price FROM vgames, dev, plat WHERE vgames.dev_id = dev.dev_id AND vgames.plat_id = plat.plat_id AND vgames.id=$vgamesid";

$query = $conn->query($sql);

$row = $query->fetch_assoc();
?>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
<h2>Games Details</h2>




<table border="0">
    <tbody>
        <tr>
            <td rowspan="4" colspan="2" style="padding-left: 10px;"> <?php echo "<img class='coverArt' src='" . $row['image'] . "' />" ?>  </td>
            <td></td>
            <th style="padding-left: 80px;">Title:</th>
            <td><p><?php echo $row['title'] ?></p></td>
            <td></td>



        </tr>

        <tr>

            <td></td>
            <th style="padding-left: 80px;">Developer:</th>
            <td><p><?php echo $row['dev_name'] ?></p></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <th style="padding-left: 80px;">Release Date:</th>
            <td><p><?php echo $row['release_date'] ?></p></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <th style="padding-left: 80px;">Description:</th>
            <td><p><?php echo $row['description'] ?></p></td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2" colspan="2"></td>
            <td></td>
            <th style="padding-left: 80px;">Platform:</th>
            <td style="padding-left: 5px;"><p><?php echo $row['plat_type'] ?></p></td>
            <td></td>
            <td></td>



        </tr>
        <tr>
            <th></th>
            <th style="padding-left: 80px;">Price:</th>
            <td><p><?php echo "$", $row['price'] ?></p></td>
            <td></td>
        </tr>
    </tbody>
</table>




<p style="color: yellow; padding-left: 10px;">Check out the Twitch Live Stream!!</p>

<table border="0">
    <tbody>
        <tr>
            
            <th></th>
            

        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            
            
            <td style="padding-left: 150px;" id="twitch-embed"></td>
    <script type="text/javascript">
        new Twitch.Embed("twitch-embed", {
            width: 550,
            height: 400,
            channel: "<?php echo $row['twitch'] ?>",
            allowfullscreen: true,
            autoplay: true

        });
    </script>
</tr>

<tr>
    <td>
        <a href="addshoppingcart.php?id=<?php echo $row['id'] ?>">
            <img src="www/img/addtocart_button.png"/> 
        </a>
    </td>
</tr>
</tbody>

</table>

<?php
if ($role == 1) {
    //$game_id = $row['id'];
    echo "<br>";
    echo "<a style='color: white;' href='editgame.php?id=$vgamesid'>Edit</a>";
    echo "<br>";
    echo "<a style='color: white;' href='deletegame.php?id=$vgamesid'>Delete Game</a>";
}
?>


