<?php

class CodigoComercial {
    private $id;
    private $idLineaDetalle;
    private $tipo;
    private $codigo;
    private $estado;
    
    public function getId() {
    return $this->id;
    }

    public function getIdLineaDetalle() {
    return $this->idLineaDetalle;
    }

    public function getTipo() {
    return $this->tipo;
    }

    public function getCodigo() {
    return $this->codigo;
    }

    public function getEstado() {
    return $this->estado;
    }

    public function setId($id): void {
    $this->id = $id;
    }

    public function setIdLineaDetalle($idLineaDetalle): void {
    $this->idLineaDetalle = $idLineaDetalle;
    }

    public function setTipo($tipo): void {
    $this->tipo = $tipo;
    }

    public function setCodigo($codigo): void {
    $this->codigo = $codigo;
    }

    public function setEstado($estado): void {
    $this->estado = $estado;
    }


}
