<?php

class Otros
{

    private $id;
    private $idComprobante;
    private $otroTexto;
    private $otroContenido;
    private $estado;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getIdComprobante()
    {
        return $this->idComprobante;
    }

    public function setIdComprobante($idComprobante): void
    {
        $this->idComprobante = $idComprobante;
    }

    public function getOtroTexto()
    {
        return $this->otroTexto;
    }

    public function setOtroTexto($otroTexto): void
    {
        $this->otroTexto = $otroTexto;
    }

    public function getOtroContenido()
    {
        return $this->otroContenido;
    }

    public function setOtroContenido($otroContenido): void
    {
        $this->otroContenido = $otroContenido;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

}