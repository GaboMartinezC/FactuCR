<?php

class Exoneracion 
{
    private $id;
    private $idImpuesto;
    private $Tipodocumento;
    private $NumeroDocumento;
    private $NombreInstitucion;
    private $FechaEmision;
    private $PorcentajeExoneracion;
    private $MontoExoneracion;
    private $Estado;
    
    public function getId() {
        return $this->id;
    }

    public function getIdImpuesto() {
        return $this->idImpuesto;
    }

    public function getTipodocumento() {
        return $this->Tipodocumento;
    }

    public function getNumeroDocumento() {
        return $this->NumeroDocumento;
    }

    public function getNombreInstitucion() {
        return $this->NombreInstitucion;
    }

    public function getFechaEmision() {
        return $this->FechaEmision;
    }

    public function getPorcentajeExoneracion() {
        return $this->PorcentajeExoneracion;
    }

    public function getMontoExoneracion() {
        return $this->MontoExoneracion;
    }

    public function getEstado() {
        return $this->Estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdImpuesto($idImpuesto): void {
        $this->idImpuesto = $idImpuesto;
    }

    public function setTipodocumento($Tipodocumento): void {
        $this->Tipodocumento = $Tipodocumento;
    }

    public function setNumeroDocumento($NumeroDocumento): void {
        $this->NumeroDocumento = $NumeroDocumento;
    }

    public function setNombreInstitucion($NombreInstitucion): void {
        $this->NombreInstitucion = $NombreInstitucion;
    }

    public function setFechaEmision($FechaEmision): void {
        $this->FechaEmision = $FechaEmision;
    }

    public function setPorcentajeExoneracion($PorcentajeExoneracion): void {
        $this->PorcentajeExoneracion = $PorcentajeExoneracion;
    }

    public function setMontoExoneracion($MontoExoneracion): void {
        $this->MontoExoneracion = $MontoExoneracion;
    }

    public function setEstado($Estado): void {
        $this->Estado = $Estado;
    }


}
