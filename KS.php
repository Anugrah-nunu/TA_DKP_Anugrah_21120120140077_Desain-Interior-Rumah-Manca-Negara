<?php

class Kritik {
    private $email;
    private $text;

    public function __construct($e, $t){
        $this->email = $e;
        $this->text = $t;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getText(){
        return $this->text;
    }
}