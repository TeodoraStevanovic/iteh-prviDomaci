<?php
$host = "localhost";
//naziv baze 
$db = "domaci1";
$user = "root";
$pass = "";
//kreiramo konekciju
$conn = new mysqli($host,$user,$pass,$db);

//ako se desi greska sa konekcijom hocemo da nam ispise sledece
if ($conn->connect_errno){
    exit("Nauspesna konekcija: greska> ".$conn->connect_error.", err kod>".$conn->connect_errno);
}

?>