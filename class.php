<?php

class Validate {

    private $response;
    private $submit;

    public function __construct($response, $submit) {
        $this->response = $response;
        $this->submit = $submit;
    }
    
    public function response() {

        if($this->response === 'no' ) {
            return "Mauvaise réponse";
        }
        return "Bonne réponse";
    }
}

?>