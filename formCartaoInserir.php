<?php
    echo"
    <form id='message_form' class='message_form' action='ExecucaoCartao.php' enctype='multipart/form-data' method='POST'>
        <input type='text' class='message_input' name='dia' placeholder='Dia de vencimento' /></br>
        <input type='text' class='message_input' name='saldo' placeholder='Saldo' /></br>
        <label>Tipo do Cartão</label></br>
        <select name='tipoCartao' class='form-control' required>
            <option selected disabled>Selecione o Tipo</option>
            <option value='1'> Débito</option>
            <option value='0'> Crédito </option>
        </select>
        <br>
        <input type='text' name='numeroCartao' class='message_input' placeholder='Numero do seu cartão'/></br>
        <label>Nome do banco</label></br>
        <select name='nomeBanco' class='form-control' required>
            <option selected disabled>Selecione o Tipo</option>
            <option value='Bradesco'> Bradesco</option>
            <option value='Banco do Brasil'> Banco do Brasil </option>
            <option value='Santander'> Santander </option>
            <option value='Visa'> Visa </option>
            <option value='Itau'> Itau </option>
        </select>
        <input type='text' class='message_input' name='cpf' placeholder='CPF' /></br>
        <input type='submit' name='form' value='Inserir' class='message_form_button' data-toggle='modal' data-target='#modalExemplo3'/>
    </form>
    ";
?>