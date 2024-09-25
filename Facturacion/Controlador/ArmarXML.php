<?php

class ArmarXML 
{
    function generarXML($comprobanteXML)
    {
        $doc =new DOMDocument('1.0','utf-8');
        $doc->formatOutput = true;

        $root = $doc->createElement("FacturaElectronica");
        $doc->appendChild($root);

        $clave=$doc->createElement("Clave", $comprobanteXML->clave);
        $root->appendChild($clave);
        $codigoActividad=$doc->createElement("CodigoActividad", $comprobanteXML->codigoActividad);
        $root->appendChild($codigoActividad);
        $numConsecutivo=$doc->createElement("NumConsecutivo", $comprobanteXML->numConsecutivo);
        $root->appendChild($numConsecutivo);
        $fechaEmision=$doc->createElement("FechaEmision", $comprobanteXML->fechaEmision);
        $root->appendChild($fechaEmision);

        //EMISOR
        #region emisor

        $emisor=$doc->createElement("Emisor");
        $root->appendChild($emisor);
        $NomEmisorXML=$doc->createElement("NombreEmisor", $comprobanteXML->Emisor->nombre);
        $emisor->appendChild($NomEmisorXML);

        $idEmisorXML=$doc->createElement("Identificacion");
            $tipoIdEmisorXML=$doc->createElement("TipoIdentificacion", $comprobanteXML->Emisor->tipoIdentificacion);
            $idEmisorXML->appendChild($tipoIdEmisorXML);

            $numIdEmisorXML=$doc->createElement("NumeroIdentificacion", $comprobanteXML->Emisor->identificacion);
            $idEmisorXML->appendChild($numIdEmisorXML);
        $emisor->appendChild($idEmisorXML);

        if ($comprobanteXML->Emisor->nombreComercial!= null)
        {
            $nomComercialEmisorXML=$doc->createElement("NombreComercial", $comprobanteXML->Emisor->nombreComercial);
            $emisor->appendChild($nomComercialEmisorXML);
        }

        $ubiEmisorXML=$doc->createElement("Ubicacion");
            $descripUbiEmisorXML=$doc->createElement("Descripcion", $comprobanteXML->Emisor->ubicacion);
            $ubiEmisorXML->appendChild($descripUbiEmisorXML);

            $otrasSenasEmisorXML=$doc->createElement("OtrasSenas", $comprobanteXML->Emisor->otrasSenas );
            $ubiEmisorXML->appendChild($otrasSenasEmisorXML);
        $emisor->appendChild($ubiEmisorXML);

        if ($comprobanteXML->Emisor->telefono!= null)
        {
            $telEmisorXML=$doc->createElement("Telefono");
            $codTelEmisorXML= $doc->createElement("CodigoPais", $comprobanteXML->Emisor->codigoTelefono);
            $telEmisorXML->appendChild($codTelEmisorXML);

            $numTelEmisorXML= $doc->createElement("NumeroTelefono", $comprobanteXML->Emisor->telefono);
            $telEmisorXML->appendChild($numTelEmisorXML);
            $emisor->appendChild($telEmisorXML);
        }

        if ($comprobanteXML->Emisor->fax!= null)
        {
            $faxEmisorXML=$doc->createElement("Fax");
            $codFaxEmisorXML=$doc->createElement("CodigoFax", $comprobanteXML->Emisor->codigoFax);
            $faxEmisorXML->appendChild($codFaxEmisorXML);

            $numFaxEmisorXML= $doc->createElement("NumeroFax", $comprobanteXML->Emisor->fax);
            $faxEmisorXML->appendChild($numFaxEmisorXML);
            $emisor->appendChild($faxEmisorXML);
        }

        $correoElectronicoEmisorXML=$doc->createElement("CorreoElectronico", $comprobanteXML->Emisor->correoElectronico);
        $emisor->appendChild($correoElectronicoEmisorXML);
        #endregion
        //FIN EMISOR

        //RECEPTOR
        #region receptor
        $receptor=$doc->createElement("Receptor");
        $root->appendChild($receptor);
        $NomReceptorXML=$doc->createElement("NombreReceptor", $comprobanteXML->Receptor->nombre);
        $receptor->appendChild($NomReceptorXML);

        $idReceptorXML=$doc->createElement("Identificacion");
            $tipoIdReceptorXML=$doc->createElement("TipoIdentificacion", $comprobanteXML->Receptor->tipoIdentificacion);
            $idReceptorXML->appendChild($tipoIdReceptorXML);

            $numIdReceptorXML=$doc->createElement("NumeroIdentificacion", $comprobanteXML->Receptor->identificacion);
            $idReceptorXML->appendChild($numIdReceptorXML);
        $receptor->appendChild($idReceptorXML);

        if($comprobanteXML->Receptor->nombreComercial!=null)
        {
            $nomComercialReceptorXML=$doc->createElement("NombreComercial", $comprobanteXML->Receptor->nombreComercial);
            $receptor->appendChild($nomComercialReceptorXML);
        }

        if($comprobanteXML->Receptor->ubicacion!=null)
        {
            $ubiReceptorXML=$doc->createElement("Ubicacion");
            $descripUbiReceptorXML=$doc->createElement("Descripcion", $comprobanteXML->Receptor->ubicacion);
            $ubiReceptorXML->appendChild($descripUbiReceptorXML);

            $otrasSenasReceptorXML=$doc->createElement("OtrasSeñas",$comprobanteXML->Receptor->otrasSenas);
            $ubiReceptorXML->appendChild($otrasSenasReceptorXML);
            $receptor->appendChild($ubiReceptorXML);
        }

        if($comprobanteXML->Receptor->telefono!=null)
        {
            $telReceptorXML=$doc->createElement("Telefono");

            $codTelReceptorXML= $doc->createElement("CodigoPais", $comprobanteXML->Receptor->codigoTelefono);
            $telReceptorXML->appendChild($codTelReceptorXML);

            $numTelReceptorXML= $doc->createElement("NumeroTelefono", $comprobanteXML->Receptor->telefono);
            $telReceptorXML->appendChild($numTelReceptorXML);
            $receptor->appendChild($telReceptorXML);
        }

        if($comprobanteXML->Receptor->fax!=null)
        {
            $faxReceptorXML=$doc->createElement("Fax");
            $codFaxReceptorXML=$doc->createElement("CodigoFax", $comprobanteXML->Receptor->codigoFax);
            $faxReceptorXML->appendChild($codFaxReceptorXML);

            $numFaxReceptorXML=$doc->createElement("NumeroFax", $comprobanteXML->Receptor->fax);
            $faxReceptorXML->appendChild($numFaxReceptorXML);
            $receptor->appendChild($faxReceptorXML);
        }

        if ($comprobanteXML->Receptor->correoElectronico!=null)
        {
            $correoElectronicoReceptorXML=$doc->createElement("CorreoElectronico", $comprobanteXML->Receptor->correoElectronico);
            $receptor->appendChild($correoElectronicoReceptorXML);
        }

        #endregion
        // FIN RECEPTOR
        $condicionVentaXML=$doc->createElement("CondicionVenta", $comprobanteXML->condicionVenta);
        $root->appendChild($condicionVentaXML);

        if ($comprobanteXML->plazoCredito != null)
        {
            $plazoCreditoXML= $doc->createElement("PlazoCredito", $comprobanteXML->plazoCredito);
            $root->appendChild($plazoCreditoXML);
        }

        foreach ($comprobanteXML->medioPago as $medPago)
        {
            $medioPagoXML= $doc->createElement("MedioPago", $medPago->medioPago);
            $root->appendChild($medioPagoXML);
        }

        #region detalle

        if($comprobanteXML->LineaDetalle!=null)
        {

            $detalleServicioXML=$doc->createElement("DetalleServicio");
            $root->appendChild($detalleServicioXML);

            foreach ($comprobanteXML->LineaDetalle as $linea)
            {
                $lineaDetalleXML=$doc->createElement("LineaDetalle");

                $numeroLineaXML=$doc->createElement("NumeroLinea", $linea->numeroLinea);
                $lineaDetalleXML->appendChild($numeroLineaXML);

                $codigoXML = $doc->createElement("Codigo",$linea->codigo);
                $lineaDetalleXML->appendChild($codigoXML);

                foreach ($comprobanteXML->LineaDetalle->CodigoComercial as $codigoComercial)
                {
                    $codigoComercialXML = $doc->createElement("CodigoComercial");
                    $lineaDetalleXML->appendChild($codigoComercialXML);

                    $codigoComercialTipoXML = $doc->createElement("tipo",$codigoComercial->tipo);
                    $codigoComercialXML->appendChild($codigoComercialTipoXML);

                    $codComercialNumXML = $doc->createElement("numero",$codigoComercial->codigo);
                    $codigoComercialXML->appendChild($codComercialNumXML);
                }

                $cantidadXML = $doc->createElement("Cantidad", $linea->cantidad);
                $lineaDetalleXML->appendChild($cantidadXML);

                $unidadMedidaXML = $doc->createElement("UnidadMedida", $linea->unidadMedida);
                $lineaDetalleXML->appendChild($unidadMedidaXML);

                $unidadMedidaComercialXML = $doc->createElement("UnidadMedidaComercial", $linea->unidadMedidaComercial);
                $lineaDetalleXML->appendChild($unidadMedidaComercialXML);

                $detalleXML = $doc->createElement("Detalle", $linea->detalle);
                $lineaDetalleXML->appendChild($detalleXML);

                $precioUnitarioXML = $doc->createElement("PrecioUnitario", $linea->precioUnitario);
                $lineaDetalleXML->appendChild($precioUnitarioXML);

                $montoTotalXML = $doc->createElement("MontoTotal", $linea->montoTotal);
                $lineaDetalleXML->appendChild($montoTotalXML);

                foreach ($comprobanteXML->LineaDetalle->Descuento as $lineaDescuento)
                {
                    $descuentoXML = $doc->createElement("Descuento");
                    $lineaDetalleXML->appendChild($descuentoXML);

                    $montoDescuentoXML = $doc->createElement("MontoDescuento", $lineaDescuento->montoDescuento);
                    $descuentoXML->appendChild($montoDescuentoXML);

                    $naturalezaDescuento=$doc->createElement("NaturalezaDescuento", $lineaDescuento->naturalezaDescuento);
                    $descuentoXML->appendChild($naturalezaDescuento);
                }

                $subtotalXML = $doc->createElement("Subtotal", $linea->subtotal);
                $lineaDetalleXML->appendChild($subtotalXML);

                $baseImponibleXML=$doc->createElement("BaseImponible", $linea->baseImponible);
                $lineaDetalleXML->appendChild($baseImponibleXML);


                foreach ($comprobanteXML->LineaDetalle->Impuestos as $lineaImpuesto)
                {
                    $impuestoXML = $doc->createElement("Impuestos");
                    $lineaDetalleXML->appendChild($impuestoXML);

                    $impuestoCodXML = $doc->createElement("Codigo", $lineaImpuesto->codigo);
                    $impuestoXML->appendChild($impuestoCodXML);

                    $impuestoCodTarifaXML= $doc->createElement("CodigoTarifa", $lineaImpuesto->codigoTarifa);
                    $impuestoXML->appendChild($impuestoCodTarifaXML);

                    $impuestoTarifaXML=$doc->createElement("Impuesto", $lineaImpuesto->tarifa);
                    $impuestoXML->appendChild($impuestoTarifaXML);

                    $impuestoFactorIvaXML= $doc->createElement("FactorIVA", $lineaImpuesto->factorIVA);

                    $impuestoMontoXML=$doc->createElement("Monto", $lineaImpuesto->monto);
                    $impuestoXML->appendChild($impuestoMontoXML);

                    foreach ($comprobanteXML->LineaDetalle->Impuesto->Exoneracion as $lineaExoneracion)
                    {
                        $exoneracionXML = $doc->createElement("Exoneracion");
                        $impuestoXML->appendChild($exoneracionXML);

                        $exoneracionTipoDocXML = $doc->createElement("TipoDocumento", $lineaExoneracion->tipoDocumento);
                        $exoneracionXML->appendChild($exoneracionTipoDocXML);

                        $exoneracionNumDocXML=$doc->createElement("NumeroDocumento", $lineaExoneracion->numeroDocumento);
                        $exoneracionXML->appendChild($exoneracionNumDocXML);

                        $exoneracionNomInstitucionXML=$doc->createElement("NombreInstitucion", $lineaExoneracion->nombreInstitucion);
                        $exoneracionXML->appendChild($exoneracionNomInstitucionXML);

                        $exoneracionFechaEmisionXML=$doc->createElement("FechaEmision", $lineaExoneracion->fechaEmision);
                        $exoneracionXML->appendChild($exoneracionFechaEmisionXML);

                        $exoneracionPorcentajeExoXML=$doc->createElement("PorcentajeExoneracion", $lineaExoneracion->porcentajeExoneracion);
                        $exoneracionXML->appendChild($exoneracionPorcentajeExoXML);

                        $exoneracionMontoXML=$doc->createElement("MontoExoneracion", $lineaExoneracion->montoExoneracion);
                        $exoneracionXML->appendChild($exoneracionMontoXML);
                    }
                }
                if($comprobanteXML->LineaDetalle->Impuesto->Exoneracion!=null)
                {
                    $montoTotalLineaXML = $doc->createElement("MontoTotalLinea", $linea->subtotal + $linea->impuestoNeto);
                }
                else
                {
                    $montoTotalLineaXML = $doc->createElement("MontoTotalLinea", $linea->subtotal + $linea->Impuesto->monto);
                }
                $lineaDetalleXML->appendChild($montoTotalLineaXML);
                $detalleServicioXML->appendChild($lineaDetalleXML);
            }
        }
        #endregion

        #region otroCargos

        if ($comprobanteXML->OtroCargos != null)
        {
            $otrosCargosXML=$doc->createElement("OtrosCargos");
            $root->appendChild($otrosCargosXML);

            $otrosCargosTipoDocXML=$doc->createElement("TipoDocumento",$comprobanteXML->OtrosCargos->tipoDocumento);
            $otrosCargosXML->appendChild($otrosCargosTipoDocXML);

            $otrosCargosNumIdTerceroXML= $doc->createElement("NumeroIdentificacionTercero",$comprobanteXML->OtrosCargos->numeroIdentificacionTercero);
            $otrosCargosXML->appendChild($otrosCargosNumIdTerceroXML);

            $otrosCargosNomTerceroXML= $doc->createElement("NombreTercero",$comprobanteXML->OtrosCargos->nombreTercero);
            $otrosCargosXML->appendChild($otrosCargosNomTerceroXML);

            $otrosCargosDetalleXML= $doc->createElement("Detalle",$comprobanteXML->OtrosCargos->detalle);
            $otrosCargosXML->appendChild($otrosCargosDetalleXML);

            $otrosCargosPorcentajeXML= $doc->createElement("Porcentaje",$comprobanteXML->OtrosCargos->porcentaje);
            $otrosCargosXML->appendChild($otrosCargosPorcentajeXML);

            $otrosCargosMontoXML= $doc->createElement("MontoCargo",$comprobanteXML->OtrosCargos->montoCargo);
            $otrosCargosXML->appendChild($otrosCargosMontoXML);
        }

        #endregion

        #region ResumenFactura

        #endregion

        #region informacionReferencia

        if ($comprobanteXML->InformacionReferecias != null)
        {
            $infoReferenciaXML=$doc->createElement("InformacionReferencia");
            $root->appendChild($infoReferenciaXML);
            $infoRefTipoDocXML=$doc->createElement("TipoDocumento",$comprobanteXML->InformacionReferencia->tipoDoc);
            $infoReferenciaXML->appendChild($infoRefTipoDocXML);

            $infoRefNumXML=$doc->createElement("Numero",$comprobanteXML->InformacionReferencia->numero);
            $infoReferenciaXML->appendChild($infoRefNumXML);

            $infoRefFechaEmisionXML=$doc->createElement("FechaEmision",$comprobanteXML->InformacionReferencia->fechaEmision);
            $infoReferenciaXML->appendChild($infoRefFechaEmisionXML);

            $infoRefCodigoXML=$doc->createElement("Codigo",$comprobanteXML->InformacionReferencia->codigo);
            $infoReferenciaXML->appendChild($infoRefCodigoXML);

            $infoRefRazonXML=$doc->createElement("Razon",$comprobanteXML->InformacionReferencia->razon);
            $infoReferenciaXML->appendChild($infoRefRazonXML);
        }
        #endregion
        #region Otros

        if($comprobanteXML->Otros != null)
        {
            $otrosXML=$doc->createElement("Otros");
            $root->appendChild($otrosXML);

            $otroTextoXML= $doc->createElement("Texto",$comprobanteXML->Otros->otroTexto);
            $otrosXML->appendChild($otroTextoXML);

            $otroContenidoXML= $doc->createElement("OtroContenido",$comprobanteXML->Otros->otroContenido);
            $otrosXML->appendChild($otroContenidoXML);
        }
        #endregion

        $doc->save("comprobante.xml");
    }
}
