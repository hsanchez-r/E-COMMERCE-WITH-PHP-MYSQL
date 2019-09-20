<?php

if(session_status()==PHP_SESSION_NONE){
    session_start();
    
}

if(isset($_SESSION['cart'])){
    $cart = $_SESSION['cart'];
    
}else{
    $cart=array();
    
}

if(!filter_has_var(INPUT_GET,'id')){
    $error="Game id not found. Operation cannot proceed.<br><br>"; 
    header("Location:error.php?m=$error");
    die();
    
}

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
if(!is_numeric($id)){
    $error="Invalid game id. Operation cannot proceed.<br><br>";
    header("Location:error.php?m=$error");
    die();
    
}

if(array_key_exists($id,$cart)){
    $cart[$id]=$cart[$id]+1;
    
} else{
    $cart[$id]=1;
    
}

$_SESSION['cart']=$cart;

header('Location:showcart.php');

