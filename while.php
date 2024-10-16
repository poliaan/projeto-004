<?php

include('../includes/header.php');

echo '<a href="index.php"><button>Voltar</button></a>';

$i = 1;
$add = 0;

while ($i <= 100) {
	$add += $i;
	$i++; 
}

echo "<br>";

echo "A soma de todos os números de 1 a 100 é: " . $add;
// concatenar para aparecer o resultado

/*
	Estrutura do loop WHILE

	while(condição){
    	trecho de código para executar;
    	atualizar a variável de controle;
}


	EXPLICAÇÃO

	$i = 1; é o valor que vai iniciar a contagem;

	$add = 0; ele vai acrescentando de acordo com o loop;

	($i <= 100) é que $i vai ter que ser menor ou igual a 10;

 	$add += $i; vai acrescentando o valor de $i a $add; 
	é tipo: 0+= 1; vai virar 1 += 1; 2+= 1;
	isso acontece por causa do incremento $i++; que sempre vai acrescentando mais 1 ao $add;
	 
*/

include('../includes/footer.php');