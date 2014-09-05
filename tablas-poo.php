<?php
	class tablas{



	public function tabla($tabla,$numero,$maximo )
	{
		  $contador=1;
		
	   for($tab = $tabla; $contador <= $maximo; $tab ++)
		{
		
		
		

		
		
		
		
		echo "Tabla del " ,$tab;
		
			echo "<table border=1>";
			
			for($num = $numero; $num <= 12; $num ++)
			{
			echo "<tr>" ;
				echo  "<td>", $tab, '*', $num, '=' , $tab * $num,"</td>" ;
			echo "</tr>" ;
			}
			$contador++;
			echo "</table><br>";
			
			
			
			

		}
		echo "</table><br>";
	}
	
	

	//echo $this->$tabla();
}






    if(isset($_GET["tabla"]))
	{
		$parTabla = $_GET['tabla'];
    }
    else
	{
		$parTabla = 1;
	}
	if(isset($_GET["numero"]))
	{
		$parNumero = $_GET['numero'];
    }
    else
	{
		$parNumero = 1;
	}
	
	if(isset($_GET["maximo"]))
	{
		$parMaximo = $_GET['maximo'];
    }
    else
	{
		$parMaximo = 10;
	}
	
	
		if(isset($_GET["Columna"]))
	{
		$parColumna = $_GET['Columna'];
    }
    else
	{
		$parColumna = 10;
	}
	
$t = new tablas();
$t->tabla($parTabla,$parNumero,$parMaximo);
?>
