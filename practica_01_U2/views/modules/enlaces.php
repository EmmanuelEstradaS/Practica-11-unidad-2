<?php 
	class Paginas
	{
		//Metodo para relacionar las paginas dependiendo del action que se coloque redirecciona a sia la pagina que es
		public static function enlacesPaginasModel($enlaces)
		{
			if($enlaces == "alumnos" || $enlaces == "salir" ||"dashboard" || $enlaces == "agregar_alumnos" || $enlaces == "editar_alumnos" || $enlaces=="alumnos_tutor" || $enlaces=="navegacion" )
			{
				$module =  "views/modules/".$enlaces.".php";
			}
		    else if($enlaces == "index")
		    {
		    	$module =  "views/modules/ingresar.php";	
		    }else{

		    	$module =  "views/modules/agregar_usuario.php";

		    }
			return $module;

			
		}
	}
?>