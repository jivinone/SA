<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Catalogo
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($idgestion,$decano,$directoracademico)
	{
		$sql="INSERT INTO catalogo (idgestion,decano, directoracademico)
		VALUES ('$idgestion','$decano','directoracademico')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idcatalogo,$decano,$directoracademico)
	{
		$sql="UPDATE catalogo SET decano='$decano',directoracademico='$directoracademico' WHERE idcatalogo='$idcatalogo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar gestion
	public function desactivar($idcatalogo)
	{
		$sql="UPDATE catalogo SET condicion='0' WHERE idcatalogo='$idcatalogo'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar gestion
	public function activar($idcatalogo)
	{
		$sql="UPDATE catalogo SET condicion='1' WHERE idcatalogo='$idcatalogo'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcatalogo)
	{
		$sql="SELECT * FROM catalogo WHERE idcatalogo='$idcatalogo'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM catalogo";
		return ejecutarConsulta($sql);		
	}
}

?>