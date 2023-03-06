<?php

require_once __DIR__.'/Abitazione.php';

class Appartamento extends Abitazione {

    public $interno;
    public $piano;

    function __construct($_indirizzo, $_nFinestre, $_nPorte, $_interno, $_piano)
    {
        parent::__construct($_indirizzo, $_nFinestre, $_nPorte);

        $this->interno = $_interno;
        $this->piano = $_piano;
    }

    public function stampaDatiProtected()
    {
        echo '<h1>';
        echo $this->firmaAcquirente;
        echo '</h1>';
    }

}