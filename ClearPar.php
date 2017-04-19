<?php 

class ClearPar
{
	function build($word){
		$ind_array =array();
		$nueva_cadena = preg_split('//u',$word, -1, PREG_SPLIT_NO_EMPTY);
		for ($q=0; $q <count($nueva_cadena) ; $q++) { 
			$ind_array[$q]=-1;
		}
		for ($i=0; $i < count($nueva_cadena) ; $i++) { 
			if ( $nueva_cadena[$i]=='(') {
				$ind_array[$i]=0;
			}elseif ($nueva_cadena[$i]==')') {
				for ($j=$i-1; $j >=0 ; $j--) { 
					if ($ind_array[$j]==0) {
						$ind_array[$j]=1;
						$ind_array[$i]=1;
						break;
					}
				}
				
			}
		}

		$cadena_resultado=array();
		$i=0;
		for ($m=0; $m <count($ind_array) ; $m++) { 
			if ($ind_array[$m]==1) {
				$cadena_resultado[$i]=$nueva_cadena[$m];
				$i++;
			}
			
		}
		return $cadena_resultado;
		
	}
	
}

echo "PROBLEMA 3: \n\n";
$obj_ClearPar = new ClearPar(); 
echo "EJEMPLOS: \n\n";

$cadena = "()())()";
echo "1- ENTRADA: ";
echo $cadena;
echo " SALIDA: ";
$valor=$obj_ClearPar->build($cadena);
for ($i=0; $i <count($valor) ; $i++) { 
	echo $valor[$i];
}
echo "\n";

$cadena = "()(()";
echo "2- ENTRADA: ";
echo $cadena;
echo " SALIDA: ";
$valor=$obj_ClearPar->build($cadena);
for ($i=0; $i <count($valor) ; $i++) { 
	echo $valor[$i];
}
echo "\n";

$cadena = "())";
echo "3- ENTRADA: ";
echo $cadena;
echo " SALIDA: ";
$valor=$obj_ClearPar->build($cadena);
for ($i=0; $i <count($valor) ; $i++) { 
	echo $valor[$i];
}
echo "\n";

$cadena = "((()";
echo "4- ENTRADA: ";
echo $cadena;
echo " SALIDA: ";
$valor=$obj_ClearPar->build($cadena);
for ($i=0; $i <count($valor) ; $i++) { 
	echo $valor[$i];
}
echo "\n";

?>