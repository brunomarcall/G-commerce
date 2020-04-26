<?php
namespace App;

class Init {

    private $rotas;

    public function __construct(array $rotas){
        $this->rotas = $rotas;

        $segmentos = $this->getSegmentosUrl();

        $this->processarRota($segmentos);
    }

    private function processarRota(string $segmentos){
        foreach($this->rotas as $rota){
           if($segmentos == $rota['rotas']){
            //var_dump($rota);
            
                $nomeController = $rota['controller'];
                $objController = new $nomeController;

                if(method_exists($objController, $rota['metodo'])){
                    $nomeMetodo = $rota['metodo'];
                    $objController->$nomeMetodo();
                    $controleExiste = true;
                    break;
                }
           }
        }
        if(empty($controleExiste)){
            $this->lancar404();
        }
    }

    private function getSegmentosUrl(){
        $segmentosString = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        
        $segmentosArray = explode("/", $segmentosString);

        foreach($segmentosArray as $indice => $valor){
            if(empty($valor)){
                unset($segmentosArray[$indice]);
            }
        }
        
        array_shift($segmentosArray);
        
        $segmentosString = implode("/", $segmentosArray);

        return $segmentosString;
    }

    private function lancar404(){
        header("Location: ". BASE_URL . "404");
    }

}
?>