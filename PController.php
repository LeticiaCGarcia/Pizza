<?php

include 'PModel.php';

class PController {
    private $model;

    public function __construct() {
        $this->model = new PModel();
    }

    public function processarPedido() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quantidade = isset($_POST["quantidadepizza"]) ? $_POST["quantidadepizza"] : "";
            $endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : "";
            $sabor = isset($_POST["sabor"]) ? $_POST["sabor"] : "";

            $resultadoPedido = $this->model->processarPedido($quantidade, $sabor, $endereco);

            
            //AGORA É O RESULPVIWE.PHP
            
            include 'ResulPView.php';
        } else {
            echo "Pedido não feito";
            header("Location: pizzaria.php");
            exit();
        }
    }
}

$controller = new PController();
$controller->processarPedido();

?>