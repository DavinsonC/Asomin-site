<?php
session_start();
include "conexion.php";
header('Content-type: application/json');
$resultado = array();



//$sql="select * from usuarios where usuario='".$_GET['Usuario']."' AND 
 //				contraseña ='".$_GET['password']."';";
 				//echo $usu;
if($_POST['email'] <> ''){
	echo $_POST['email'] ;
$re=mysqli_query($con,"select * from usuarios where usuario='".$_POST['email']."' AND 
 					password='".$_POST['pass']."'")	or die(mysqli_error($con));
$row_cnt = mysqli_num_rows($re);
if ($row_cnt<=0) {
	header("Location:Login.php?Error=Acceso%20denegado");

}

else{
 
	while ($f=mysqli_fetch_array($re)) {
		
		$arreglo[]=array('codigo'=>$f['codigo'],
			'Nombre'=>$f['Nombre']);
		
		

		  $_SESSION['Usuario']=$arreglo;
		header("Location:../administración.php");

           }
      }
  }
 
	
	
	
?>