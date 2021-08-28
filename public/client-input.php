<?php


if(isset($_POST)){

    $NameInput = $_POST['NameInput'];
    $NdT = $_POST['NdT'];
    $D = $_POST['D'];
    
    require_once 'dbh.inc.php';
    require_once 'fonctions.php';

    if(emptyInputClient($NameInput, $NdT, $D) !== false){
        header('location:client.php?error=emptyinput');
        exit();   
    }
    if(invalidusernameClient($NameInput) !== false){
        header('location:client.php?error=invalidusername');
        exit();   
    }
    
    createClient($conn ,$NameInput, $NdT, $D);
    
}else{
    header('location:');
    exit; 
}



?>