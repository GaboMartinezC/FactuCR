<?php
class ClienteGuardado 
{
    private $id;
    private $idUsuario;
    private $idReceptor;
    private $Estado;

    public function getId() {
        return $this->id;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdReceptor() {
        return $this->idReceptor;
    }

    public function getEstado() {
        return $this->Estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function setIdReceptor($idReceptor): void {
        $this->idReceptor = $idReceptor;
    }

    public function setEstado($Estado): void {
        $this->Estado = $Estado;
    }


}
