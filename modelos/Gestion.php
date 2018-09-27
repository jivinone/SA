<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Gestion
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombregestion,$slug)
	{
		$sql="INSERT INTO gestion (nombregestion,slug)
		VALUES ('$nombregestion','$slug')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idgestion,$nombregestion,$slug)
	{
		$sql="UPDATE gestion SET nombregestion='$nombregestion',slug='$slug' WHERE idgestion='$idgestion'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar gestion
	public function desactivar($idgestion)
	{
		$sql="UPDATE gestion SET condicion='0' WHERE idgestion='$idgestion'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar gestion
	public function activar($idgestion)
	{
		$sql="UPDATE gestion SET condicion='1' WHERE idgestion='$idgestion'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcategoria)
	{
		$sql="SELECT * FROM gestion WHERE idgestion='$idgestion'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM gestion";
		return ejecutarConsulta($sql);		
	}
}

?>