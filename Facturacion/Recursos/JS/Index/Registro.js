var codigoPostal,provincias=[], cantones=[], distritos=[], barrios=[];
var selectProvincia, selectCanton, selectDistrito, selectBarrio;

provincias=[{valProvincia:"01",Provincia:"San José"},{valProvincia:"02",Provincia:"Alajuela"},{valProvincia:"03",Provincia:"Cartago"},{valProvincia:"04",Provincia:"Heredia"},{valProvincia:"05",Provincia:"Guanacaste"},{valProvincia:"06",Provincia:"Puntarenas"},{valProvincia:"07",Provincia:"Limón"}]

async function getJson(){
response = await fetch('Recursos/JSON/CodigoPostal.json');
data = await response.json();
codigoPostal=data;
console.log(data)
}

function Vaciar(combobox){document.getElementById(combobox).innerHTML="";}

function CrearOpciones(val,desc)
{
  return "<option value='"+val+"'>"+desc+"</option>"
}

function BuscarDistrito()
{
  Vaciar("selectBarrio");
  var opciones="";
  distritos=[];
  cantones.forEach(element => {
    if (element.valCanton==selectCanton.value) distritos.push(element);
  });

  var listaDistritos=[];
  distritos.forEach(distrito => {
    if (! listaDistritos.includes(distrito.valDistrito))
    {
      listaDistritos.push(distrito.valDistrito);
      opciones+=CrearOpciones(distrito.valDistrito,distrito.Distrito)
    }
  });
  selectDistrito.innerHTML = opciones;
  console.log(distritos);
}
function BuscarBarrio()
{
  var opciones="";
  barrios=[];
  distritos.forEach(element => {
    if (element.valBarrio==selectDistrito.value) barrios.push(element);
  });

  barrios.forEach(barrio => {
      opciones+=CrearOpciones(barrio.valBarrio,barrio.Barrio)

  });
  selectBarrio.innerHTML = opciones;
}


function BuscarCanton()
{
    Vaciar("selectDistrito");
    Vaciar("selectBarrio");
    var opciones="";
    cantones=[];
    codigoPostal.forEach(element => {
      if (element.valProvincia==selectProvincia.value) cantones.push(element);
    });

    var listaCantones=[];
    cantones.forEach(canton => {
      if (! listaCantones.includes(canton.valCanton))
      {
        listaCantones.push(canton.valCanton);
        opciones+=CrearOpciones(canton.valCanton,canton.Canton)
      }
    });
    selectCanton.innerHTML = opciones;
}

function LlenarProvincia()
{
    var opciones="";
    provincias.forEach((opc) =>
    {
      opciones+=CrearOpciones(opc.valProvincia,opc.Provincia)
    });

    selectProvincia.innerHTML = opciones;
}



window.addEventListener("load", (event) =>
{
    getJson();

    selectProvincia= document.getElementById("selectProvincia");
    selectCanton= document.getElementById("selectCanton");
    selectDistrito= document.getElementById("selectDistrito");
    selectBarrio= document.getElementById("selectBarrio");

    selectProvincia.addEventListener('change', BuscarCanton);
    selectCanton.addEventListener('change', BuscarDistrito);
    selectDistrito.addEventListener('change', BuscarBarrio);

    LlenarProvincia();

});
