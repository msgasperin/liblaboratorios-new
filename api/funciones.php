<?php

   require("class.pdo.lib.php");
   $v = new conexion();
   $v->conectar();

   if(isset($_POST["accion"]) && $_POST["accion"] != '') {

      switch ($_POST["accion"]) {

         case 'enviar_cv':

            $mensaje        = 'Error al intentar enviar el CV';
            $estatus        = 500;

            if(empty($_POST["nombre"]) || empty($_POST["correo"] || empty($_POST["nombre"]))) {
               $estatus = 500;
               $mensaje = "Faltaron parámetros importantes, actualiza y vuelve a intentarlo";
               break;
            }

            if($_FILES['archivo']['size'] > 500000) {
               $estatus = 500;
               $mensaje = "El archivo excede 500 Kb, redúcelo";
               break;
            }

            $upload_folder  ='../../../sis_2/docs/cv/';
            $tmp_archivo    = $_FILES['archivo']['tmp_name'];
            $nom_archivo    = date('ymdhis').'_'.rand(1,100).'.pdf';
            $archivador     = $upload_folder.$nom_archivo;          

            if(move_uploaded_file($tmp_archivo, $archivador)) {
               $sql = $v->dbh->prepare("INSERT INTO cv (Nombre, Telefono, Correo, Ciudad, Puesto, Cv) VALUES (?,?,?,?,?,?)");
               if($sql->execute(array(utf8_decode($_POST["nombre"]), $_POST["telefono"], $_POST["correo"], utf8_decode($_POST["ciudad"]), utf8_decode($_POST["puesto"]), $nom_archivo))) {
                  $estatus = 200;
                  $mensaje = 'ok';
               }
               else if(file_exists($archivador)) {
                  unlink($archivador);                  
               }
            } 
            
            header('Content-Type: application/json');
            $datos = array('estatus' => $estatus, 'mensaje' => $mensaje);
            echo json_encode($datos);
         break;

         default:
            echo json_encode(['estatus' => 201]);
         break;
      }

   } else {
      echo json_encode(['estatus' => 404]);
   }

   $v->cerrar();
?>