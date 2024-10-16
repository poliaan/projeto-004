<?php

include('../includes/header.php');

echo "<h2>Exemplo de utilização do loop FOR</h2>";

echo "<h3>Criando uma TABUADA</h3>";

echo "<br>";

echo '<a href="index.php"><button>Voltar</button></a>';

echo "<br><br>";

$numero = $_POST['numero'];

for ($i = 1; $i <= 10; $i++) {
	echo "$numero * $i = ".($numero * $i);
	echo "<br><br>";
}

include('../includes/footer.php');

/*

	Estrutura do FOR
	for(inicialização ; condição ; incremento){
    	trecho de código para executar;
}

	EXPLICAÇÃO
    $i = 1; vai começar no 1.
	o $i vai ser menor ou igual a zero, e i++ é vai acrescentando de 1 em 1.
	"$numero * $i =" é uma string, para aparcer na page.
	depois tem que concatenar (unir o conteúdo de duas strings (dado de tipo texto))
	"$numero * $i = ".($numero * $i) - cálculo matemático em saida, fica dentro de () 

*/