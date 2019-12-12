<?php 
require_once 'DataHandler.php';

class Logic {
    public function __construct() {
        $this->DataHandler = new DataHandler( "localhost", "mysql", "vakantiedagen", "root", "");
    }

    public function __destruct() {
    }

    public function Create() {
        
		// 	$voornaam       = $_POST['voornaam'];
		// 	$achternaam     = $_POST["achternaam"];
		// 	$bijnaam    = $_POST["bijnaam"];
		
		// try {
		// 	$sql    = "INSERT INTO `tabel`(`id`, `voornaam`, `achternaam`, `bijnaam`) VALUES ('id','$voornaam','$achternaam','$bijnaam')";
		// 	$result = $this->DataHandler->create( $sql );
            
        //     return $result;            
        // }catch (Exception $e) {
        //     throw $e;
        // }
    }

    public function Reads() {

        $inkomsten = $_POST["inkomsten"]; 
        $tariefgroep = $_POST["tariefgroep"];
        
        

        $newinkomsten = $inkomsten - $tariefgroep;
        $belasting = 0;
        
        if ($newinkomsten < 8001){
           $belasting = $newinkomsten / 100 * 35.75;
        }elseif ($newinkomsten > 8001 && $newinkomsten < 25001){
            $belasting = $newinkomsten / 100 * 37.05;
        }elseif($newinkomsten > 25001 && $newinkomsten < 54000){
            $belasting = $newinkomsten / 100 * 50;
        }elseif($newinkomsten > 54001){
            $belasting = $newinkomsten / 100 * 60;
        }

            $twaalf = $belasting / 100 * 12;
            if($twaalf > 6703){
                $belasting = $belasting - 6704;
            }else{
            $belasting = $belasting - $twaalf;
            }
        
        if($belasting < 0 ){
            $totaal = 0;
            }else{
                $totaal = round($belasting , 2);
                }
                return $totaal;
            }
    
            

}
?>