<?php

require "../dbBroker.php";
require "../model/projekcija.php";

if( isset($_POST['naziv']) && isset($_POST['sala']) 
&& isset($_POST['trajanje']) && isset($_POST['korisnikID'])&& isset($_POST['datum'])){

    $projekcija = new Projekcija(null,$_POST['naziv'],$_POST['sala'],$_POST['trajanje'],$_POST['datum'],$_POST['korisnikID']);
    //pozivanje static funkcije za dodavanje nove projekcije
    $status = $projekcija->update($conn);

    if($status){
        // ako se vrati objekat 
        echo 'Success';
    }else{
        echo $status;
        echo "Failed";
    }
}

?>