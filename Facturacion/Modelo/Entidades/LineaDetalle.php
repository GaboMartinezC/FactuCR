<?php

class LineaDetalle {
    private $id;
    private $idEncabezado;
    private $numeroLinea;
    private $partidaArancelaria;
    private $codigo;
    private $cantidad;
    private $unidadMedida;
    private $unidadMedidaComercial;
    private $detalle;
    private $precioUnitario;
    private $montoTotal;
    private $subTotal;
    private $baseImponible;
    private $impuestoNeto;
    private $montoTotalLinea;
    private $estado;

    public function getId() {
        return $this->id;
    }

    public function getIdEncabezado() {
        return $this->idEncabezado;
    }

    public function getNumeroLinea() {
        return $this->numeroLinea;
    }

    public function getPartidaArancelaria() {
        return $this->partidaArancelaria;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getUnidadMedida() {
        return $this->unidadMedida;
    }

    public function getUnidadMedidaComercial() {
        return $this->unidadMedidaComercial;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function getPrecioUnitario() {
        return $this->precioUnitario;
    }

    public function getMontoTotal() {
        return $this->montoTotal;
    }

    public function getSubTotal() {
        return $this->subTotal;
    }

    public function getBaseImponible() {
        return $this->baseImponible;
    }

    public function getImpuestoNeto() {
        return $this->impuestoNeto;
    }

    public function getMontoTotalLinea() {
        return $this->montoTotalLinea;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdEncabezado($idEncabezado): void {
        $this->idEncabezado = $idEncabezado;
    }

    public function setNumeroLinea($numeroLinea): void {
        $this->numeroLinea = $numeroLinea;
    }

    public function setPartidaArancelaria($partidaArancelaria): void {
        $this->partidaArancelaria = $partidaArancelaria;
    }

    public function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function setUnidadMedida($unidadMedida): void {
        $this->unidadMedida = $unidadMedida;
    }

    public function setUnidadMedidaComercial($unidadMedidaComercial): void {
        $this->unidadMedidaComercial = $unidadMedidaComercial;
    }

    public function setDetalle($detalle): void {
        $this->detalle = $detalle;
    }

    public function setPrecioUnitario($precioUnitario): void {
        $this->precioUnitario = $precioUnitario;
    }

    public function setMontoTotal($montoTotal): void {
        $this->montoTotal = $montoTotal;
    }

    public function setSubTotal($subTotal): void {
        $this->subTotal = $subTotal;
    }

    public function setBaseImponible($baseImponible): void {
        $this->baseImponible = $baseImponible;
    }

    public function setImpuestoNeto($impuestoNeto): void {
        $this->impuestoNeto = $impuestoNeto;
    }

    public function setMontoTotalLinea($montoTotalLinea): void {
        $this->montoTotalLinea = $montoTotalLinea;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }


    }