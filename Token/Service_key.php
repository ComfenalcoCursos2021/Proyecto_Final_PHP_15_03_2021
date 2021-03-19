<?php
    interface Mensajes{
        const informacion = array(
            "archivo" => "El token del archivo a solicitar no se encuentra en uso en este momento",
            "claseToken" => "El token enviado no coincide con ningun archivo",
            "metodoToken" => "El token enviado no coincide con ningun metodo a ejecutar",
            "tokenApi" => "La clase o el metodo no coincide",
            "headresApi" => array ("Los encabezados que te faltan son: ", " por el metodo "),
        );
    }
    interface Clases{
        const token_class = array(
            "Service_index" => '$2y$07$9ZdoPoqvDEkUrWjvDOI6KOtWqVDPaKDJ/RTJlhElwDdO1MQhyNB4e',
            "Service_cursos" => '$2y$08$818s1cKn7bOBFflOiadvAebGz6xQBKXHbuC0lfSWASXD1udkylAuO',
            "Service_hobbies" => '$2y$10$prqJ39dFRVbh8iAzQFMIWeztouOWzwRggznzDyiuqojQQxwelx55G',
            "Service_perfil" => '$2y$05$RGKfhYFBzi.r1GXpJ5ucr.UJCkNn6zPMCTis2VJpcM00aDMPA.26O'
        );
    }
    interface Metodos extends Clases{
        const token_metodos = array(
            "nombreMenu" => '$2y$10$.roCT.b5AyD9B1D/YGMkme2IzhL8/x5bsaUQ9xDymm/T9AfVGAEJy',
            "Menus" => '$2y$10$v9tvb0gDufILFXPtX8gsVe.CbfN/6wcHiD2kTyprXuT0OZs4B90d6',
            "informacionPersonal" => '$2y$07$PylVfjfCznVhpxy6wlAADehyywG0gknxv2/BnpVZQ46Y2/uLZFeHu',
            "SectionIndex" => '$2y$08$H1N34Dnu4gsSsj4VMe2IkOl07HmXnZhJT/CB45RzYGQ1mXjfmTwUq',
            "SectionCursos" => '$2y$06$zBEPxv1p4TvHHgsQWllzwu0Y1k/Q.vVLStobUEpKfDGzDfeKQch1K',
            "SectionHobbies" => '$2y$06$Br05VEcmceu7CifpBsFfQ.rD8oj6Nw99kUBuTnkKHKuUSTq09KT8K',
            "SectionPerfil" => '$2y$10$JIDArSj4WuYePEJ9YhUDeegSn3F5DJszvv4rPHtVV9XrAs7611Icy',
        );
    }
    interface Plantilla{
        const service = array(
            "NombreMenu" => array(
                "PrimerNombre" => "Miguel",
                "SegundoNombre" => "Castro",
            ),
            "Menus" => array(
                "PC" => array(
                    "Inicio" => "index.html",
                    "Cursos" => "Html/cursos.html",
                    "Hobbies" => "Html/hobbies.html",
                    "Perfil" => "Html/perfil.html",
                ),
                "Movil" => array(
                    "INICIO" => "index.html",
                    "CURSO" => "Html/cursos.html",
                    "HOBBIES" => "Html/hobbies.html",
                    "PERFIL" => "Html/perfil.html",
                ),
            ),
            "sectionIndex" => array(
                "Descripcion" => array(
                    "Titulo" => "¿Quien soy?",
                    "Parrafo" => "Soy el profesor del curso de PHP de comfenalco.",
                    "Ver Mas" => "Html/cursos.html"
                ),
                "Imagenes" => array(
                    array(
                        "Foto" => "Img/img1.png",
                        "Titulo" => "JAVASCRIPT",
                        "Parrafo" => "Me gusta programar en JavaScript ya que soy un apacionado de la programacion :V"
                    ),
                    array(
                        "Foto" => "Img/img2.jpg",
                        "Titulo" => "CSS",
                        "Parrafo" => "Me gusta todo lo que tenga que ver con la personalizacion de un sitio web"
                    ),
                    array(
                        "Foto" => "Img/img3.jpg",
                        "Titulo" => "PHP",
                        "Parrafo" => "Desde mucho tiempo he aprendido a programar en PHP desde que era un niño ya que me parece un lenguaje muy facil de usar"
                    )
                )
            ),
            "sectionCursos" => array(
                "Descripcion" => array(
                    "Titulo" => "¿Mis certificados son de IBM, COMFENALCO, GOOGLE?",
                    "Parrafo" => "Varios de mis certificados son de estas tres entidades varian mucho entre diplomados, cursos, y carreras tecnicas, tecnologicas",
                    "Mis Pasatiempos" => "Html/hobbies.html"
                ),
                "Imagenes" => array(
                    array(
                        "Foto" => "../Img/img5.jpg",
                        "Titulo" => "IBM",
                        "Parrafo" => "De los varios certificados el que mas llevo con orgullo es el diplomado de los 3 nivel de la inteligencia artificial de IMB watson"
                    ),
                    array(
                        "Foto" => "../Img/img4.png",
                        "Titulo" => "GOOGLE DEVELOPER",
                        "Parrafo" => "Son varios cursos de la consola de GOOGLE en consumo de sus api sdk.js"
                    ),
                    array(
                        "Foto" => "../Img/img6.jpg",
                        "Titulo" => "COMFENALCO",
                        "Parrafo" => "Como soy el profesor de comfenalco mi funcion principal es dictar clases de programacion"
                    ),
                )
            ),
            "sectionHobbies" => array(
                "Descripcion" => array(
                    "Titulo" => "Mis unicos pasatiempos son",
                    "Parrafo" => "Megusta es cuchar musica de los 80 rock clasico un me gusta cocinar para mi, que me envien a cocinar para otros si pero no es lo mismo y en los tiempo libres creo interfaces UI para la web",
                    "Perfil Profecional" => "Html/perfil.html"
                ),
                "Imagenes" => array(
                    array(
                        "Foto" => "../Img/img8.jpg",
                        "Titulo" => "ROCK CLASICO",
                        "Parrafo" => "La mayoria del tiempo escucho las leyendas del rock para concentrarme es mis cosas ya trabajo o estudio, aunque me gusta todo tipo de genero siempre y cuando la musica sea pegajosa"
                    ),
                    array(
                        "Foto" => "../Img/img7.jpg",
                        "Titulo" => "COCINA Y COMER",
                        "Parrafo" => "Paso la mayoria del tiempo en la cosina cuando estoy estresado o no entiendo nada, la cocina me relaja aunque aveces es estresante pero solo es seguir los pasos de cada una de ellas `Las recetas`"
                    ),
                    array(
                        "Foto" => "../Img/img9.jpg",
                        "Titulo" => "UI DEVELOPER",
                        "Parrafo" => "Los fienes de semana aparte de tener que lidiar con todo de la vida me la paso creando diseños para la web en Illustrator y Photoshop"
                    ),
                )
            ),
            "sectionPerfil" => array(
                "Descripcion" => array(
                    "Titulo" => "¿Quien soy?",
                    "Parrafo" => "Soy el profesor del curso de PHP de comfenalco.",
                    "Ver Mas" => "Html/hobbies.html"
                ),
                "Imagenes" => array(
                    array(
                        "Foto" => "../Img/img1.png",
                        "Titulo" => "JAVASCRIPT",
                        "Parrafo" => "Me gusta programar en JavaScript ya que soy un apacionado de la programacion :V"
                    ),
                    array(
                        "Foto" => "../Img/img2.jpg",
                        "Titulo" => "CSS",
                        "Parrafo" => "Me gusta todo lo que tenga que ver con la personalizacion de un sitio web"
                    ),
                    array(
                        "Foto" => "../Img/img3.jpg",
                        "Titulo" => "PHP",
                        "Parrafo" => "Desde mucho tiempo he aprendido a programar en PHP desde que era un niño ya que me parece un lenguaje muy facil de usar"
                    )
                )
            ),
            "Informacion" => array(
                "Experiencia" => "Llevo 7 años en la programacion de software y soy ingeniero en sistemas y electronico",
                "RedesSociales" => "Sigueme en mis redes sociales"
            ),
        );
    }
    

?>