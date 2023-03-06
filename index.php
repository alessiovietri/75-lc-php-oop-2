<?php

/*

    Abitazione
    |
    -- Villa
    -- Palazzo
    -- Tenda
    -- Camper
    -- Appartamento
    -- Baita

*/

require_once __DIR__ . '/Models/Abitazione.php';
require_once __DIR__ . '/Models/Appartamento.php';
require_once __DIR__ . '/Models/Villa.php';

$abitazioneUno = new Abitazione('Via Roma, 1, 00100, Roma, Italia', 4, 6);

// echo $abitazioneUno->firmaAcquirente;
// echo $abitazioneUno->datoSegretoAbitazione;

var_dump($abitazioneUno);
$abitazioneUno->stampaDatiPrivate();
var_dump($abitazioneUno->calcolaConsumi(100));

$appartamentoUno = new Appartamento(
    $abitazioneUno->indirizzo,
    $abitazioneUno->nFinestre,
    $abitazioneUno->nPorte,
    22,
    5
);

var_dump($appartamentoUno);
$appartamentoUno->stampaDatiProtected();
var_dump($appartamentoUno->calcolaConsumi(100));

$villaUno = new Villa('Via Roma, 1, 00100, Roma, Italia', 4, 6);

var_dump($villaUno);
var_dump($villaUno->calcolaConsumi(100));
