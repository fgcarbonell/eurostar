<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Input;
use App\Busqueda;
use App\Http\Controllers;

// Este Controlador permite dos funciones: Busqueda() y store()
class WeatherController extends Controller{
    // Esta función permite pasar a la vista los datos recuperados de la API para la ciudad elegida en el formulario
    // Al tiempo también llama a la función store que se halla definida en el mismo controlador
	public function Busqueda() {
		$ciudad = Input::get('ciudad');
        $this -> store($ciudad);
    	return view('resultados')->with('ciudad', $ciudad);
	}

    // La función store() crea un objeto Busqueda nuevo con la variable $donde que es la ciudad que guarda en la Base de Datos como última consulta. Nos servirá para posteriormente recuperar las últimas búsquedas.
	public function store($donde)
    {
        $busquedas = new Busqueda;
        $busquedas->name = $donde;
        $busquedas->save();
    }
}