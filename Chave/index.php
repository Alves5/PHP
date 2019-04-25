<?php
require "MyCripty.class.php";

//Instanciando classe
$mc = new MyCripty();
//Definindo um número chave, importante colocar sempre um número PRIMO maior que 3
$mc -> chave = 97;
//Texto chave para dificultar a decriptografia, pois além de precisar da chave, precisa também do texto chave.
$mc -> add_text = md5(sha1("texto chave aqui"));
//Texto a ser criptogrfado
$enc = $mc -> enc("Essa bagaça vai dar certo.");
//Revertendo o processo da criptografia
$dec = $mc -> dec($enc);
//Saída HTML
echo "<p>Texto criptografado: $enc</p>";
echo "<p>Texto descriptografado: $dec</p>";
?>
