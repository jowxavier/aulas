<?php
include('Eletrodomestico.class.php');

class Geladeira extends Eletrodomestico {
    public function ligarGeladeira($string)
    {
        return "=> ".$this->ligar($string);
    }
}