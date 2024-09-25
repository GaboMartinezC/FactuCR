<?php

class OtrosCargosET
{
    private $id;
    private $idEncabezado;
    private $tipoDocumento;
    private $numeroIdentidadTercero;
    private $nombreTercero;
    private $detalle;
    private $porcentaje;
    private $montoCargo;
    private $estado;
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdEncabezado()
    {
        return $this->idEncabezado;
    }
    public function setIdEncabezado($idEncabezado)
    {
        $this->idEncabezado = $idEncabezado;
    }
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }
    public function getNumeroIdentidadTercero()
    {
        return $this->numeroIdentidadTercero;
    }
    public function setNumeroIdentidadTercero($numeroIdentidadTercero)
    {
        $this->numeroIdentidadTercero = $numeroIdentidadTercero;
    }
    public function getNombreTercero()
    {
        return $this->nombreTercero;
    }
    public function setNombreTercero($nombreTercero)
    {
        $this->nombreTercero = $nombreTercero;
    }
    public function getDetalle()
    {
        return $this->detalle;
    }
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;
    }
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;
    }
    public function getMontoCargo()
    {
        return $this->montoCargo;
    }
    public function setMontoCargo($montoCargo)
    {
        $this->montoCargo = $montoCargo;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}