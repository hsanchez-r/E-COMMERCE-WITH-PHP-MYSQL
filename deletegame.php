<?php
$page_title="DELETE GAME *admin only*";

require_once 'includes/header2.php';
require_once 'includes/database.php';


if(!filter_has_var(INPUT_GET, 'id')) {
    echo "Cannot delete because there were problems retrieving game id";
    include ('includes/footer.php');
    exit;
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
 

$sql="DELETE FROM vgames WHERE id=$id";
 

$query=@$conn->query($sql);


if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    exit;
}



echo "You have successfully deleted the game from the database.<br><br>";
$conn->close();
require_once 'includes/footer2.php';

