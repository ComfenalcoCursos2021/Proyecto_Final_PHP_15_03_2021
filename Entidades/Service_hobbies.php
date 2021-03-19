<?php
    include_once("Service_index.php");
    class Service_hobbies extends Service_index implements Mensajes,Plantilla {
        static $serviceHobbies; 
        public $plantilla; 
        static public function getInstance(){
            if(!(self::$serviceHobbies instanceof self)){
                self::$serviceHobbies = new Service_hobbies();
            }
            return self::$serviceHobbies; 
        }
    public function SectionHobbies(){
        $this->plantilla['Section'] = "";
        $this->plantilla['Imagenes'] = "";
        foreach ($this::service['sectionHobbies']["Descripcion"] as $key => $value) {
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
                case 'Perfil Profecional':
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
        foreach ($this::service['sectionHobbies']["Imagenes"] as $key => $value) {
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
    }
?>