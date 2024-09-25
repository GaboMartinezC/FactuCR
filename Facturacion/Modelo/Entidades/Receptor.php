<?php


class Receptor 
{
    private $id;
    private $nombre;
    private $tipoIdentificacion;
    private $identificacion;
    private $nombreComercial;
    private $ubicacion;
    private $otrasSenas;
    private $telefono;
    private $codigoTelefono;
    private $fax;
    private $codigoFax;
    private $correoElectronico;
    private $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getTipoIdentificacion() {
        return $this->tipoIdentificacion;
    }

    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function getNombreComercial() {
        return $this->nombreComercial;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function getOtrasSenas() {
        return $this->otrasSenas;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCodigoTelefono() {
        return $this->codigoTelefono;
    }

    public function getFax() {
        return $this->fax;
    }

    public function getCodigoFax() {
        return $this->codigoFax;
    }

    public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setTipoIdentificacion($tipoIdentificacion): void {
        $this->tipoIdentificacion = $tipoIdentificacion;
    }

    public function setIdentificacion($identificacion): void {
        $this->identificacion = $identificacion;
    }

    public function setNombreComercial($nombreComercial): void {
        $this->nombreComercial = $nombreComercial;
    }

    public function setUbicacion($ubicacion): void {
        $this->ubicacion = $ubicacion;
    }

    public function setOtrasSenas($otrasSenas): void {
        $this->otrasSenas = $otrasSenas;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setCodigoTelefono($codigoTelefono): void {
        $this->codigoTelefono = $codigoTelefono;
    }

    public function setFax($fax): void {
        $this->fax = $fax;
    }

    public function setCodigoFax($codigoFax): void {
        $this->codigoFax = $codigoFax;
    }

    public function setCorreoElectronico($correoElectronico): void {
        $this->correoElectronico = $correoElectronico;
    }


    public function setEstado($estado): void {
        $this->estado = $estado;
    }

}
