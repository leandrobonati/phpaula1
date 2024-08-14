<?php 
    class Cliente {
        // atributos
     public function __construct( 
     public string $nome = "",
     public string $sobrenome = "",
     public string $cpf = ""){}

     //métodos
     public function inserir()
     {
        echo 'estou no inserir';
     }
}//fim da classe
?>