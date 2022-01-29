<?php

require "../dbBroker.php";
require "../model/projekcija.php";

if(isset($_POST['id'])){
    $obj = new Projekcija($_POST['id']);
    $status = $obj->deleteById($conn);
    if ($status){
        echo "Success";
    }else{
        echo "Failed";
    }
}

?>