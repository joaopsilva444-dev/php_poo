<?php

abstract class FiguraGeometrica{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }
    public function printCaracteristicas()
    {
        $areaTemp = $this->area();
        $perimetroTemp = $this->perimetro();
        echo "Tipo: $this->tipo, Area: $areaTemp, Perimetro: $perimetroTemp";
    }

    public abstract function area();
    
    public abstract function perimetro();
}