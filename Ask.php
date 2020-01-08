<?php

class Ask {

    private $answers = array (
        0 => array( 
            0 => "Un conteneur symbolique et autonome qui contient des informations et des mécanismes concernant un sujet",
            1 => "Petit mammifère carnivore, à pelage brun épais et court, à pattes palmées, se nourrissant de poissons et de gibier d'eau.",
            2 => "C'est Yannis"),
        1 => array( 
            0 => "Bonne réponse",
            1 => "mauvaise réponse",
            2 => "mauvaise réponse"),
        2 => array( 
            0 => "Bonne réponse",
            1 => "mauvaise réponse",
            2 => "mauvaise réponse"),
        );
    
    private $questions = array (
            "Qu'est-ce qu'un objet ?",
            "Que signifie 'instancier une classe'?",
            "Comment faire référence à l'objet ?");

    public $number;
    public $score;

    public function __construct($x){
        $this->number = $x;
    }

    function createQuestion(){
        echo "
        <label for='objet'><b>" . $this->questions[$this->number] ."</b><br>
        <input type='radio' name='answer".$this->number."' value='1'>". $this->answers[$this->number][0]."<br>
        <input type='radio' name='answer".$this->number."' value='0'>". $this->answers[$this->number][1]."<br>
        <input type='radio' name='answer".$this->number."' value='0'>". $this->answers[$this->number][2]."<br>";
    }

    // function calculate(){
        
    // }
}
?>