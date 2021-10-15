<?php

class Eletrodomestico {
    private $ligar;

    /**
     * Get the value of sobrenome
     */
    public function ligar($ligar)
    {
        $this->ligar = $ligar;
        return $this->ligar;
    }

    public function desligar($desligar)
    {
        $this->desligar = $desligar;
        return $this->desligar;
    }
}