<?php

class InformacionReferencia 
{
    private $id;
    private $idComprobante;
    private $TipoDoc;
    private $numero;
    private $fechaEmision;
    private $Codigo;
    private $razon;
    private $estado;
    
    public function getId() {
return $this->id;
}

public function getIdComprobante() {
return $this->idComprobante;
}

public function getTipoDoc() {
return $this->TipoDoc;
}

public function getNumero() {
return $this->numero;
}

public function getFechaEmision() {
return $this->fechaEmision;
}

public function getCodigo() {
return $this->Codigo;
}

public function getRazon() {
return $this->razon;
}

public function getEstado() {
return $this->estado;
}

public function setId($id): void {
$this->id = $id;
}

public function setIdComprobante($idComprobante): void {
$this->idComprobante = $idComprobante;
}

public function setTipoDoc($TipoDoc): void {
$this->TipoDoc = $TipoDoc;
}

public function setNumero($numero): void {
$this->numero = $numero;
}

public function setFechaEmision($fechaEmision): void {
$this->fechaEmision = $fechaEmision;
}

public function setCodigo($Codigo): void {
$this->Codigo = $Codigo;
}

public function setRazon($razon): void {
$this->razon = $razon;
}

public function setEstado($estado): void {
$this->estado = $estado;
}



}