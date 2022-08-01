<?php 

    $json = $_POST['data'];
    //sleep(3);
    $product = json_decode($json);
    print_r($product);
    echo $product->name;

    $product = ['name'=>'shoe', 'id'=>'23', 'price'=>'700'];
    $json = json_encode($product);
    echo $json;
?>