<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class CasosController
{
    use ViewTrait;

    public function relatorioDiariosPG()
    {
        $total = RelatorioCovid::total();
        $casos = RelatorioCovid::dadosPontaGrossa();
        $this->view('ponta-grossa', ['total' => $total, 'casos' => $casos]);
    }

    public function relatorioCasosEstados()
    {
        $cliente = new Client();
        $requisicao = new Request('GET', 'https://covid19-brazil-api.now.sh/api/report/v1');

        $promise = $cliente->sendAsync($requisicao)->then(function ($resposta) {

            $dados = json_decode($resposta->getBody());
            require("./views/estados.view.php");
        });
        $promise->wait();
    }

    public function filtraCasosPorEstado($estado)
    {
        $cliente = new Client();
        $requisicao = new Request('GET', "https://covid19-brazil-api.now.sh/api/report/v1/brazil/uf/${estado}");

        $promise = $cliente->sendAsync($requisicao)->then(function ($resposta) {

            $dados = json_decode($resposta->getBody());
            require("./views/estado.view.php");
        });
        $promise->wait();
    }
}
