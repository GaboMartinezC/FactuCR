document.addEventListener('DOMContentLoaded',function(){
    cargarReceptores();
});

var btnGuardar=document.getElementById("btnGuardar");
btnGuardar.addEventListener('click',function(){
    agregarReceptor();
});

function buscarReceptor() {
    // Obtén el valor del input de búsqueda
    var input = document.getElementById("buscarInput");
    var filter = input.value.toUpperCase();

    // Obtén la tabla y todas sus filas
    let table = document.getElementById("myTable");
    let tr = table.getElementsByTagName("tr");

    // Recorre todas las filas, excepto la primera que es la cabecera
    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td")[2]; // Obtén la tercera columna
        if (td) {
            let txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = ""; // Muestra la fila
            } else {
                tr[i].style.display = "none"; // Oculta la fila
            }
        }
    }
}

function validarCampos(){
    let inputs = {
        tipoEntidad: document.getElementById("tipoEntidad").value,
        identificacion: document.getElementById("identificacion").value,
        nombreComercial: document.getElementById("identificacion").value,
        nombre: document.getElementById("nombre").value,
        ubicacion: document.getElementById("ubicacion").value,
        telefono: document.getElementById("telefono").value,
        fax: document.getElementById("fax").value,
        correo: document.getElementById("correo").value
    };
    let estado = true;
    if(!(inputs.tipoEntidad !== "")){
        document.getElementById("tipoEntidad").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("tipoEntidad").style.border = ' 1px solid #00000030';
    }

    if(inputs.identificacion === "" || /[a-zA-Z]/.test(inputs.identificacion)){
        document.getElementById("identificacion").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("identificacion").style.border = ' 1px solid #00000030';
    }

    if(inputs.nombre === "" || /\d/.test(inputs.nombre)){
        document.getElementById("nombre").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("nombre").style.border = ' 1px solid #00000030';
    }

    if(inputs.ubicacion === ""){
        document.getElementById("ubicacion").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("ubicacion").style.border = ' 1px solid #00000030';
    }

    if(inputs.telefono === "" || /[a-zA-Z]/.test(inputs.telefono)){
        document.getElementById("telefono").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("telefono").style.border = ' 1px solid #00000030';
    }

    if(inputs.fax === "" || /[a-zA-Z]/.test(inputs.fax)){
        document.getElementById("fax").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("fax").style.border = ' 1px solid #00000030';
    }

    if(inputs.correo === "" || !(inputs.correo.includes('@')) || !(inputs.correo.includes('.com'))){
        document.getElementById("correo").style.border = '2px solid #ff0000';
        estado = false;
    }
    else{
        document.getElementById("correo").style.border = ' 1px solid #00000030';
    }

    if(estado){
        return true;
    }
    return estado;
}
function limpiarCampos(){
    var inputTipoIdentificacion = document.getElementById("tipoEntidad");
    var inputIdentificacion = document.getElementById("identificacion");
    var inputnombreComercial = document.getElementById("nombreComercial");
    var inputnombre = document.getElementById("nombre");
    var inputUbicacion = document.getElementById("ubicacion");
    var inputTelefono = document.getElementById("telefono");
    var inputFax = document.getElementById("fax");
    var inputCorreo = document.getElementById("correo");
    
    inputTipoIdentificacion.value="";
    inputIdentificacion.value="";
    inputnombreComercial.value="";
    inputnombre.value="";
    inputUbicacion.value="";
    inputTelefono.value="";
    inputFax.value="";
    inputCorreo.value="";
}

