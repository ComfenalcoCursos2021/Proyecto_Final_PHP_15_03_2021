<?php

    class Service_usuario{
        static $serviceUsuario;
        public $plantilla;
        static public function getInstance(){
            if(!(self::$serviceUsuario instanceof self)){
                self::$serviceUsuario = new Service_usuario();
            }
            return self::$serviceUsuario;
        }
        public static function saludar(){
            $this->plantilla = <<<FIN
            <h1>Miguel Angel Castro Escamilla</h1>     
FIN;
            return $this->plantilla;
        }
        // function __destruct() {
        //     self::$plantilla = null;
        // }
    }


?>