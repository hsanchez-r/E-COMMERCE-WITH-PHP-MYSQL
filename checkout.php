
<?php
$page_title="THANK YOU :)";
if(session_status()==PHP_SESSION_NONE){
    session_start();
    
}

if(!isset($_SESSION['login'])){
    header("Location:log_form.php");
            exit();
    
}

$_SESSION['cart']='';
require_once('includes/header2.php');
?>

<h2>Checkout</h2>

<p>Thank you for choosing CTRL GAMES. Your business is greatly appreciated. You will be notified once your items are shipped.</p>

<?php 
include('includes/footer2.php');
?>