<?php


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$count = 0;

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    if ($cart) {
        $count = array_sum($cart);
    }
}

$shoppingcart_img = (!$count) ? "shoppingcartempty.jpg" : "shoppingcartfull.jpg";

$login = '';
$name = '';
$role = 0;

if (isset($_SESSION['login']) AND isset($_SESSION['name']) AND
        isset($_SESSION['role'])) {
    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}

?>
<!DOCTYPE html>
<html>
<head>
<?php echo "<title>$page_title</title>" ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="www/css/videogame.css">
</head>
<body>

<ul class="ul1">
  <li><a class="home1" href="home.php">Home</a></li>
  <li><a class="home1" href="listgames.php">List Games</a></li>
   <li><a class="home1" href="searchgames.php">Search Games</a></li>
   <li><a class="active" href="log_form.php">Login
  <?php if($role==1){
                    echo"<a href='addgame.php' style='color: white;'>AddGame</a>||";
                    
                }
                if(empty($login)){
                    echo"<a href='log_form.php'></a>";
                }else{
                    echo"<a span style='margin-left:55px; color: white;' href='log_out.php'>Logout</a>";
                    echo"<span style='color:red; margin‐left:30px'> Welcome$name!</style>";
                    
                }
                ?>
    <div>
                            <a style="color: white;" href="showcart.php">
                                <img src="www/img/<?= $shoppingcart_img ?>" style='width: 50px; border: none'/>
                                
                                <span><?php echo $count ?> item(s)</span>
                            </a>
                        </div>

  </a></li>
    
</ul>
    
   
        <p class="aligncenter">
    <img src ='www/img/gamecntrpixelog.JPG' alt='gamecntrl'   width="960px" height="300px" >
        </p>
 
    <div class="wrapper">
    <ul class="ul1">
  <li><a class="home1" ></a></li>
  <li><a class="home1" ></a></li>
  <li><a class="home1" ></a></li>

</ul>
        
    