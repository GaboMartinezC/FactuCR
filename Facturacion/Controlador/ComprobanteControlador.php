<?php

require_once './Modelo//Metodos/Conexion.php';
require_once './Modelo/Entidades/Usuario.php';
require_once './Modelo/Metodos/UsuarioM.php';

require_once './Modelo/Entidades/Encabezado.php';
require_once './Modelo/Metodos/EncabezadoM.php';
require_once './Modelo/Entidades/LineaDetalle.php';
require_once './Modelo/Metodos/LineaDetalleM.php';
require_once './Modelo/Entidades/CodigoComercial.php';
require_once './Modelo/Metodos/CodigoComercialM.php';
require_once './Modelo/Entidades/Descuento.php';
require_once './Modelo/Metodos/DescuentoM.php';
require_once './Modelo/Entidades/Impuesto.php';
require_once './Modelo/Metodos/ImpuestoM.php';
require_once './Modelo/Entidades/Exoneracion.php';
require_once './Modelo/Metodos/ExoneracionM.php';
require_once './Modelo/Entidades/Usuario.php';
require_once './Modelo/Metodos/UsuarioM.php';
require_once './Modelo/Entidades/Receptor.php';
require_once './Modelo/Metodos/ReceptorM.php';
require_once './Modelo/Entidades/InformacionReferencia.php';
require_once './Modelo/Metodos/InformacionReferenciaM.php';
require_once './Modelo/Entidades/Otros.php';
require_once './Modelo/Metodos/OtrosM.php';

class ComprobanteControlador 
{
    //index
    function Index()
    {
        $validar= new Rutas();
        if($validar->ValidarSesion())
        {
            $uM = new UsuarioM();   
            $u= $uM->BuscarCorreo(strtolower($_SESSION["sesion"]));
            $vista = './Vista/Factura/Documentos.php';
            require_once './Vista/Templates/Plantilla.php';
        }
    }
    
    //creacion de partes del comprobante
    private function NuevoOtros()
    {
        $o=new Otros();
        $o->setIdComprobante($_POST['idComprobante']);
        $o->setOtroTexto($_POST['otroTexto']);
        $o->setOtroContenido($_POST['otroContenido']);
        $o->setEstado($_POST[1]);
        $oM= new OtrosM();
        $oM->Nuevo($o);
        //$this->index();
    }
    
    private function NuevoInformacionReferencia()
    {
        $ir=new InformacionReferencia();
        $ir->setIdComprobante($_POST['idComprobante']);
        $ir->setTipoDoc($_POST['idTipoDoc']);
        $ir->setNumero($_POST['numero']);
        $ir->setFechaEmision($_POST['fechaEmision']);
        $ir->setCodigo($_POST['codigo']);
        $ir->setRazon($_POST['razon']);
        $ir->setEstado(1);
        $irM= new InformacionReferenciaM();
        $irM->Nuevo($ir);
        //$this->index();
    }
    
    private function NuevoOtrosCargos()
    {
        
    }
    
    private function NuevoExoneracion()
    {
        
    }
    
    private function NuevoImpuesto()
    {
        
    }
    
    private function NuevoDescuento()
    {
        $ir=new Descuento();
        $ir->setIdLineaDetalle($_POST['idLineaDetalle']);
        $ir->setMontoDescuento($_POST['MontoDescuento']);
        $ir->setNaturalezaDescuento($_POST['NaturalezaDescuento']);
        $ir->setEstado(1);
        $irM= new DescuentoM();
        $irM->Nuevo($ir);
        //$this->index();
    }
    
    private function NuevoCodigoComercial()
    {
        $ir=new CodigoComercial();
        $ir->setIdLineaDetalle($_POST['idLineaDetalle']);
        $ir->setTipo($_POST['Tipo']);
        $ir->setCodigo($_POST['Codigo']);
        $ir->setEstado(1);
        $irM= new CodigoComercialM();
        $irM->Nuevo($ir);
        //$this->index();
    }
    
    private function NuevoLineaDetalle()
    {
        $ld = new LineaDetalle();
        $ld->setIdEncabezado($_POST['idEncabezado']);
        $ld->setIdReceptor($_POST['idReceptor']);
        $ld->setNumeroLinea($_POST['numeroLinea']);
        $ld->setPartidaArancelaria($_POST['partidaArancelaria']);
        $ld->setCodigo($_POST['codigo']);
        $ld->setCantidad($_POST['cantidad']);
        $ld->setUnidadMedida($_POST['unidadMedida']);
        $ld->setUnidadMedidaComercial($_POST['unidadMedidaComercial']);
        $ld->setDetalle($_POST['detalle']);
        $ld->setPrecioUnitario($_POST['precioUnitario']);
        $ld->setMontoTotal($_POST['montoTotal']);
        $ld->setSubTotal($_POST['subTotal']);
        $ld->setBaseImponible($_POST['baseImponible']);
        $ld->setImpuestoNeto($_POST['impuestoNeto']);
        $ld->setMontoTotalLinea($_POST['montoTotalLinea']);
        $ld->setEstado(1);
        $ldM = new LineaDetalleM();   
        $ldM->Nuevo($ld);
        //$this->Index();
    }
    
