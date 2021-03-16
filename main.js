$(document).ready(function () {
    let endpoint = "https://pruebacofenalco.000webhostapp.com/Proyecto_Final_PHP_15_03_2021/Api.php";
   
    $.ajax({
        url: endpoint,
        type: 'POST',
        accepts: "application/json",
        crossDomain: true,
        data:{
            HTTPS_GET : "token",
            HTTPS_CLASE_MARCA : "seeq/1R.aEYuQ",
            HTTPS_CLASE : "$2y$10$IZWalCdInZzIilt2dG0/3.B4enMRTHGH1vAZkw1ATlfNpbAhtAMpO",
            HTTPS_METODO_MARCA : "saKPNKgP0PWD.",
            HTTPS_METODO : "$2y$09$i1x9DkntoU2S0i9MdbB3wO8QfnEBdObkQQ9tXLYPZW.D9YHLe8PZW"
        },
        success: function (res) {
            document.write(res);
        },
    });


});