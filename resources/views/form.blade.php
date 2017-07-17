<!-- Vista del buscador -->
<div style="display:block;text-align: center;">
<div style="display:inline-block;">
<h3>Buscar una ciudad</h3>
{{ Form::open(['route' => 'Busqueda', 'method' => 'GET', 'role' => 'form']) }}
	{{ Form::text('ciudad', null, ['placeholder'=>'Ingrese una ciudad']) }}
	       <p>
	           <input type="submit" value="Enviar" class="btn btn-success">
	       </p> 
{{ Form::close()}}
</div>
</div>