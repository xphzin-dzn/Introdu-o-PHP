	

<!DOCTYPE html>

<html>



<h1> TESTE DE PHP </h1>



<?php




$f = "Isto eh um conteudo!";



echo "Ok, $f";



echo "<br>";



$idade =17;



if($idade==18){

echo "sou maioral";



}else {

echo "penso em chegar la";



}



$vetor[0] = "Zero";

$vetor[1] = "Um";

$vetor[2] = "Dois";

$vetor[3] = "Três";




echo "<br>";

echo "O conteúdo de vetor[2] é $vetor[2]";

echo "<br>";

echo "entrei no FOR";

echo "<br>";

	echo "<img src=\"download.png\" >";



for($i=0; $i<=3; $i++){

echo "O conteúdo de vetor[$i] é $vetor[$i]";

if ($i == 2){

echo "<br>";

echo "<font color=\"#800080\"> esse é o indice 2 </font> ";

}

echo "<br>";

}



for($i=0;$i<10; $i++){

echo "<img src=\"download.png\" >";

}

echo "<br>";

echo "<br>";

echo "entrando em um foreach";




foreach($vetor as $item){

echo "O conteúdo de vetor é $item";

echo "<br>";



}






echo "<h1>Isto é em PHP</h1>";

?>




<p> fim do teste </p>

</html>
