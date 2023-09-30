<?php
    include_once("assets/php/registro.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body{
            background-color: #ffffff;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 16pt;
        }
        button{
            margin-left: 3%;
            margin-right: 3%;
        }
        a{
            text-decoration: none;
            color:white;
        }
        .input-field label {
            color:darkgrey;
            font-size: 14pt;
        }
    </style>
</head>
<body>
    <div class="container">

        <h2 class="center-align">Registro de Estudiantes</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="idCedula" name="txtCedula" required><br>
                    <label for="idCedula">Cédula</label><br>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="idNombre" name="txtNombre" required><br>
                    <label for="idNombre">Nombre</label><br>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" id="idMate" name="txtMate" required><br>
                    <label for="idMate">Nota de Matemáticas</label><br>
                </div>
                <div class="input-field col s4">
                    <input type="text" id="idFisica" name="txtFisica" required><br>        
                    <label for="idFisica">Nota de Física</label><br>
                </div>
                <div class="input-field col s4">
                    <input type="text" id="idProgra" name="txtProgra" required><br>
                    <label for="idProgra">Nota de Programación</label><br>
                </div>
            </div>
            <div class="row center-align">
                <button type="submit" name="btn" Value="Enviar" class="btn waves-effect waves-light">
                    Enviar<i class="material-icons right">send</i>     
                </button>
                
                <a href="assets/php/estadistica.php">
                    <button type="button" class="btn waves-effect waves-light">
                        Estadistica
                    </button></a><br>
            </div>
        </form>
        
        <?php
            echo  '<br><br><h5 class="center-align">'.$mensaje.'</h5>';
        ?>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>