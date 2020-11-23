<?php namespace App\Controllers;

use App\Models\Modeloanimales;

class RegistroController extends BaseController
{
	public function index()
	{
		return view('vistaRegistro');
	}

	public function registrar(){

		$nombre=$this->request->getPost("nombre");
		$edad=$this->request->getPost("edad");
		$tipoanimal=$this->request->getPost("tipoanimal");
		$descripcion=$this->request->getPost("descripcion");
		$comida=$this->request->getPost("comida");
		$foto=$this->request->getPost("foto");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"tipoanimal"=>$tipoanimal,
			"descripcion"=>$descripcion,
			"comida"=>$comida,
			"foto"=>$foto
		);

		$modeloAnimales= new Modeloanimales();

		try{
			$modeloAnimales->insert($datosEnvio);
			
			$mensaje="Animal registrado con exito. Ver listado de registros ";
			return redirect()->to(base_url("public/"))->with('mensaje',$mensaje);


		}catch(\Exception $error){
			echo($error->getMessage());
		}
	}

	//--------------------------------------------------------------------

}