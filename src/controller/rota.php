<?php
include('../models/connect.php');

if ( ! empty( $_POST ) ) {
    $user = $_POST['User'];
    $Password = $_POST['Password'];
    $connect = DB::connnet_DB();
    $table = "user_estoque";
    
    //Test Insert in Table 
    $valor = DB::insert_Valor($connect,$user,$Password, $table);
    echo $valor;
}
