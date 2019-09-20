<?php
$page_title="UPDATE GAME *admin only*";

require_once ('includes/header2.php');
require_once('includes/database.php');


$id = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)));
$title = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING)));
$release_date = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'release_date',FILTER_SANITIZE_STRING)));
$description = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'description', FILTER_SANITIZE_STRING)));
$price = $conn->real_escape_string(filter_input(INPUT_GET, 'price'));
$twitch= $conn->real_escape_string(filter_input(INPUT_GET, 'twitch'));

$sql = "UPDATE vgames SET
        title = '$title',
        release_date = '$release_date',
        description = '$description',
        price = '$price',
        twitch='$twitch' WHERE  id = $id";
        

$query = @$conn->query($sql);


if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Connection Failed with: $errno, $errmsg<br/>\n";
    include ('includes/footer2.php');
    exit;
}
echo "Your game has been updated.";


$conn->close();

include ('includes/footer2.php');