function agregarReceptor(){
    if(!validarCampos()) return false
    var inputTipoIdentificacion = document.getElementById("tipoEntidad").value;
    var inputIdentificacion = document.getElementById("identificacion").value;
    var inputnombreComercial = document.getElementById("nombreComercial").value;
    var inputnombre = document.getElementById("nombre").value;
    var inputUbicacion = document.getElementById("ubicacion").value;
    var inputTelefono = document.getElementById("telefono").value;
    var inputFax = document.getElementById("fax").value;
    var inputCorreo = document.getElementById("correo").value;

    var receptorNuevo=
    {
        tipoIdentificacion:inputTipoIdentificacion, 
        identificacion:inputIdentificacion, 
        nombreComercial:inputnombreComercial,
        nombre:inputnombre,
        ubicacion:inputUbicacion,
        telefono:inputTelefono,
        fax:inputFax,
        correo:inputCorreo
    };

    var receptores=[];

    var lsExiste=JSON.parse(localStorage.getItem('receptores'));

    if(lsExiste===null)
    {
        receptores.push(receptorNuevo);
        //setItem es el push para el local storage sintaxis:('nombre con el que se va a guardar en el ls, JSON.stringify(convierte el array en un json)')
        localStorage.setItem('receptores',JSON.stringify(receptores));
        
    }
    else
    {
        //parse es para convertir un valor 
        var lsListaReceptores=JSON.parse(localStorage.getItem('receptores'));
        var verExistencia=false;
        lsListaReceptores.forEach(receptor => {
            if(receptor.identificacion===receptorNuevo.identificacion)
            {
                verExistencia=true;
                return console.log("ya agregado");
            }
        });
        
        if(!verExistencia)
        {
            lsListaReceptores.push(receptorNuevo);
            localStorage.setItem('receptores',JSON.stringify(lsListaReceptores));
        }
    }    
    limpiarCampos();
    cargarReceptores();
}

function cargarModal(id) {

    var lsListaReceptores=JSON.parse(localStorage.getItem('receptores'));

    var elementoActualizar = lsListaReceptores[id];

    document.getElementById("tipoEntidadA").value = elementoActualizar.tipoIdentificacion;
    document.getElementById("identificacionA").value = elementoActualizar.identificacion;
    document.getElementById("nombreComercialA").value = elementoActualizar.nombreComercial;
    document.getElementById("nombreA").value = elementoActualizar.nombre;
    document.getElementById("ubicacionA").value = elementoActualizar.ubicacion;
    document.getElementById("telefonoA").value = elementoActualizar.telefono;
    document.getElementById("faxA").value = elementoActualizar.fax;
    document.getElementById("correoA").value = elementoActualizar.correo;

    var btnActualizar=document.getElementById("guardarCambios");
    btnActualizar.addEventListener('click',function(){
        actualizarReceptor(id);
    });
}

function actualizarReceptor(id){
    {
        var inputTipoIdentificacion = document.getElementById("tipoEntidadA").value;
        var inputIdentificacion = document.getElementById("identificacionA").value;
        var inputnombreComercial = document.getElementById("nombreComercialA").value;
        var inputnombre = document.getElementById("nombreA").value;
        var inputUbicacion = document.getElementById("ubicacionA").value;
        var inputTelefono = document.getElementById("telefonoA").value;
        var inputFax = document.getElementById("faxA").value;
        var inputCorreo = document.getElementById("correoA").value;

        if(inputTipoIdentificacion == "" || inputIdentificacion == "" || inputnombreComercial == "" || inputnombre == "" || inputUbicacion == "" || inputTelefono == "" || inputFax == "" || inputCorreo == "")
        {
            alert("Rellene todos los campos");
        }else
        {
            var receptorActualizar=
            {
                tipoIdentificacion:inputTipoIdentificacion,
                identificacion:inputIdentificacion,
                nombreComercial:inputnombreComercial,
                nombre:inputnombre,
                ubicacion:inputUbicacion,
                telefono:inputTelefono,
                fax:inputFax,
                correo:inputCorreo
            };
            var lsListaReceptores=JSON.parse(localStorage.getItem('receptores'));
            lsListaReceptores[id] = receptorActualizar;
            localStorage.setItem('receptores',JSON.stringify(lsListaReceptores));
            cargarReceptores();
        }
    }
}

function cargarReceptores() {
    var lsListaReceptores=JSON.parse(localStorage.getItem('receptores'));
    var tablaClientes=document.getElementById("tablaClientes");
    tablaClientes.innerHTML="";
    lsListaReceptores.forEach(receptor=>{
        tablaClientes.innerHTML+=
        `
            <tr>                
                <td scope="row">${receptor.tipoIdentificacion}</td>
                <td>${receptor.identificacion}</td>
                <td>${receptor.nombreComercial}</td>
                <td>${receptor.nombre}</td>
                
                <td>
                    <div id="botonActualizar" class="btn btn-primary" tabindex="0" onclick="cargarModal(${lsListaReceptores.indexOf(receptor)})" data-bs-toggle="modal" data-bs-target="#modalEditar">
                        <img src="Recursos/SVG/Iconos/IconoActualizar.svg" alt="Icono de actualizar">
                    </div>
                </td>
          
            </tr>
        `
    })

}