<?php

class Abitazione {

    public $indirizzo;
    public $nFinestre;
    public $nPorte;
    protected $firmaAcquirente = 'Ciao';
    private $datoSegretoAbitazione = 'Riesco a stampare';

    function __construct($_indirizzo, $_nFinestre, $_nPorte)
    {
        if (strlen($_indirizzo) > 5) {
            $this->indirizzo = $_indirizzo;
        }
        else {
            $this->indirizzo = 'INDIRIZZO SCONOSCIUTO';
        }

        $this->nFinestre = $_nFinestre;
        $this->nPorte = $_nPorte;
    }

    public function calcolaConsumi($totale) {
        if ($totale > 360) {
            return $totale * 4;
        }
        else {
            return $totale * 2;
        }
    }

    public function stampaDatiPrivate()
    {
        echo '<h1>';
        echo $this->datoSegretoAbitazione;
        echo '</h1>';
    }

}