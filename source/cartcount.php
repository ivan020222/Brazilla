<?php
$id = $_POST['id_tov'];
$col = $_POST['col_tov'];
        
session_start();
$temp = $_SESSION['cart'];
$temp[$id]=$col;
$_SESSION['cart'] = $temp;
?>