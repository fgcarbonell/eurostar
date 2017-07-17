#
Este proyecto es para una prueba de selección.

<strong>OBJETIVOS</strong>
<ol>
<li>Obtener datos de la API de http://openweathermap.org</li>
<li>Poder obtener datos de la API introduciendo una ciudad en un formulario o bien eligiéndola en un desplegablede opciones predefinidas.</li>
<li>Mostrar últimas busquedas realizadas</li>
</ol>
<strong>ESTRATEGIA</strong>
Para abordar el problema en el framework de Laravel ha habido que emplear diferentes estrategias que comento a continuación.<br>
<ul><li>Para la parte de la API se ha empleado un parser de la API que ha habido que modificar en varios puntos para dar la funcionalidad requerida para la aplicación. El parser se obtiene de aquí: https://github.com/cmfcmf/OpenWeatherMap-PHP-Api.
</li>
<li>Para la parte del buscador:
- Por una parte se ha realizado un formulario que permite consultar en la API, cualquier ciudad del mundo.
- Por otra parte se ha realizado otro formulario con búsquedas predefinidas de algunas ciudades de ejemplo (como prueba conceptual).
(Los resultados se muestran en una vista aparte de resultados)
</li>
<li>Para la parte de guardar las búsquedas se ha empleado la base de datos como soporte, guardando las búsquedas que se realizan en una tabla que contiene un ID de búsqueda y la cadena correspondiente a la ciudad a buscar.
En los resultados se muestran las 10 últimas búsquedas como prueba conceptual del funcionamiento.
</li>
</ul>
<strong>INSTALACIÓN</strong>  
<ol>
<li>Instalar XAMPP y activar MySQL y PHP</li>
<li>Descargar el ZIP con el contenido del proyecto</li>
<li>Descomprimir el contenido del ZIP en la carpeta C:/Xampp/htdocs/eurostar</li>
<li>Abrir un navegador con la URL "localhost" y en PhpMyadmin importar la BBDD que está en la carpeta del proyecto llamada Backup BBDD (eurostar.sql) a una base de datos vacía que hallamos creado.</li>
<li>En el archivo llamado .env, configurar el nombre, usuario y password de la base de datos que hallamos creado</li>
<li>Abrir una pestaña de navegador y escribir localhost/eurostar/public</li>
</ol>
