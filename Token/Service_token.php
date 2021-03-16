<?php

    class serviceToken implements Clases,Metodos{
        static $ServiceToken;
        private $archivo;
        private $metodo;
        static public function getInstance($Clase, $Metodo){
            if(!(self::$ServiceToken instanceof self)){
                self::$ServiceToken = new serviceToken();
                self::$ServiceToken->setArchivo($Clase);
                self::$ServiceToken->setMetodo($Metodo);
                include_once("Entidades/".self::$ServiceToken->getArchivo().".php");
                return call_user_func_array(array(self::$ServiceToken->getArchivo()::getInstance(), self::$ServiceToken->getMetodo()), [null]);
            }
        }
        function __destruct() {
            self::$ServiceToken=null;
        }
        public function getArchivo(){
            return $this->archivo;
        }
        public function setArchivo($token){
            return $this->Archivo($token);
        }
        private function Archivo($token){
            $this->archivo = array_keys(self::token_class, $token)[0];
            return $this->archivo;
        }
        public function getMetodo(){
            return $this->metodo;
        }
        public function setMetodo($token){
            return $this->Metodo($token);
        }
        private function Metodo($token){
            $this->metodo = array_keys(self::token_metodos, $token)[0];
            return $this->metodo;
        }
        
        
    }

?>