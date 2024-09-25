<?php
class Descuento
{
    private $id;
    private $idLineaDetalle;
    private $MontoDescuento;
    private $NaturalezaDescuento;
    private $Estado;
    
    public function getId() {
        return $this->id;
    }

    public function getIdLineaDetalle() {
        return $this->idLineaDetalle;
    }

    public function getMontoDescuento() {
        return $this->MontoDescuento;
    }

    public function getNaturalezaDescuento() {
        return $this->NaturalezaDescuento;
    }

    public function getEstado() {
        return $this->Estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdLineaDetalle($idLineaDetalle): void {
        $this->idLineaDetalle = $idLineaDetalle;
    }

    public function setMontoDescuento($MontoDescuento): void {
        $this->MontoDescuento = $MontoDescuento;
    }

    public function setNaturalezaDescuento($NaturalezaDescuento): void {
        $this->NaturalezaDescuento = $NaturalezaDescuento;
    }

    public function setEstado($Estado): void {
        $this->Estado = $Estado;
    }


}
