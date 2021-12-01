<h1> Codigo HTML </h1>

<?php

    #Esto es un comentario en php
    // Este es otro tipo de comentario en php
    /* Estas
    son vairas lineas
    de comentario en <php></php> */

    echo "<h1> Codigo PHP </h1>";
    print("Hola Mundo PHP");
    echo "<---Comentario---> ";


    # Variables

    $texto = "Repaso de PHP con Victor Robles";
    $altura = 187;
    $nombre= "Victor";
    $text2 = "Hola $nombre, ¿Como vas?";
    $text2 .= " Le agregamos mas texto al final";
 
    echo "<h1>" .$texto .", Su altura es: ".$altura."cm </h1>";  // Se concatenan strings con el punto .

    $textoFinal=  "<h1>" .$texto .", Su altura es: ".$altura."cm </h1>";
    echo $textoFinal;

    #PUEDO RECIVIR VARIABLES DE DISTINTAS FUENTES: POR LA URL por un formulario, por una cookie, por una sesion

    #GET: VARIABLES QUE Nos llegan por la url
    // localhost/repaso-php/index.php?nombre=KaliLinux

   #$name= $_GET["nombre"];
   if(isset($_GET["nombre"])){
    $name = $_GET["nombre"];
       
   }else{
    $name = "Kali";
   }

    // localhost/repaso-php/index.php?nombre=KaliLinux&altura=190
    #$altura= $_GET["altura"];

    if(isset($_GET["altura"])){
        $altura = $_GET["altura"];
           
       }else{
        $altura = 190;
       }
    #CONDICIONALES

   
    if($altura>=180){
        echo '<h3 style="background:green; color: white;"> Eres una persona alta </h3>';
    }else{
        echo "Eres una persona bajita </h3>";
    }

    echo "<hr>";

    #CREAR UNA FUNCION EN PHP
    function comprobarParametro( $parametro , $numero){
        if(isset($_GET[$parametro])){
            $valor = $_GET[$parametro];
               
           }else{
            $valor = "Texto or defecto";
            if($numero){
                $valor=180;
            }
           }

           

           return $valor;
    }


    #ARRAYS

    $personas = ["Victor", "FIona", "Frank"];

    echo $personas[1];

    echo "<h1> Listado </h1>";
  

?>

<h1> Listado </h1>
<ul>
    <?php
        foreach ($personas as $key ) {
            echo "<li> $key </li>";
        }
    ?>
</ul>