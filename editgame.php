<?php
$page_title="EDIT GAME *admin only*";
require_once 'includes/header2.php';
require_once 'includes/database.php';


if (!filter_has_var(INPUT_GET, 'id')) {
    echo "Cannot delete because there were problems retrieving game id";
    include ('includes/footer.php');
    exit;
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$sql = "SELECT * FROM vgames WHERE id=$id";


$query = @$conn->query($sql);
$row = $query->fetch_assoc();


//echo $row['title'];

if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once 'includes/footer2.php';
    exit;
}
?>
<!DOCTYPE html>
<html>

    <body>

        <div>
            <h2>Ctrl Game</h2>
            <form action="updategame.php" method="get">
                <table>
                    <tr>
                        <th>Game ID</th>
                        <td><input name="id" value="<?php echo $row['id'] ?>" readonly="readonly" /></td>
                    </tr>
                    <tr>
                        <td style="text-align: right; width: 100px" >Title: </td>
                        <td><input name="title" type="text" size="100" value="<?php echo $row['title'] ?>"required /></td>
                    </tr>

                    <tr>
                        <td style="text-align: right">Release Date:</td>
                        <td>
                            <input name="release_date" type="text"  value="<?php echo $row['release_date'] ?>"required />
                            <span style="font-size: small"></span>
                        </td>
                    <tr>
                        <td style="text-align: right; width: 100px">Description: </td>
                        <td>
                            <input name="description" type="text" rows="4" cols="20" value="<?php echo $row['description'] ?>" >
                            </input>
                        </td>

                    </tr>
                    <tr>
                        <td style="text-align: right">Price: </td>
                        <td><input name="price"  type="float" min="0.00" max="10000.00" step="0.01" value="<?php echo $row['price'] ?>"  required /></td>
                    </tr>
                    <tr>
                        <td style="text-align: right">Twitch Account: </td>
                        <td><input name="twitch" type="text" value="<?php echo $row['twitch']?>" required /></td>
                    </tr>

                </table>
                <input type="submit" value="Update Game"/>
                <input type="button" value="Cancel" onclick="window.location.href = 'listgames.php'">
            </form>
        </div>


    </body>
</html>
