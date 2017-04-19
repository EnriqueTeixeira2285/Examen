<?php
class ChangeString
{
     
	 function build($cadena)
    {
        $arr = array("A"=>"B","B"=>"C","C"=>"D","D"=>"E","E"=>"F","F"=>"G","G"=>"H","H"=>"I","I"=>"J","J"=>"K","K"=>"L","L"=>"M","M"=>"N","N"=>"Ñ","Ñ"=>"O","O"=>"P","P"=>"Q","Q"=>"R","R"=>"S","S"=>"T","T"=>"U","U"=>"V","V"=>"W","W"=>"X","X"=>"Y","Y"=>"Z","Z"=>"A","a"=>"b","b"=>"c","c"=>"d","d"=>"e","e"=>"f","f"=>"g","g"=>"h","h"=>"i","i"=>"j","j"=>"k","k"=>"l","l"=>"m","m"=>"n","n"=>"ñ","ñ"=>"o","o"=>"p","p"=>"q","q"=>"r","r"=>"s","s"=>"t","t"=>"u","u"=>"v","v"=>"w","w"=>"x","x"=>"y","y"=>"z","z"=>"a");
        echo strtr($cadena,$arr);
    }
    
}   

echo "PROBLEMA 1: \n\n";
$obj_ChangeString = new ChangeString();
echo "EJEMPLOS: \n\n";

$cadena = "123 abcd*3";
echo "1- ENTRADA:'$cadena' ";
echo "SALIDA:'";
echo $obj_ChangeString->build($cadena)."'";
echo "\n";

$cadena = "**Casa 52";
echo "2- ENTRADA:'$cadena' ";
echo "SALIDA:'";
echo $obj_ChangeString->build($cadena)."'";
echo "\n";

$cadena = "**Casa 52Z";
echo "3- ENTRADA:'$cadena' ";
echo "SALIDA:'";
echo $obj_ChangeString->build($cadena)."'";
echo "\n";

?>


 