<!-- Vista del buscador en la página de resultados -->
<h3>Buscar una ciudad</h3>
{{ Form::open(['route' => 'Busqueda', 'method' => 'GET', 'role' => 'form']) }}
	{{ Form::text('ciudad', null, ['placeholder'=>'Ingrese una ciudad']) }}
	       <p>
	           <input type="submit" value="Enviar" class="btn btn-success">
	       </p> 
{{ Form::close()}}