    private function NuevoEncabezado()
    {
        $e = new Encabezado();
        $e->setIdEmisor($_POST['idEmisor']);
        $e->setIdReceptor($_POST['idReceptor']);
        $e->setCodigoActividad($_POST['codigoActividad']);
        $e->setClave($_POST['clave']);
        $e->setNumeroConsecutivo($_POST['numeroConsecutivo']);
        $e->setFechaEmision($_POST['fechaEmision']);
        $e->setCondicionVenta($_POST['condicionVenta']);
        $e->setPlazoCredito($_POST['plazoCredito']);
        $e->setMedioPago($_POST['medioPago']);
        $e->setEstado(1);
        $eM = new EncabezadoM();   
        $eM->Nuevo($e);
        //$this->Index();
    }
    
    private function GuardarComprobante()
    {
        //guardar en base de dato
        //NuevoOtros();
        //NuevoInformacionReferencia();
        //NuevoOtrosCargos();
        //NuevoExoneracion();
        //NuevoImpuesto();
        //NuevoDescuento();
        //NuevoCodigoComercial();
        //NuevoLineaDetalle();
        //NuevoEncabezado();
    }
    
    function NuevoComprobante()
    {
        //Guardar En base de datos
        GuardarComprobante();
        //Guardar XML
        $armarXML = ArmarXML();
        /*Aqui va lo de Kevin y Maroto*/
        
        //Generar PDF
        /*Aqui va lo de josa*/
        
        //s
        
        
    }
    
    
    //Demas metodos

    private function BuscarTodos()
    {
        $encabezadoM = new EncabezadoM();
        $todos = $encabezadoM->BuscarTodos();
        return $todos;
    }
    
    private function BuscarUno($idComprobante)
    {
        session_start();
        //Instancia de los metodos
        $encabezadoM = new EncabezadoM();
        $lineaDetalleM = new LineaDetalleM();
        $codigoComercialM = new CodigoComercialM();
        $descuentoM = new DescuentoM();
        $impuestoM = new ImpuestoM();
        $exoneracionM = new ExoneracionM();
        $usuarioM = new UsuarioM();
        $receptorM = new ReceptorM();
        $informacionReferenciaM = new InformacionReferenciaM();
        $otrosM = new OtrosM();
        
        //traerse los datos
        $encabezado= $encabezadoM->BuscarID($idComprobante);
        $lineaDetalle = $lineaDetalleM->BuscarIdEncabezado($encabezado[0]->getId());
        foreach ($lineaDetalle as $ld)
        {

        }

        $codigoComercial = $codigoComercialM->BuscarIdLineaDetalle($lineaDetalle[0]->getId());
        $descuento = $descuentoM->BuscarIdLineaDetalle($lineaDetalle[0]->getId());
        $impuesto = $impuestoM->BuscarIdLineaDetalle($lineaDetalle[0]->getId());
        $exoneracion= Exoneracion();
        for ($i=0;$i < sizeof($impuesto) ;$i++)
        {
            $exoneracion[$i] = $exoneracionM->BuscarIdImpuesto($impuesto[0]->getId());
        }
        $usuario = $usuarioM->BuscarID($encabezadoM[0]->getIdEmisor());
        $receptor = $receptorM->BuscarID($encabezado[0]->getIdReceptor());
        $informacionReferencia = $informacionReferenciaM->BuscarIdComprobante($encabezado[0]->getId());
        $otros = $otrosM->BuscarIdComprobante($encabezado[0]->getId());
        

        /*
        $comprobanteDTO = new ComprobanteDTO();
        $comprobanteDTO->Emisor = new EmisorDTO();

        $comprobanteDTO->fechaEmision;

        $comprobanteDTO->Emisor->;
        $comprobanteDTO->LineaDetalle= new LineaDetalleDTO();
        $comprobanteDTO->LineaDetalle->Impuesto= new ImpuestoDTO();
        $comprobanteDTO->LineaDetalle->Impuesto->Exoneracion= new ExoneracionDTO();

        foreach($comprobanteDTO->LineaDetalle->Impuesto->Exoneracion as $ld)
            {
                $ld->montoExoneracion;

            }
        */

    }
    
}
