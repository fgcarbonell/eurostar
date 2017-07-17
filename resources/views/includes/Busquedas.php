<!-- Vista de las 10 ultimas búsquedas en la página de resultados -->
<div>
<h3>10 ÚLTIMAS BÚSQUEDAS</h3>

<?php
use App\Busqueda;

//Función que devuelve las 10 últimas búsquedas realizadas en la aplicación
$busquedas = App\Busqueda::all()->sortByDesc('id')->take(10);
	foreach ($busquedas as $busquedas) {
	    echo $busquedas->name;
	    echo '&nbsp;&nbsp;';
	};
?>
</div>
