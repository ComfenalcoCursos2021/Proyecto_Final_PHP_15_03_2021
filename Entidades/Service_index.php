<?php

    class Service_index implements Mensajes,Plantilla{
        static $serviceIndex; 
        public $plantilla;
        public function __construct(){
            $this->plantilla['url'] = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".explode("/", $_SERVER['REQUEST_URI'])[1]."/";
        }
        static public function getInstance(){
            if(!(self::$serviceIndex instanceof self)){
                self::$serviceIndex = new Service_index();
            }
            return self::$serviceIndex; 
        } 
        public function nombreMenu(){
            $this->plantilla = <<<FIN
            <span class="font-weight-bold">{$this::service['NombreMenu']['PrimerNombre']}</span> {$this::service['NombreMenu']['SegundoNombre']}
FIN;
            return $this->plantilla;
        }
        public function Menus(){
            $this->plantilla['PC'] = "";
            $this->plantilla['Movil'] = "";
            foreach ($this::service['Menus']['PC'] as $key => $value) {
                $this->plantilla['PC'] .= <<<FIN
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{$this->plantilla['url']}{$value}">{$key}</a>
                    </li>
FIN;
            }
            foreach ($this::service['Menus']['Movil'] as $key => $value) {
                $this->plantilla['Movil'] .= <<<FIN
                    <li class="mb-5">
                        <a href="{$this->plantilla['url']}{$value}" class="text-decoration-none display-4 text-light">{$key}</a>
                    </li>
FIN;
            }
        return json_encode($this->plantilla, JSON_PRETTY_PRINT);
        }
        public function SectionIndex(){
            $this->plantilla['Section'] = "";
            $this->plantilla['Imagenes'] = "";
            foreach ($this::service['sectionIndex']["Descripcion"] as $key => $value) {
                switch ($key) {
                    case 'Titulo':
                        $this->plantilla['Section'] .= <<<FIN
                            <h1 class="mb-3">{$value}</h1>
FIN;
                        break;
                    case 'Parrafo':
                        $this->plantilla['Section'] .= <<<FIN
                            <p class="lead mb-3">{$value}</p>
FIN;
                        break;
                    case 'Ver Mas':
                        $this->plantilla['Section'] .= <<<FIN
                            <a href="{$this->plantilla['url']}{$value}" class="btn btn-primary">{$key}</a>
FIN;
                        break;
                    default:
                        $this->plantilla['Section'] .= <<<FIN
                        Falta plantilla de html para la opcion  {$key}
FIN;
                        break;
                }

            }
            foreach ($this::service['sectionIndex']["Imagenes"] as $key => $value) {
                if($key!=0){
                    $this->plantilla['Imagenes'] .= <<<FIN
                    <div class="carousel-item">
                        <h1 class="slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">{$value["Titulo"]}</h1>
                        <img class="d-block w-100" src="{$value["Foto"]}" alt="{$value["Parrafo"]}" data-toggle="tooltip" data-placement="left" title='{$value["Parrafo"]}'>
                    </div>
FIN;
                }else{
                    $this->plantilla['Imagenes'] .= <<<FIN
                    <div class="carousel-item active">
                        <h1 class="slide-number display-4 position-absolute text-light font-weight-bold d-none d-sm-block">{$value["Titulo"]}</h1>
                        <img class="d-block w-100" src="{$value["Foto"]}" alt="{$value["Parrafo"]}" data-toggle="tooltip" data-placement="left" title='{$value["Parrafo"]}'>
                    </div>
FIN;
                }
                $this->plantilla['Imagenes'] .= <<<FIN
                <script>$('[data-toggle="tooltip"]').tooltip()</script>
FIN;
            }
            return json_encode($this->plantilla, JSON_PRETTY_PRINT);
        }
        public function informacionPersonal(){
            foreach ($this::service['Informacion'] as $key => $value) {
                switch ($key) {
                    case 'Experiencia':
                        $this->plantilla .= <<<FIN
                        <h2 class="mb-3">{$value}</h2>
FIN;
                        break;
                    case 'RedesSociales':
                        $this->plantilla .= <<<FIN
                        <p class="lead text-white-50 mb-8">$value</p>
FIN;
                        break;
                    
                    default:
                        $this->plantilla .= <<<FIN
                        Falta plantilla de html para la opcion  {$key}
FIN;
                        break;
                }
            }
            return $this->plantilla;
        }
        // function __destruct() {
        //     self::$plantilla = null;
        // }
    }
?>