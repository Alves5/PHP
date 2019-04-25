<?php
require('header.php');
?>
<div id='index'>
    <div class='home'>
        <div class='home_background'></div>
        <div class='background_image background_city' style='background-image:url(images/city_3.png)'></div>
        <div class='cloud cloud_1'><img src='images/cloud.png' alt=''></div>
        <div class='cloud cloud_2'><img src='images/cloud.png' alt=''></div>
        <div class='cloud cloud_3'><img src='images/cloud_full_2.png' alt=''></div>
        <div class='cloud cloud_4'><img src='images/cloud.png' alt=''></div>
        <div class='home_container'>
            <div class='container'>
                <div class='row'>
                    <div class='col'>
                        <div class='home_content'>
                            <div class='home_title'>Histórico de registros</div>
                            <div class='breadcrumbs'>
                                <ul class='d-flex flex-row align-items-center justify-content-start'>
                                    <li><a href='index.php'>Home</a></li>
                                    <li>Serviços</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row'>
            <div class='col-6'>
                <center><h2>Entradas</h2></center>
                <table class='table table-bordered table-dark'>
                    <thead>
                        <tr>
                            <th>Cod.</th><th>Cartão</th><th>Despesa</th><th>Data</th><th>Valor</th>                
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once("lib/Controle/historicoControle.class.php");
                        $todos = new HistoricoControle();
                        foreach ($todos->consultaEntrada() as $key) {
                            echo "
                                <tr>
                                    <td>{$key->getIdHistorico()}</td>
                                    <td>{$key->getIdCartao()}</td>	
                                    <td>{$key->getNomeRegistro()}</td>
                                    <td>{$key->getData()}</td>
                                    <td>{$key->getValorE()}</td>
                                </tr>";
                        }    
                    ?>
                        <tr>
                            <td >Total</td>
                        </tr>  
                    </tbody>
                </table>
                <br>
            </div>
            <div class='col-6'>
                <center><h2>Saídas</h2></center>
                <table class='table table-bordered table-dark'>
                    <thead>
                        <tr>
                            <th>Cod.</th><th>Cartão</th><th>Despesa</th><th>Data</th><th>Valor</th>                
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($todos->consultaSaida() as $key) {
                            echo"
                                <tr>
                                    <td>{$key->getIdHistorico()}</td>
                                    <td>{$key->getIdCartao()}</td>	
                                    <td>{$key->getNomeRegistro()}</td>
                                    <td>{$key->getData()}</td>
                                    <td>{$key->getValorS()}</td>
                                </tr>";
                        }
                    ?>
                        <tr>
                            <td >Total</td>
                        </tr>
                    </tbody>
                </table>
                <br>        
                <h3>Balanço:</h3>
                <?php        
                        Print $todos->balanco();
                ?>
            </div>
        </div>
        <center><a class='btn btn-primary' href='index.php'>Voltar</a></center>
    </div>
</div>
<?php
require_once("rodape.php");
?>