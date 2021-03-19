// Service_cursos.php
//         HTTPS_CLASE_MARCA : "se/aJUcyR3T8c",
//         HTTPS_CLASE : "$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO",
    //  SectionCursos()
    //         HTTPS_METODO_MARCA : "ejeq9KJAdx/7I",
    //         HTTPS_METODO : "$2y$06$zBEPxv1p4TvHHgsQWllzwu0Y1k/Q.vVLStobUEpKfDGzDfeKQch1K"

$(document).ready(function () {
    $('#Carga').modal('show');
    let endpoint = "../Api.php";
    // Crear token para la solicitud de la peticion del php
    // $.ajax({
    //     url: endpoint,
    //     type: 'GET',
    //     accepts: "application/json",
    //     crossDomain: true,
    //     data:{
    //         HTTPS_ARCHIVO : "service_ejemplo",
    //         HTTPS_METODO : "ejemplo"
    //     },
    //     success: function (res) {
    //         console.log(res); 
    //     },
    // });
    //Nombre del programador
    $.ajax({
        url: endpoint,
        type: 'POST',
        accepts: "application/json",
        crossDomain: true,
        data:{
            HTTPS_CLASE_MARCA : "se/aJUcyR3T8c",
            HTTPS_CLASE : "$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO",
            HTTPS_METODO_MARCA : "ej.IK9kQYgsMQ",
            HTTPS_METODO : "$2y$10$.roCT.b5AyD9B1D/YGMkme2IzhL8/x5bsaUQ9xDymm/T9AfVGAEJy"
        },
        success: function (res) {

            $(".navbar-brand").html(res);
        },
    });
    // Menus en el archivo index.html
    $.ajax({
        url: endpoint,
        type: 'POST',
        accepts: "application/json",
        crossDomain: true,
        data:{
            HTTPS_CLASE_MARCA : "se/aJUcyR3T8c",
            HTTPS_CLASE : "$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO",
            HTTPS_METODO_MARCA : "ej02kPchkupvg",
            HTTPS_METODO : "$2y$10$v9tvb0gDufILFXPtX8gsVe.CbfN/6wcHiD2kTyprXuT0OZs4B90d6"
        },
        success: function (res) {
            let p1 = JSON.parse(res);
            $(".navbar-nav").html(p1["PC"]);
            $(".list-unstyled").html(p1["Movil"]);
        },
    });
    // Datos de la seccion de informacion y imagenes cursos.html
    $.ajax({
        url: endpoint,
        type: 'POST',
        accepts: "application/json",
        crossDomain: true,
        data:{
            HTTPS_CLASE_MARCA : "se/aJUcyR3T8c",
            HTTPS_CLASE : "$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO",
            HTTPS_METODO_MARCA : "ejeq9KJAdx/7I",
            HTTPS_METODO : "$2y$06$zBEPxv1p4TvHHgsQWllzwu0Y1k/Q.vVLStobUEpKfDGzDfeKQch1K"
        },
        success: function (res) {
            let p1 = JSON.parse(res);

            $(".hero-content").html(p1["Section"]);
            $(".carousel-inner").html(p1["Imagenes"]);
        },
    });
    // Informacion del pie de pagina index.html
    $.ajax({
        url: endpoint,
        type: 'POST',
        accepts: "application/json",
        crossDomain: true,
        data:{
            HTTPS_CLASE_MARCA : "se/aJUcyR3T8c",
            HTTPS_CLASE : "$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO",
            HTTPS_METODO_MARCA : "ej02kPchkupvg",
            HTTPS_METODO : "$2y$07$PylVfjfCznVhpxy6wlAADehyywG0gknxv2/BnpVZQ46Y2/uLZFeHu"
        },
        success: function (res) {
            $(".pie_pagina").html(res);
        },
    });
    setTimeout(() => {
        $(".pagina").removeClass('d-none');
        $('#Carga').modal('hide');
    }, 2300);
});