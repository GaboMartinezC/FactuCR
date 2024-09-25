<?php
class EstudianteM 
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();
        
        $sql="SELECT * FROM ESTUDIANTE";
        $resultado = $conexion->Ejecutar($sql);
        
        if (mysqli_num_rows($resultado) > 0)
        {
            while($fila= $resultado->fetch_assoc() )
            {
                $e= new Estudiante();
                $e->setId($fila["ID"]);
                $e->setCedula($fila["CEDULA"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setApellido1($fila["APELLIDO1"]);
                $e->setApellido2($fila["APELLIDO2"]);
                $e->setCorreo($fila["CORREO"]);
                $e->setTelefono($fila["TELEFONO"]);
                $e->setPass($fila["PASS"]);
                $e->setFechaNacimiento($fila["FECHANACIMIENTO"]);
                $e->setEstado($fila["ESTADO"]);
                $todos[]=$e;
            }
        }
        else
            $todos=null;
        $conexion->Cerrar();
        
        return $todos;
    }
    
    function BuscarID($id)
    {
        $e=new Estudiante();
        $conexion= new Conexion();
        
        $sql="SELECT * FROM ESTUDIANTE WHERE ID=$id";
        $sql="SELECT * FROM ESTUDIANTE";

        
        if (mysqli_num_rows($resultado) > 0)
        {
            while($fila=$resultado->fecth_assoc())
            {
                $e= new Estudiante();
                $e->setId($fila["ID"]);
                $e->setCedula($fila["CEDULA"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setApellido1($fila["APELLIDO1"]);
                $e->setApellido2($fila["APELLIDO2"]);
                $e->setCorreo($fila["CORREO"]);
                $e->setTelefono($fila["TELEFONO"]);
                $e->setPass($fila["PASS"]);
                $e->setFechaNacimiento($fila["FECHANACIMIENTO"]);
                $e->setEstado($fila["ESTADO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        
        return $e;
        
    }
}
