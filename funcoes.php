<?php

function cadastrar($nome, $cpf, $cep, $rua, $bairro, $numero, $complemento, $cidade, $estado, $ibge, $produto){
	try {
	$pdo = new PDO('sqlite:pedidobd.db');
	
		$novo_pedido = array('nome'=>$nome,'cpf'=>$cpf,'cep'=>$cep,'rua'=>$rua,'bairro'=>$bairro,'numero'=>$numero,'complemento'=>$complemento,'cidade'=>$cidade,'estado'=>$estado,'ibge'=>$ibge,'produto'=>$produto);
		$pdo->prepare('INSERT INTO pedido (nome,cpf,cep,rua,bairro,numero,complemento,cidade,estado,ibge,produto) VALUES (:nome,:cpf,:cep,:rua,:bairro,:numero,:complemento,:cidade,:estado,:ibge,:produto)')->execute($novo_pedido);

		echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Pedido feito com sucesso')
window.location.href='index.php';
</SCRIPT>");
		

	}
	 catch (Exception $e) {
		 
		 
		  echo 'Exceção capturada: ',  $e->getMessage(), "\n";
	 }
}





$pdo = new PDO('sqlite:pedidobd.db');

$statment = $pdo->query("SELECT * FROM pedido");

$rows = $statment->fetchALL(PDO::FETCH_ASSOC);




var_dump($rows);

