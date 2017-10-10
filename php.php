<?php

$unidade = array("zero","um","dois","tres","quatro","cinco","seis","sete","oito","nove");
$dez=array("dez","onze","doze","treze","quatorze","quinze","dezesseis","dezessete","dezoito","dezenove");
$dezena= array("vinte","vinte","vinte","trinta","quarenta","cinquenta","sessenta","setenta","oitenta","noventa");
$centena=array("cento","cento","duzentos","trezentos","quatrocentos","quinhentos","seiscentos","setecentos","oitocentos","novecentos");
$num = $_POST["numero"];
$n1 = substr($num , 0, 1);
$n2 = substr($num , 1, 2);
$n3 = substr($num , 2, 3);
if (intval($num) <= 9){
	$var= $unidade[$n1];
}elseif (intval($num) >= 10 and intval($num) <= 19) {
	$var= $dez[$n2];
}elseif (intval($num) >= 20 and intval($num) <= 99) {
	if ($unidade[$n2] != "zero"){
		$var= $dezena[$n1]." e ".$unidade[$n2];
	}else{
		$var= $dezena[$n1];
	}
}elseif (intval($num) >= 100 and intval($num) <= 999){
	$c2 = substr($num , 1, 1);
	$c3 = substr($num , 2, 3);
	if (intval($num) >= 100 and  intval($num) <= 109 or intval($num) >= 200 and  intval($num) <= 209 or intval($num) >= 300 and  intval($num) <= 309 or intval($num) >= 400 and  intval($num) <= 409 or intval($num) >= 500 and  intval($num) <= 509 or intval($num) >= 600 and  intval($num) <= 609 or intval($num) >= 700 and  intval($num) <= 709 or intval($num) >= 800 and  intval($num) <= 809 or intval($num) >= 900 and  intval($num) <= 909){
		if ($unidade[$c3] != "zero"){
			$var= $centena[$n1]." e ".$unidade[$c3];
		}else{
			if ($centena[$n1] != "cento"){
				$var= $centena[$n1];
			}else{
				$var= "cem";
			}
		}
	}elseif (intval($num) >= 110 and intval($num) <= 119 or intval($num) >= 210 and intval($num) <= 219 or intval($num) >= 310 and intval($num) <= 319 or intval($num) >= 410 and intval($num) <= 419 or intval($num) >= 510 and intval($num) <= 519 or intval($num) >= 610 and intval($num) <= 619 or intval($num) >= 710 and intval($num) <= 719 or intval($num) >= 810 and intval($num) <= 819 or intval($num) >= 910 and intval($num) <= 919) {
			$var= $centena[$n1]." e ".$dez[$c3];
	}elseif (intval($num) >= 120 and intval($num) <= 999) {
		if ($unidade[$c3] != "zero"){
			$var= $centena[$n1]." e ".$dezena[$c2]." e ".$unidade[$n3];
		}else{
			$var= $centena[$n1]." e ".$dezena[$c2];
		}
	}
}elseif(intval($num) == 1000){
		$var= "Um mil";
}else{
	$var= "Numero nao aceitavel";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Portfolio</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
</head>
<body>
<fieldset>
<legend>
Extenso:
</legend>
	<font color="red">
	<h1><?php echo ucfirst($var);?></h1>
	</font>
	<br>
		<button type="button" onclick="window.history.go(-1)">Voltar</button>
    </form>
</fieldset>
</center>
</body>
</html>
