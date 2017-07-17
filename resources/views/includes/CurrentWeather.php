<?php
    /**
     * OpenWeatherMap-PHP-API — A php api to parse weather data from http://www.OpenWeatherMap.org .
     *
     * @license MIT
     *
     * Please see the LICENSE file distributed with this source code for further
     * information regarding copyright and licensing.
     *
     * Please visit the following links to read about the usage policies and the license of
     * OpenWeatherMap before using this class:
     *
     * @see http://www.OpenWeatherMap.org
     * @see http://www.OpenWeatherMap.org/terms
     * @see http://openweathermap.org/appid
     */
    use Cmfcmf\OpenWeatherMap;
    use Cmfcmf\OpenWeatherMap\Exception as OWMException;
    use App\Busqueda;

    require_once __DIR__ . '\bootstrap.php';

    $cli = false;
    $lf = '<br>';
    if (php_sapi_name() === 'cli') {
        $lf = "\n";
        $cli = true;
    }
    //Funcionalidades del parser para futuras actualizaciones del API que discriminen el lenguaje a presentar y las unidades de las métricas a presentar.
    // Language of data (try your own language here!):
    $lang = 'es';
    // Units (can be 'metric' or 'imperial' [default]):
    $units = 'metric';

    // Genera un nuevo objeto OpenWeatherMap con la ApiKey que definamos.
    // Este objeto servirá posteriormente para recuperar los datos de la API parametrizándolo con el nombre de la ciudad a consultar, las unidades a emplear en las métricas y el lenguaje de los datos a devolver.
    $owm = new OpenWeatherMap();
    $owm->setApiKey('00cdb84394763a3d9474b45f6d2d2626');

    // Devuelve los datos que necesitamos presentar de la API cogiendo como parámetro de consulta la ciudad elegida en el formulario.
    // El try & catch sirve para manejar los posibles errores que genere la aplicación, p.ej. una ciudad que no exista ('Maaaaadrdrid')
    try {
        $weather = $owm->getWeather(-1, $units, $lang);
        echo $owm->getRawWeatherData($ciudad, $units, $lang, null, 'html');
    } catch (OWMException $e) {
        echo 'OpenWeatherMap exception: '.$e->getMessage().' (Code '.$e->getCode().').';
        echo $lf;
    } catch (\Exception $e) {
        echo 'General exception: '.$e->getMessage().' (Code '.$e->getCode().').';
        echo $lf;
    }
?>  	