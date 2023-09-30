<?php
    session_start();
    if(isset($_SESSION["estudiantes"][0])){
        $cantidad=0;
        $apro_mate=0;
        $apro_fisica=0;
        $apro_progra=0;
        $apla_mate=0;
        $apla_fisica=0;
        $apla_progra=0;
        $suma_mate=0;
        $suma_fisica=0;
        $suma_progra=0;
        $una=0;
        $dos=0;
        $tres=0;
        $max_mate=0;
        $max_fisica=0;
        $max_progra=0;
        foreach($_SESSION["estudiantes"] as $estudiante){
            $cant_apro=0;
            $cantidad++;
            $suma_mate+=$estudiante[2];
            $suma_fisica+=$estudiante[3];
            $suma_progra+=$estudiante[4];
            
            if($max_mate<$estudiante[2]){
                $max_mate=$estudiante[2];
            }
            if($max_fisica<$estudiante[3]){
                $max_fisica=$estudiante[3];
            }
            if($max_progra<$estudiante[4]){
                $max_progra=$estudiante[4];
            }
    
            if($estudiante[2]>=9.5){
                $apro_mate++;
                $cant_apro++;
            }
            else{
                $apla_mate++;
            }
            if($estudiante[3]>=9.5){
                $apro_fisica++;
                $cant_apro++;
            }
            else{
                $apla_fisica++;
            }
            if($estudiante[4]>=9.5){
                $apro_progra++;
                $cant_apro++;
            }
            else{
                $apla_progra++;
            }
    
            if($cant_apro==1){
                $una++;
            }
            if($cant_apro==2){
                $dos++;
            }
            if($cant_apro==3){
                $tres++;
            }
        }
        $prom_mate=$suma_mate/$cantidad;
        $prom_fisica=$suma_fisica/$cantidad;
        $prom_progra=$suma_progra/$cantidad;
        // foreach($_SESSION["estudiantes"] as $estudiante){
        //     echo $estudiante[0]."<br>";
        //     echo $estudiante[1]."<br>";
        //     echo $estudiante[2]."<br>";
        //     echo $estudiante[3]."<br>";
        //     echo $estudiante[4]."<br>";
        // }
    }
    
    
    //session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadistica</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background-color: #ffffff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 15pt;
        }
        button{
            margin-bottom: 5%;
            margin-top: 2%;
        }
 
    </style>
</head>
<body>
    <div class="container">
        <?php
        if(isset($_SESSION["estudiantes"][0])){
            echo '<ul class="collection with-header">';
            echo '<li class="collection-header"><h2 class="center-align">Estadística</h2></li>';
            echo '<li class="collection-item">Nota promedio de matemática: '.$prom_mate.'</li>';
            echo '<li class="collection-item">Nota promedio de física: '.$prom_fisica.'</li>';
            echo '<li class="collection-item">Nota promedio de programación: '.$prom_progra.'</li>';
            echo '<li class="collection-item">Número de alumnos aprobados en matemática: '.$apro_mate.'</li>';
            echo '<li class="collection-item">Número de alumnos aprobados en física: '.$apro_fisica.'</li>';
            echo '<li class="collection-item">Número de alumnos aprobados en programación: '.$apro_progra.'</li>';
            echo '<li class="collection-item">Número de alumnos aplazados en matemática: '.$apla_mate.'</li>';
            echo '<li class="collection-item">Número de alumnos aplazados en física: '.$apla_fisica.'</li>';
            echo '<li class="collection-item">Número de alumnos aplazados en programación: '.$apla_progra.'</li>';
            echo '<li class="collection-item">Número de alumnos que aprobaron todas las materias: '.$tres.'</li>';
            echo '<li class="collection-item">Número de alumnos que aprobaron dos materias: '.$dos.'</li>';
            echo '<li class="collection-item">Número de alumnos que aprobaron una sola materia:  '.$una.'</li>';
            echo '<li class="collection-item">Nota máxima en matemática: '.$max_mate.'</li>';
            echo '<li class="collection-item">Nota máxima en física: '.$max_fisica.'</li>';
            echo '<li class="collection-item">Nota máxima en programación: '.$max_progra.'</li>';
            echo '</ul>';
        }
        else{
            echo "<h4 class='center-align'>Debe primero registrar un estudiante para ver las estadísticas.</h4><br>";
        }
        ?>
        <div class="center-align">
            <a href='../../index.php'>
                <button type='button' class="btn waves-effect waves-light">Regresar</button>
            </a>
        </div>
        
    </div>
            
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>