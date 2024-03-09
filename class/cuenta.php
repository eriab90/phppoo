<?php

class Cuenta
{
    private $nombre;
    private $nrocuenta;
    private $tipocuenta;
    private $saldo;

    public function __construct (
        $nombre, $nrocuenta, $topocuenta, $saldo
        )
    {
      $this->nombre = $nombre;
      $this->nrocuenta = $nrocuenta;
      $this->tipocuenta = $topocuenta;
      $this->saldo = $saldo;  
    }
    
      public function setNombre($nombre)
      {
        $this->nombre = $nombre;
      
        
    }
}