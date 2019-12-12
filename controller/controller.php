<?php
//require de logic waar je de functie iets laat doen
require_once './model/Logic.php';

//maak class controller 
class Controller{

    //maak public funtie construct
    public function __construct() {
        $this->Logic = new Logic();
    }

    //maak public functie destruct
    public function __destruct() {
    }

    //maak public funtie handleRequest hierin zorg je dat je ?op=... kan gebruiken
    public function handleRequest() {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            //switch case met alle cases die in ondernoemde functies verder gaan
            switch ($op) {
                default:
                $this->collectHome();
                break;
            }
        } catch ( ValidationException $e ) {
            $errors = $e->getErrors();
        }
    }

    //default pagina
    public function collectHome(){
        $reads = $this->Logic->Reads();
        
        //de view die iets laat zien
        include 'view/home.php';
    }
    
}
?>