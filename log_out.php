<?php
$page_title="ADIOS AMIGO";
if(session_status()==PHP_SESSION_NONE){
    session_start();

}
$_SESSION=array();

setcookie(session_name()," ",time() - 3600);

session_destroy();

include('includes/header2.php');
?>

<h2>Logout</h2>

<p>You are now logged out.</p>

<?php

include('includes/footer2.php');