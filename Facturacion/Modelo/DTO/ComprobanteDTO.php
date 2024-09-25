<?php
class ExoneracionDTO
{
    public $id;
    public $tipodocumento;
    public $numeroDocumento;
    public $nombreInstitucion;
    public $fechaEmision;
    public $porcentajeExoneracion;
    public $montoExoneracion;
}#
class ImpuestoDTO
{
    public $id;
    public $codigo;
    public $codigoTarifa;
    public $tarifa;
    public $factorIVA;
    public $monto;


    public $Exoneracion;

}
class DescuentoDTO
{
    public $id;
    public $montoDescuento;
    public $naturalezaDescuento;
}
class CodigoComercialDTO
{
    public $id;
    public $tipo;
    public $codigo;
}
class LineaDetalleDTO
{
    public $id;
    public $numeroLinea;
    public $partidaArancelaria;
    public $codigo;
    public $cantidad;
    public $unidadMedida;
    public $unidadMedidaComercial;
    public $detalle;
    public $precioUnitario;
    public $montoTotal;
    public $subTotal;
    public $baseImponible;
    public $impuestoNeto;
    public $montoTotalLinea;
    public $CodigoComercial;
    public $Descuento;
    public $Impuesto;

}

class InformacionReferenciaDTO
{
    public $id;
    public $idComprobante;
    public $tipoDoc;
    public $numero;
    public $fechaEmision;
    public $codigo;
    public $razon;
}
class OtrosCargosDTO
{
    public $id;
    public $tipoDocumento;
    public $numeroIdentidadTercero;
    public $nombreTercero;
    public $detalle;
    public $porcentaje;
    public $montoCargo;
}

class OtrosDTO
{
    public $id;
    public $otroTexto;
    public $otroContenido;
}



class ReceptorDTO
{
    public $id;
    public $nombre;
    public $tipoIdentificacion;
    public $identificacion;
    public $nombreComercial;
    public $ubicacion;
    public $otrasSenas;
    public $telefono;
    public $codigoTelefono;
    public $fax;
    public $codigoFax;
    public $correoElectronico;
}


class EmisorDTO
{
    public $id;
    public $nombre;
    public $tipoIdentificacion;
    public $identificacion;
    public $nombreComercial;
    public $ubicacion;
    public $otrasSenas;
    public $telefono;
    public $codigoTelefono;
    public $fax;
    public $codigoFax;
    public $correoElectronico;
    public $pass;
}


class ComprobanteDTO 
{
    public $id;
    public $codigoActividad;
    public $clave;
    public $numeroConsecutivo;
    public $fechaEmision;
    public $condicionVenta;
    public $plazoCredito;
    public $medioPago;
    public $totalNeto;
    public $totalIVA;
    
    public $Emisor;
    public $Receptor;
    public $LineaDetalle;
    public $InformacionReferencia;
    public $OtrosCargos;
    public $Otros;
}
