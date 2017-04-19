<?php
class CompleteRange
{
	
	function build($coleccion)
	{
		if ( count($coleccion)>1)
		{
			$min = $coleccion[0];
			$max = $coleccion[count($coleccion)-1];
			$arr_complete = array();
			for($min; $min<=$max; $min++)
			{
				array_push($arr_complete,$min);
			}
			print_r($arr_complete);
		}
		else
			print_r($coleccion);					
	}
 
}

echo "PROBLEMA 2: \n\n";
$obj_CompleteRange = new CompleteRange();
echo "EJEMPLOS: \n\n";

$coleccion = array(1,2,4,5);
echo "1- ENTRADA: ";
print_r($coleccion);
echo "\n";
echo "SALIDA: ";
echo $obj_CompleteRange->build($coleccion);
echo "\n";

$coleccion = array(2,4,9);
echo "2- ENTRADA: ";
print_r($coleccion);
echo "\n";
echo "SALIDA: ";
echo $obj_CompleteRange->build($coleccion);
echo "\n";

$coleccion = array(55,58,60);
echo "- ENTRADA: ";
print_r($coleccion);
echo "\n";
echo "SALIDA: ";
echo $obj_CompleteRange->build($coleccion);
echo "\n";
 
?>


 