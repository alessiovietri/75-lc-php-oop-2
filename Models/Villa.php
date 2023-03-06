<?php

require_once __DIR__.'/Abitazione.php';

class Villa extends Abitazione {

    public $giardino;
    public $mansarda;

    public function calcolaConsumi($tot) {
        if (4 % 2 == 0) {
            return "Sono dentro villa";
        }
        else {
            return "Sono sempre dentro villa";
        }
    }

}