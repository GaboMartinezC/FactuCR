document.addEventListener('DOMContentLoaded',function (){
    if(localStorage.length>0){
        cargarFavs();
    }
});

function formateoInput(input){
    const letras={
        'á': 'a', 'é': 'e', 'í': 'i', 'ó': 'o', 'ú': 'u',
        'Á': 'A', 'É': 'E', 'Í': 'I', 'Ó': 'O', 'Ú': 'U'
    };
    return input.toLowerCase().replace(/[áéíóúÁÉÍÓÚ]/g, match=> letras[match]);
}
var btnBuscar = document.getElementById('btnBuscar');
btnBuscar.addEventListener('click',()=>{
    var input=document.getElementById('inputBuscar').value;
    var inputFormateado=formateoInput(input);
    
    const url="https://api.hacienda.go.cr/fe/cabys?q=";
    if(!input=="")
    {
        fetch(url+inputFormateado)
            .then(response=>{
                if(!response.ok){
                    throw new Error('Error: ${response.status}');
                }
                return response.json();
            })
            .then(datos => {
                cargarTabla(datos);            
            })
            .catch(error => {
                console.error('Error en la busqueda del producto. Error:', error);
            });
    }else{
        document.getElementById('tablaDatos').innerHTML="";
    }
    }
);

function cargarTabla(datos){
    document.getElementById('tablaDatos').innerHTML="";
    var tabla= document.getElementById('tablaDatos');
    datos.cabys.forEach(elemento=>{
        tabla.innerHTML+=
        `
        <tr>
            <th scope="row">${elemento.codigo}</th>
            <td>${elemento.descripcion}</td>
            <td>${elemento.impuesto}%</td>
            <td><i class="bi bi-star" onclick="agregarFav('${elemento.codigo}','${elemento.descripcion}')"></i></td>
        <tr>
        `
    })
}

function agregarFav(codigo,descripcion){
    let nuevoFav ={cod:codigo, desc:descripcion};
    var productosFavs=[];
    var lsExiste=JSON.parse(localStorage.getItem('productosFavs'));

    if(lsExiste==null){       
        productosFavs.push(nuevoFav);
        localStorage.setItem('productosFavs',JSON.stringify(productosFavs));
    }
    else
    {
        var lsListaFavs=JSON.parse(localStorage.getItem('productosFavs'));
        if(lsListaFavs.length<1)
        {
            productosFavs.push(nuevoFav);
            localStorage.setItem('productosFavs',JSON.stringify(productosFavs));
            cargarFavs();
        }
        else
        {
            var lsListaFavs=JSON.parse(localStorage.getItem('productosFavs'));
            var enListaFav = false;
            lsListaFavs.forEach(producto=>{
            if(producto.cod===nuevoFav.cod){
                enListaFav=true;
                return console.log("Este producto ya esta en la lista de favoritos");
                
            }})
            if(!enListaFav){                
                var lsListaFavs=JSON.parse(localStorage.getItem('productosFavs'));
                lsListaFavs.push(nuevoFav);
                localStorage.setItem('productosFavs',JSON.stringify(lsListaFavs));
            }
            cargarFavs();
        }
    }
    cargarFavs();
}

function cargarFavs(){
    var listaFavs=document.getElementById('listaFavs');
    var productosFavs=JSON.parse(localStorage.getItem('productosFavs'));
    listaFavs.innerHTML='';  
    var i=0;
    productosFavs.forEach(producto=>{        
        listaFavs.innerHTML+=
        `
        <div class="col-lg-11 pb-1 bg-white rounded-4 border border-dark border-opacity-25 mb-1">
            <div class="row px-2 py-2 pe-0">
                <div class="col-md-12">
                    <span class="fTexto">${producto.desc}</span><br/><span class="fTexto"> ${producto.cod}</span>
                </div>
                <div class="col-md-12 col-sm-12 d-flex justify-content-end">
                    <div class="d-flex justify-content-center align-items-center ">
                        <div id="botonPlantilla2" class="d-flex gap-2 py-1 mt-2 btn btn-primary rounded-pill" onclick="eliminarFavs(${i})" tabindex="0">
                            <img src="Recursos/SVG/Iconos/IconoCerrar.svg" alt="Icono de cerrar">
                            <span> Favorito</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `
        i++;
    })
}

function eliminarFavs(i){
    var lsListaFavs= JSON.parse(localStorage.getItem('productosFavs'));
    lsListaFavs.splice(i,1);
    localStorage.setItem('productosFavs',JSON.stringify(lsListaFavs));
    cargarFavs();
}