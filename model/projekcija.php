<?php
class Projekcija{
    public $id;   
    public $naziv;   
    public $sala;   
    public $trajanje;   
    public $datum;
    public $korisnikID;
    

    public function __construct($id=null, $naziv=null, $sala=null, $trajanje=null, $datum=null,$korisnikID=null)
    {
        $this->id = $id;
        $this->naziv = $naziv;
        $this->sala = $sala;
        $this->trajanje = $trajanje;
        $this->datum = $datum;
        $this->korisnikID=$korisnikID;
    }


    public static function getAll(mysqli $conn)
    {
        //pravimo query 
        $query = "SELECT * FROM projekcije";
        //konekcija koja treba da izvrsi query funkciju 
        return $conn->query($query);
    }

    #funkcija getById

    public static function getById($id, mysqli $conn){

        $query = "SELECT * FROM projekcije WHERE id=$id";
         // myObj je niz koji je prazan
        $myObj = array();
        if($msqlObj = $conn->query($query)){
            //ako upit vrati bilo kakve rezultate
        
            while($red = $msqlObj->fetch_array(1)){
                //dodajemo na kraj niza
                $myObj[]= $red;
            }
        }

        return $myObj;
    }

  
    public function deleteById(mysqli $conn)
    {
        $query = "DELETE FROM projekcije WHERE id=$this->id";
        return $conn->query($query);
    }

 

    #update
   /* public function update1($id, mysqli $conn)
    {
        $query = "UPDATE projekcije set naziv = $this->naziv,sala = $this->sala,trajanje = $this->trajanje,datum = $this->datum,korisnikID=$this->korisnikID WHERE id=$id";
        return $conn->query($query);
    }


    public static function update($timID, $nazivTima, $drzava, $godinaOsnivanja, $brojTitula, mysqli $conn)
{
    $q = "UPDATE tim set nazivTima='$nazivTima', drzava='$drzava', godinaOsnivanja='$godinaOsnivanja', brojTitula='$brojTitula' where timID=$timID";
    return $conn->query($q);
} 
 public static function update($id, $naziv, $sala, $trajanje, $datum,$korisnikID, mysqli $conn)
    {
        $query = "UPDATE projekcije set naziv='$naziv', sala='$sala', trajanje='$trajanje', datum='$datum', korisnikID='$korisnikID' where id=$id";
        return $conn->query($query);
    public function update1(mysqli $conn){
        $upit = "UPDATE projekcije set naziv = $this->naziv,sala = $this->sala,trajanje = $this->trajanje,datum = $this->datum,korisnikID=$this->korisnikID WHERE id=$this->id";
        return $conn->query($upit);
    } }

    */
    
   

  

    public static function update(Projekcija $novaProjekcija, mysqli $conn) {
        $query="UPDATE projekcije set naziv='$novaProjekcija->naziv', sala='$novaProjekcija->sala', trajanje='$novaProjekcija->trajanje', datum='$novaProjekcija->datum', korisnikID='$novaProjekcija->korisnikID' WHERE id='$novaProjekcija->id'";
        return $conn->query($query);
    }



    #insert
    public static function add(Projekcija $Projekcija, mysqli $conn)
    {
        $query = "INSERT INTO projekcije(naziv, sala, trajanje, datum, korisnikID) VALUES('$Projekcija->naziv','$Projekcija->sala','$Projekcija->trajanje','$Projekcija->datum','$Projekcija->korisnikID')";
        return $conn->query($query);
    }
}

?>