<?php 
// atributos ou caracteristica 
public $cor;
public $marca;
public $motor;
{
public function_construct($cor, $marca, $motor)

   $this -> cor  = $cor;
   $this -> marca = $marca;
   $this -> motor = $motor;
}
public functionn acelerar(){
    echo "o carro esta acelerando <br>";

}
public function desligar (){
    echo "o carro esta desligando, <br>";
}
public function freiar (){
    echo "o freio foi acionado!";
}
{
    $meuCarro = new Carro ("rosa", "ferrari", "400cv");

$carroo_da_esposa = new carro("Preto", "BMW", "250CV");
echo "cor;". $meucarro -> cor . "br>";
echo "marca;". $meucarro -> marca . "<br>";
echo "motor;". $meucarro -> motor. "<br>";

$meucarro -> acelerar();
$meucarro -> freiar()

// EXI:
// Criar um atributo, metodo e um objeto novo
// para a classe "carro".
}