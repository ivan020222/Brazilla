<?php
    $id = $_POST['id_tov'];

    session_start();
    if (!isset($_SESSION['cart'])) {
        $temp[$id] = 1;
    }else {
        $temp = $_SESSION['cart'];
        if (!array_key_exists($id, $temp)) {
            $temp[$id] = 1;
        }      
    }
    $count = count($temp);
    $_SESSION['cart'] = $temp;
    echo $count;
?>