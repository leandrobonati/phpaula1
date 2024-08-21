<?php
     if($_GET == true)
	 {

    require_once "Cliente.class.php";

	$obj = new Cliente();

   $obj->nome = $_GET["nome"];
   $obj->sobrenome = $_GET["sobrenome"];
   $obj->cpf =$_GET ["cpf"];

  $conect = $obj->conexao(); 

  $msg = $obj->inserir($conect);

  echo $msg;
  

	/*echo "<pre>";
	var_dump($obj);
	echo"</pre>";

	/*echo "<h1 style='color:blue'>O nome é " . $_GET["nome"] . "</h1><br>";
	
	echo "O Sobrenome é {$_GET["sobrenome"]}<br>";*/
	 }
	 else {
		header ("location:index.html");
	 }
?>

