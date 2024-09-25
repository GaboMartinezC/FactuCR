<?php
class Impuesto
{
    private $id;
    private $idLineaDetalle;
    private $Codigo;
    private $CodigoTarifa;
    private $Tarifa;
    private $FactorIVA;
    private $Monto;
    private $Estado;
    
    public function getId() {
        return $this->id;
    }

    public function getIdLineaDetalle() {
        return $this->idLineaDetalle;
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function getCodigoTarifa() {
        return $this->CodigoTarifa;
    }

    public function getTarifa() {
        return $this->Tarifa;
    }

    public function getFactorIVA() {
        return $this->FactorIVA;
    }

    public function getMonto() {
        return $this->Monto;
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

    public function setCodigo($Codigo): void {
        $this->Codigo = $Codigo;
    }

    public function setCodigoTarifa($CodigoTarifa): void {
        $this->CodigoTarifa = $CodigoTarifa;
    }

    public function setTarifa($Tarifa): void {
        $this->Tarifa = $Tarifa;
    }

    public function setFactorIVA($FactorIVA): void {
        $this->FactorIVA = $FactorIVA;
    }

    public function setMonto($Monto): void {
        $this->Monto = $Monto;
    }

    public function setEstado($Estado): void {
        $this->Estado = $Estado;
    }


}
