<?php

class Saludar
{
    private $_nombre;
    private $_apellido;
    private $_saludo = "¡Hola ";
    function __construct($nombre, $apellido)
    {
        $this ->_nombre = $nombre;
        $this ->_apellido = $apellido;
    }
    function saludoFormal($horario){
        switch ($horario) {
            case $horario >= "5" && $horario < "13":
                return "Buenos dias ";
            case $horario >= "13" && $horario < "21":
                return "Buenas tardes " ."$this->_nombre" ." ".$this->_apellido;
            case $horario >= "00" && $horario < "5":
            case $horario >= "21" && $horario < "24":
                return "Buenas noches ";
            default:
                return "por favor elija un numero entero entre 0 y 24";
        }
    }

    function saludoInformal( $horario ){

        switch ($horario) {
            case $horario >= "5" && $horario < "13":
                return $this->_saludo .$this->_nombre ."!" ."¡Que tengas un buen día!";
            case $horario >= "13" && $horario < "21":
                return $this->_saludo .$this->_nombre ."!" ."¡Que tengas buenas tardes!";
            case $horario >= "00" && $horario < "5":
            case $horario >= "21" && $horario <= "24":
                return $this->_saludo .$this->_nombre ."!" ."¡Que tengas buenas noches!";
            default:
                return "por favor elija un numero entero entre 0 y 24";
        }
    }
}