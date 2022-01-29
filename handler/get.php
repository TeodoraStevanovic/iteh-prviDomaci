<?php

require "../dbBroker.php";
require "../model/projekcija.php";

if(isset($_POST['id'])){
    $myArray = Projekcija::getById($_POST['id'], $conn);
    echo json_encode($myArray);
}

?>