<?php namespace App\Controllers;

use App\Models\Modelolistado;

class ListadoController extends BaseController
{
	public function index()
	{
		return view('vistaListado');
	}
	
	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("animales"=>$datosConsultados);

		return view('vistaListado',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

	public function eliminar($id){
		
		$modeloListado=new ModeloListado();

		try{

			$modeloListado->where('id',$id)->delete();
			
			$mensaje="Ups! Has eliminado un registro";
			return redirect()->to(base_url("public/animales/listado"))->with('mensaje',$mensaje);

			
		}catch(\Exception $error){

			echo($error->getMessage());
		}

	}

	public function editar($id){

		$nombre=$this->request->getPost("nombreEditar");
		$descripcion=$this->request->getPost("descripcionEditar");
		$edad=$this->request->getPost("edadEditar");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"edad"=>$edad
		);

		$modeloListado= new Modelolistado();

		try{
			
			$modeloListado->update($id,$datosEnvio);
			
			$mensaje="Que bien, los datos se han actualizado con exito!";
			return redirect()->to(base_url("public/animales/listado"))->with('mensaje',$mensaje);


		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

}