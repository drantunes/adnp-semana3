<?php

use Carbon\Carbon;

class RelatorioCovid
{

    private static $dadosPG = [
        ['x' => '2020-03-21T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-03-25T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-03-31T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-04T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-05T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-13T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-15T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-19T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-21T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-04-22T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-26T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-28T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-29T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-04-30T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-01T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-02T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-03T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-06T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-07T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-09T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-10T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-12T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-13T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-05-14T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-05-15T03:00:00.000Z', 'y' => 7],
        ['x' => '2020-05-16T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-17T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-18T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-19T03:00:00.000Z', 'y' => 3],
        ['x' => '2020-05-20T03:00:00.000Z', 'y' => 3],
        ['x' => '2020-05-21T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-22T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-05-23T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-05-24T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-25T03:00:00.000Z', 'y' => 3],
        ['x' => '2020-05-26T03:00:00.000Z', 'y' => 3],
        ['x' => '2020-05-27T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-05-28T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-05-29T03:00:00.000Z', 'y' => 5],
        ['x' => '2020-05-30T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-05-31T03:00:00.000Z', 'y' => 3],
        ['x' => '2020-06-01T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-06-02T03:00:00.000Z', 'y' => 4],
        ['x' => '2020-06-03T03:00:00.000Z', 'y' => 12],
        ['x' => '2020-06-04T03:00:00.000Z', 'y' => 8],
        ['x' => '2020-06-05T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-06-06T03:00:00.000Z', 'y' => 1],
        ['x' => '2020-06-07T03:00:00.000Z', 'y' => 5],
        ['x' => '2020-06-08T03:00:00.000Z', 'y' => 6],
        ['x' => '2020-06-09T03:00:00.000Z', 'y' => 12],
        ['x' => '2020-06-10T03:00:00.000Z', 'y' => 14],
        ['x' => '2020-06-11T03:00:00.000Z', 'y' => 6],
        ['x' => '2020-06-12T03:00:00.000Z', 'y' => 11],
        ['x' => '2020-06-13T03:00:00.000Z', 'y' => 5],
        ['x' => '2020-06-14T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-06-15T03:00:00.000Z', 'y' => 10],
        ['x' => '2020-06-16T03:00:00.000Z', 'y' => 19],
        ['x' => '2020-06-17T03:00:00.000Z', 'y' => 18],
        ['x' => '2020-06-18T03:00:00.000Z', 'y' => 11],
        ['x' => '2020-06-19T03:00:00.000Z', 'y' => 22],
        ['x' => '2020-06-20T03:00:00.000Z', 'y' => 9],
        ['x' => '2020-06-21T03:00:00.000Z', 'y' => 10],
        ['x' => '2020-06-22T03:00:00.000Z', 'y' => 23],
        ['x' => '2020-06-23T03:00:00.000Z', 'y' => 29],
        ['x' => '2020-06-24T03:00:00.000Z', 'y' => 27],
        ['x' => '2020-06-25T03:00:00.000Z', 'y' => 21],
        ['x' => '2020-06-26T03:00:00.000Z', 'y' => 28],
        ['x' => '2020-06-27T03:00:00.000Z', 'y' => 6],
        ['x' => '2020-06-29T03:00:00.000Z', 'y' => 31],
        ['x' => '2020-06-30T03:00:00.000Z', 'y' => 24],
        ['x' => '2020-07-01T03:00:00.000Z', 'y' => 21],
        ['x' => '2020-07-02T03:00:00.000Z', 'y' => 24],
        ['x' => '2020-07-03T03:00:00.000Z', 'y' => 20],
        ['x' => '2020-07-04T03:00:00.000Z', 'y' => 14],
        ['x' => '2020-07-05T03:00:00.000Z', 'y' => 6],
        ['x' => '2020-07-06T03:00:00.000Z', 'y' => 46],
        ['x' => '2020-07-07T03:00:00.000Z', 'y' => 37],
        ['x' => '2020-07-08T03:00:00.000Z', 'y' => 32],
        ['x' => '2020-07-09T03:00:00.000Z', 'y' => 18],
        ['x' => '2020-07-10T03:00:00.000Z', 'y' => 8],
        ['x' => '2020-07-11T03:00:00.000Z', 'y' => 33],
        ['x' => '2020-07-12T03:00:00.000Z', 'y' => 2],
        ['x' => '2020-07-13T03:00:00.000Z', 'y' => 55],
        ['x' => '2020-07-14T03:00:00.000Z', 'y' => 52],
        ['x' => '2020-07-15T03:00:00.000Z', 'y' => 19],
        ['x' => '2020-07-16T03:00:00.000Z', 'y' => 39],
        ['x' => '2020-07-17T03:00:00.000Z', 'y' => 39],
        ['x' => '2020-07-18T03:00:00.000Z', 'y' => 5],
        ['x' => '2020-07-19T03:00:00.000Z', 'y' => 23],
        ['x' => '2020-07-20T03:00:00.000Z', 'y' => 48],
        ['x' => '2020-07-21T03:00:00.000Z', 'y' => 53],
        ['x' => '2020-07-22T03:00:00.000Z', 'y' => 46],
        ['x' => '2020-07-23T03:00:00.000Z', 'y' => 48],
        ['x' => '2020-07-24T03:00:00.000Z', 'y' => 28],
        ['x' => '2020-07-25T03:00:00.000Z', 'y' => 53],
        ['x' => '2020-07-26T03:00:00.000Z', 'y' => 11],
        ['x' => '2020-07-27T03:00:00.000Z', 'y' => 25],
        ['x' => '2020-07-28T03:00:00.000Z', 'y' => 35],
        ['x' => '2020-07-29T03:00:00.000Z', 'y' => 74],
        ['x' => '2020-07-30T03:00:00.000Z', 'y' => 43],
        ['x' => '2020-07-31T03:00:00.000Z', 'y' => 26],
        ['x' => '2020-08-01T03:00:00.000Z', 'y' => 27],
        ['x' => '2020-08-02T03:00:00.000Z', 'y' => 36],
        ['x' => '2020-08-03T03:00:00.000Z', 'y' => 43],
        ['x' => '2020-08-04T03:00:00.000Z', 'y' => 80],
        ['x' => '2020-08-05T03:00:00.000Z', 'y' => 40],
        ['x' => '2020-08-06T03:00:00.000Z', 'y' => 73],
        ['x' => '2020-08-07T03:00:00.000Z', 'y' => 34],
        ['x' => '2020-08-08T03:00:00.000Z', 'y' => 36],
        ['x' => '2020-08-09T03:00:00.000Z', 'y' => 24],
        ['x' => '2020-08-10T03:00:00.000Z', 'y' => 100],
        ['x' => '2020-08-11T03:00:00.000Z', 'y' => 59],
        ['x' => '2020-08-12T03:00:00.000Z', 'y' => 46],
        ['x' => '2020-08-13T03:00:00.000Z', 'y' => 67],
        ['x' => '2020-08-14T03:00:00.000Z', 'y' => 80],
        ['x' => '2020-08-15T03:00:00.000Z', 'y' => 33],
        ['x' => '2020-08-16T03:00:00.000Z', 'y' => 62],
        ['x' => '2020-08-17T03:00:00.000Z', 'y' => 80],
        ['x' => '2020-08-18T03:00:00.000Z', 'y' => 60]
    ];

    public static function dadosPontaGrossa()
    {
        //Converte as datas no formato suportado pelo gráfico JS
        $dados = array_map(function ($dado) {
            return ['x' => (new Carbon($dado['x']))->format("Y-m-d"), 'y' => $dado['y']];
        }, self::$dadosPG);

        // Gera um JSON para o gráfico
        return json_encode($dados);
    }

    public static function total()
    {
        return array_sum(array_map(function ($dado) {return $dado['y']; }, self::$dadosPG ));
    }
}
