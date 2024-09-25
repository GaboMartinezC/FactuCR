async function Diccionario(metodo) 
{

    const request = new Request("Controlador/UtilidadesControlador.php", {
        method: "POST",
        body: JSON.stringify({metodo:metodo}),
    });
    const response = await fetch(request);
    const data = await response.json();
    console.log(data);
    return data;
}

