<?php
$page_title="ADD GAMES *admin only*";
require_once 'includes/header2.php';
require_once('includes/database.php');

if (!filter_has_var(INPUT_POST, 'title') ||
        !filter_has_var(INPUT_POST, 'dev_id') ||
        !filter_has_var(INPUT_POST, 'release_date') ||
        !filter_has_var(INPUT_POST, 'plat_id') ||
        !filter_has_var(INPUT_POST, 'upc') ||
        !filter_has_var(INPUT_POST, 'image') ||
        !filter_has_var(INPUT_POST, 'twitch') ||
        !filter_has_var(INPUT_POST, 'price')) {   
    echo "There were problems retrieving game details. New game cannot be added.";
    require_once 'includes/footer.php';
    $conn->close();
    die();
}

$title = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)));
$dev_id = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'dev_id', FILTER_SANITIZE_STRING)));
$release_date = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'release_date', FILTER_DEFAULT)));
$description = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)));
$plat_id = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'plat_id', FILTER_SANITIZE_STRING)));
$upc = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'upc', FILTER_SANITIZE_NUMBER_INT)));
$image = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_DEFAULT)));
$twitch = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'twitch', FILTER_DEFAULT)));
$price = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING)));


echo "this is data received.";
echo "<br> $title";
echo "<br> $dev_id";
echo "<br> $release_date";
echo "<br> $plat_id";
echo "<br> $upc";
echo "<br> $image";
echo "<br> $twitch";
echo "<br> $price";


$sql="INSERT INTO vgames VALUES (NULL,  '$title', '$dev_id', '$release_date', '$description', '$plat_id', '$upc', '$image', '$twitch', '$price')";
echo "<br>debug";
echo  "<br> $sql";

$query=@$conn->query($sql);

$id = $conn->insert_id;


$conn->close();
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Connection Failed with: $errno, $errmsg<br/>\n";
    include ('includes/footer.php');
    exit;
}
echo "Your account has been updated.";
echo "You have successfully inserted the new game into the database.";
echo "<p><a href='gamesdesc.php?id=$id'>Game Details</a></p>";
require_once 'includes/footer2.php';



