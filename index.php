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
$foo->huiatina("dfgdfgd","1aaaaa");

?>

<!DOCTYPE html>
 <html lang="ru"> 
 <head> <meta charset="utf-8" /> 
 <title>Документ вао</title>
 <script src="jquery-3.2.1.js"></script>
 <script src="script.js"></script>
 <link rel="stylesheet" href="stule.css">
  
 
 </head> 
 <body> 
 123
 <a href="">
 <div class="cl1">
 333
 </div>
</a>
 </body> 
 </html>