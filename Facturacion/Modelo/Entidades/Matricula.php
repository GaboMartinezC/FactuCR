<?php

class Matricula
{
    private $id;
    private $idEstudiante;
    private $idCurso;
    private $detalle;
    private $pago;
    public function getId() {
        return $this->id;
    }

    public function getIdEstudiante() {
        return $this->idEstudiante;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function getPago() {
        return $this->pago;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setIdEstudiante($idEstudiante): void {
        $this->idEstudiante = $idEstudiante;
    }

    public function setIdCurso($idCurso): void {
        $this->idCurso = $idCurso;
    }

    public function setDetalle($detalle): void {
        $this->detalle = $detalle;
    }

    public function setPago($pago): void {
        $this->pago = $pago;
    }


}
