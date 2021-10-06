<?php

class persona1{
    public $nombre;
    public $peso;
    public $estatura;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
    public function setpeso($peso)
    {
        $this->peso = $peso;
        return $this;
    }

    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;
        return $this;
    }


    public function calcularIMC($peso,$estatura){
        $estatura = $estatura * $estatura;
        
        $IMC = $peso/$estatura;
        
        if($IMC < 18.5){
          $gradoObesidad = "Usted tiene delgadez";
        }else if($IMC>=18.5 && $IMC<=24.9){
          $gradoObesidad = "Usted tiene un IMC normal";
        }else if($IMC>=25 && $IMC<=29.9){
          $gradoObesidad = "Usted tiene sobrepeso";
        }else if($IMC >= 30){
          $gradoObesidad = "Usted tiene obesidad";
        }

        echo 'Su nombre es '.$this->nombre.'<br>'.
        'Su peso es '.$this->peso. '<br>'.
        'Su estatura es '.$this->estatura. '<br>'.
        'Su IMC es '. $IMC .'<br>'. $gradoObesidad;
    }
}