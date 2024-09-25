<?php

class Encabezado
{

    private $id;
    private $idEmisor;
    private $idReceptor;
    private $codigoActividad;
    private $clave;
    private $numeroConsecutivo;
    private $fechaEmision;
    private $condicionVenta;
    private $plazoCredito;
    private $medioPago;
    private $totalNeto;
    private $totalIVA;
    private $estado;

    public function getId() {
        return $this->id;
    }

    public function getIdEmisor() {
        return $this->idEmisor;
    }

    public function getIdReceptor() {
        return $this->idReceptor;
    }

    public function getCodigoActividad() {
        return $this->codigoActividad;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getNumeroConsecutivo() {
        return $this->numeroConsecutivo;
    }

    public function getFechaEmision() {
        return $this->fechaEmision;
    }

    public function getCondicionVenta() {
        return $this->condicionVenta;
    }

    public function getPlazoCredito() {
        return $this->plazoCredito;
    }

    public function getMedioPago() {
        return $this->medioPago;
    }

    public function getTotalNeto() {
        return $this->totalNeto;
    }

    public function getTotalIVA() {
        return $this->totalIVA;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdEmisor($idEmisor): void {
        $this->idEmisor = $idEmisor;
    }

    public function setIdReceptor($idReceptor): void {
        $this->idReceptor = $idReceptor;
    }

    public function setCodigoActividad($codigoActividad): void {
        $this->codigoActividad = $codigoActividad;
    }

    public function setClave($clave): void {
        $this->clave = $clave;
    }

    public function setNumeroConsecutivo($numeroConsecutivo): void {
        $this->numeroConsecutivo = $numeroConsecutivo;
    }

    public function setFechaEmision($fechaEmision): void {
        $this->fechaEmision = $fechaEmision;
    }

    public function setCondicionVenta($condicionVenta): void {
        $this->condicionVenta = $condicionVenta;
    }

    public function setPlazoCredito($plazoCredito): void {
        $this->plazoCredito = $plazoCredito;
    }

    public function setMedioPago($medioPago): void {
        $this->medioPago = $medioPago;
    }

    public function setTotalNeto($totalNeto): void {
        $this->totalNeto = $totalNeto;
    }

    public function setTotalIVA($totalIVA): void {
        $this->totalIVA = $totalIVA;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }




}