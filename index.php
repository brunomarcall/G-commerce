<?php
require_once "vendor/autoload.php";
require_once PATH_APP."/config/rotas.php";


use App\Init;


$init = new Init($rotas);
?>