<?php
	include ("conexion.php");
	if(!isset($_POST['Descripcion'])){
		header("Location: subirImegenes.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " .$_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen=$_FILES["file"]["name"];
		    	if(file_exists("img/".$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"img/".$_FILES["file"]["name"]);
		      		echo "Archivo guardado en " . "img/" .$_FILES["file"]["name"];
		      		$Descrip=$_POST['Descripcion'];
		      		
                     echo $Descrip,$imagen;

					$Sql="insert into hoteles () values(
							'".$Descrip."',
							
							'".$imagen."')";


                     
					mysqli_query($con,$Sql);
					echo $Sql;

                                        echo "<script languaje='javascript'>alert('Imagen Registrada')</script>";
                    //header("Location:agregarHOTELES.php");
					
		      }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
?>
