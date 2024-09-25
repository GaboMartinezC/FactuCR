//NOTA: La función de generar el registro completo lo que hace es borrar el contenido del local storage
function RecolectarDatosEncabezado() {
    
    let estado = true;
    let stringCheckbox;
    for (let i = 1; i <= 6; i++)
    {
        let estadoChecked = false;
        stringCheckbox = 'metodoPago' + i;
        document.getElementById(stringCheckbox);
        if (stringCheckbox.checked)
            estadoChecked = true;
        if (i == 6 && !estadoChecked)
            estado = false;
        else
            SolicitarFormulario('encabezadoFacturaElectronica', 'formLineas');
    }
}

function SolicitarFormulario(actual, solicitado) {
    document.getElementById(actual).style.display = 'none';
    document.getElementById(solicitado).style.display = 'block';
}

function ValidarFormulario() {
    return 0;
}

//Renderiza en el resumen de cada línea los detalles de esta
function RenderizarDetalleResumen() {
    let montoTotal = 0;
    let subTotal = 0;
    let montoTotalLinea = 0;
    let lineaObj = {
        codigoCabys: document.getElementById('codCabys').value,
        descripcionLinea: document.getElementById('descripcionFrm').value,
        tipoCodigo: document.getElementById('tipoCod').value,
        codigo: document.getElementById('codigoEmpresa').value,
        udMedida: document.getElementById('udMedida').value,
        udMedidaComercial: document.getElementById('udMedidaComercial').value,
        cantidad: document.getElementById('cantidadFrm').value,
        precio: document.getElementById('precioFrm').value,
        descuento: [],
        impuesto: []
    };
    console.log(lineaObj);
    document.getElementById('codCabysResumen').innerHTML = lineaObj.codigoCabys;
    document.getElementById('descripcionResumen').innerHTML = lineaObj.descripcionLinea;
    document.getElementById('codEmpresaResumen').innerHTML = lineaObj.codigo;
    document.getElementById('udMedidaResumen').innerHTML = lineaObj.udMedidaComercial;
    document.getElementById('cantidadResumen').innerHTML = lineaObj.udMedidaComercial;
    document.getElementById('precioResumen').innerHTML = lineaObj.precio;
    //Según se trabajen descuentos
    document.getElementById('precioDescuentoResumen').innerHTML = '';
    document.getElementById('precioDescuentoResumen').innerHTML = '';
}

function Limpiar() {
    document.getElementById('codCabys').value = null;
    document.getElementById('descripcionFrm').value = null;
    document.getElementById('tipoCod').value = null;
    document.getElementById('codigoEmpresa').value = null;
    document.getElementById('udMedida').value = null;
    document.getElementById('cantidadFrm').value = null;
    document.getElementById('precioFrm').value = null;
}

//Agrega una linea al detalle de factura
function AgregarLineaLS() {
    let arregloLineasFactura = [];
    let lineaObj = {
        codigoCabys: document.getElementById('codCabys').value,
        descripcionLinea: document.getElementById('descripcionFrm').value,
        tipoCodigo: document.getElementById('tipoCod').value,
        codigo: document.getElementById('codigoEmpresa').value,
        udMedida: document.getElementById('udMedida').value,
        udMedidaComercial: document.getElementById('udMedidaComercial').value,
        cantidad: document.getElementById('cantidadFrm').value,
        precio: document.getElementById('precioFrm').value,
        descuento: [],
        impuesto: []
    };
    let stringLineaResumen = `<hr><div class="row"><div class="col-md-4"><p class="fTexto" style="font-size: medium;">Descripción</p><p>${lineaObj.descripcionLinea}</p></div><div class="col-md-4"><p class="fTexto" style="font-size: medium;">Cantidad</p><p>${lineaObj.cantidad}</p></div><div class="col-md-4"><p class="fTexto" style="font-size: medium;">Precio</p><p>${lineaObj.precio}</p></div></div><div class="row" style="transform: scale(0.8);"><div class="col-6" style="display: flex; justify-content: center;"><button class="btn btn-danger" style="width: 100%;" onclick="RemoverLinea(${1});"><span>Eliminar</span></button></div><div class="col-6" style="display: flex; justify-content: center;"><button class="btn btn-primary" style="width: 100%;"><span>Editar</span></button></div></div>`
    console.log(lineaObj);
    console.log(arregloLineasFactura);
    if (localStorage.getItem('arregloLineasFactura') === null) {
        arregloLineasFactura.push(lineaObj);
        localStorage.setItem('arregloLineasFactura', JSON.stringify(arregloLineasFactura));
    } else {
        arregloLineasFactura = JSON.parse(sessionStorage.getItem('arregloLineasFactura'));
        //arregloLineasFactura.push(lineaObj);

    }
    let divResumen = document.getElementById('lineasContenedor');
    divResumen.innerHTML += stringLineaResumen;
    Limpiar();
}

//Función para transicionar entre forms
function Cambiar(btn, accion) {
    RenderizarDetalleResumen();
    let btnAct;
    if (accion)
        btnAct = btn - 1;
    else
        btnAct = btn + 1;

    if (accion && btn == 1) {
        btnAct = 3;
        //Llama a una función que almacena en local storage la línea actual
        AgregarLineaLS();
    }
    //Cambia los display
    document.getElementById('registro' + btn).style.display = 'block';
    document.getElementById('registro' + btnAct).style.display = 'none';
    //Cambia las elipses
    document.getElementById('elipse' + btn).style.backgroundColor = '#41684E';
    document.getElementById('elipse' + btnAct).style.backgroundColor = '#FEFEFE';
}

$("#receptorFiltroInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tablaDocumentosAnteriores tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
