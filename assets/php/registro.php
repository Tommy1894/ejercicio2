<?php
    session_start();
    $mensaje="";
    if(isset($_POST['btn']) && $_POST['btn']=="Enviar"){
        if(isset($_POST['txtCedula']) && isset($_POST['txtNombre']) && isset($_POST['txtMate']) && isset($_POST['txtFisica']) && isset($_POST['txtProgra'])){
            if(!is_null($_POST['txtCedula']) && !is_null($_POST['txtNombre']) && !is_null($_POST['txtMate']) && !is_null($_POST['txtFisica']) && !is_null($_POST['txtProgra'])){
                if(is_numeric($_POST['txtMate']) && $_POST['txtMate']>=0 && $_POST['txtMate']<=20){
                    if(is_numeric($_POST['txtFisica']) && $_POST['txtFisica']>=0 && $_POST['txtFisica']<=20){
                        if(is_numeric($_POST['txtProgra']) && $_POST['txtProgra']>=0 && $_POST['txtProgra']<=20){
                            if(!isset($_SESSION['estudiantes'])){
                                $_SESSION['estudiantes']=[];
                            }
                            $cedula=$_POST['txtCedula'];
                            $nombre=$_POST['txtNombre'];
                            
                            $mate=$_POST['txtMate'];
                            $fisica=$_POST['txtFisica'];
                            $progra=$_POST['txtProgra'];
                    
                    
                            $estudiante=[$cedula, $nombre,$mate,$fisica,$progra];
                            $_SESSION['estudiantes'][]=$estudiante;
                            $mensaje= "Registro exitoso";
                        }
                        else{
                            $mensaje="La nota de programación debe ser una nota válida entre 0 y 20";
                        }
                    }
                    else{
                        $mensaje="La nota de física debe ser una nota válida entre 0 y 20";
                    }
                }
                else{
                    $mensaje="La nota de matemática debe ser una nota válida entre 0 y 20";
                }
            }
            else{
                $mensaje="No se puede enviar datos vacios";
            }
        }
        else{
            $mensaje="No se enviaron los datos";
        }
    }

?>