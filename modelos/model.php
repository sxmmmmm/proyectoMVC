<?php

class model{
    private $id;
    private $name;

    public function __construct ($paramId, $paramName){
        $this->id = $paramId;
        $this->name = $paramName;
    }
    
    function getId(){
    return $this-> id;
    }

    function getName(){
        return $this-> name;
    }
}
