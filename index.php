<?php
abstract class Vanka
{
	const const_val="kto pijizni ti";
 //private $var;

public function prop($var)
{
	if ($var>0){
			echo "Rastik Golovastik";
	}
	else{
	echo "Eto ne globalnaua";
	}
		
}

 public function __call($name, $arguments) {
 //echo "вызов метода".$name."с аргуметами".$arguments;
 
 echo "Вызов метода '$name' "
             . implode(', ', $arguments). "\n";
 }
	
}

interface iDimka
{
	public function prop($var);
	public function result($ar);
}

class Dimka extends Vanka{
	
public function prop($var)
{
	if ($var>0){
		
			$a = "Rastik Golovastik";
	}
	else{
	$a = "Eto ne globalnaua";
	}
	
	$this->result($a);
		
}

public function result($ar){
	echo $ar;
}

}

echo Dimka::const_val;
$foo = new Dimka;
$foo->prop(1);
$b=array('h','u','i');
$foo->huiatina($b);

?>