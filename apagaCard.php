<?php
  require_once("lib/Controle/CartaoControle.class.php");
  $comando = new CartaoControle();
  $comando->deletaCartao($_GET['numeroCartao']);
    header("Location: index.php");
    ///echo $_GET['numeroCartao'];
?>