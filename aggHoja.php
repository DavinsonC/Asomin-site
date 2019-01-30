<?php
include 'conexion.php';
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $profesion=$_POST['profesion'];
    $Fecha=$_POST['fecha'];
    $departamento=$_POST['depar'];
    $Ciudad=$_POST['ciudad'];
    $Telefono=$_POST['telefono'];
    $nombrehv = $_FILES['archivo']['name'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombrehv;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            
            
            $Sql="INSERT INTO curriculum (Documento,Nombre,Apellido,Carrera,Fecha,Departamento,Ciudad,Telefono,Hv) values(
                            '".$codigo."',
                            '".$nombre."',
                            '".$apellido."',
                            '".$profesion."',
                            '".$Fecha."',
                            '".$departamento."',
                            '".$Ciudad."',
                            '".$Telefono."',        

                            '".$nombrehv."')";
                    mysqli_query($con,$Sql)or die();
                    echo'<script type="text/javascript">
        alert("Tus datos se guardaron correctamente");
        window.location.href="index.html";
        </script>';
            
        }
    }
  
?>