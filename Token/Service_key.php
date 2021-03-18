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
            "Service_index" => '$2y$07$9ZdoPoqvDEkUrWjvDOI6KOtWqVDPaKDJ/RTJlhElwDdO1MQhyNB4e'
        );
    }
    interface Metodos extends Clases{
        const token_metodos = array(
            "nombreMenu" => '$2y$10$.roCT.b5AyD9B1D/YGMkme2IzhL8/x5bsaUQ9xDymm/T9AfVGAEJy',
            "Menus" => '$2y$10$v9tvb0gDufILFXPtX8gsVe.CbfN/6wcHiD2kTyprXuT0OZs4B90d6',
            "SectionIndex" => '$2y$08$H1N34Dnu4gsSsj4VMe2IkOl07HmXnZhJT/CB45RzYGQ1mXjfmTwUq',
            "informacionPersonal" => '$2y$07$PylVfjfCznVhpxy6wlAADehyywG0gknxv2/BnpVZQ46Y2/uLZFeHu'
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
                    "Inicio" => "#",
                    "Cursos" => "#",
                    "Hobbies" => "#",
                    "Perfil" => "#",
                ),
                "Movil" => array(
                    "INICIO" => "#",
                    "CURSO" => "#",
                    "HOBBIES" => "#",
                    "PERFIL" => "#",
                ),
            ),
            "sectionIndex" => array(
                "Descripcion" => array(
                    "Titulo" => "¿Quien soy?",
                    "Parrafo" => "Soy el profesor del curso de PHP de comfenalco.",
                    "Ver Mas" => "#"
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
            "Informacion" => array(
                "Experiencia" => "Llevo 7 años en la programacion de software y soy ingeniero en sistemas y electronico",
                "RedesSociales" => "Sigueme en mis redes sociales"
            ),
        );
    }
    

?>