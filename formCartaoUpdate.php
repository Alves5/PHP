<?php
    echo"
    <form action='ExecucaoCartao.php' enctype='multipart/form-data' method='POST'>
        <label>Id</label></br>
        <input type='number' name='id'/></br>
        <label>Saldo</label></br>
        <input type='text' name='saldo'/></br>
        <label>Tipo do Cartão</label></br>
        <input type='text' name='tipoCartao'/></br>
        <label>Numero do seu cartão</label></br>
        <input type='text' name='numeroCartao'/></br>
        <label>Nome do banco</label></br>
        <input type='text' name='nomeBanco'/></br>
        <input type='submit' name='form' value='Atualizar'/>
    </form>";
?>