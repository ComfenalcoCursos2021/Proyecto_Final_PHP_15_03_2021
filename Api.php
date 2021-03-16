<?php

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Method: GET, POST");
    header("Access-Control-Allow-Headers: * Access-Control-Request-Method");
    
    class servicioApi{
        static $ServicioApi;
        private $respuesta;
        public function __construct(){
            
        }
        private function verificarToken($token){
            if (password_verify($token["CLASE_TOKEN"]["Marca"], $token["CLASE_TOKEN"]["Token"]) && password_verify($token["METODO_TOKEN"]["Marca"], $token["METODO_TOKEN"]["Token"])) {
                include_once("Token/Service_key.php");
                include_once("Token/Service_token.php");
                $this->respuesta = serviceToken::getInstance($token["CLASE_TOKEN"]["Token"],$token["METODO_TOKEN"]["Token"]);
            } else {
                $this->respuesta = "xxxxx";
            }
        }
        public function setRespuesta($token){
            $this->verificarToken($token);
        }
        public function getRespuesta(){
            return $this->respuesta;
        }
        public function token($Clase, $Metodos){
            $mardaAgua = (string) $_SERVER["REQUEST_TIME"];
            $Token = (array) ["Clase" => crypt($mardaAgua, $Clase), "Metodos" => crypt($mardaAgua, $Metodos)];
            $cadena = (array) [];
            $i = array_keys($Token);
            ciclo:
            if(count($i)){
                $opciones = [
                    'cost' => rand(9,13),
                ];
                $key = array_shift($i);
                $cadena[$key] = (array) ["Marca" =>$Token[$key], "Token" => password_hash($Token[$key], PASSWORD_BCRYPT , $opciones)];
                goto ciclo;
            }
            return $cadena;
        }
        
        static public function getInstance(){
            if(!(self::$ServicioApi instanceof self)){
                self::$ServicioApi = new servicioApi();
            }else{
                // call_user_func_array(array(self::$ServicioApi, "setnombre"), [$p1]);
            }
            return self::$ServicioApi;
        }
        function __destruct() {
            $this->respuesta = null;
        }
    }
   
    $data = (array) [
        "CLASE_TOKEN" => (array) [
            "Marca" => $_REQUEST["HTTPS_CLASE_MARCA"],
            "Token" => $_REQUEST["HTTPS_CLASE"]
        ],
        "METODO_TOKEN" => (array) [
            "Marca" => $_REQUEST["HTTPS_METODO_MARCA"],
            "Token" => $_REQUEST["HTTPS_METODO"]
        ]
    ];
    print_r(call_user_func_array(array(servicioApi::getInstance(), "setRespuesta"), [$data]));
    print_r(call_user_func_array(array(servicioApi::getInstance(), "getRespuesta"), [null]));

?>