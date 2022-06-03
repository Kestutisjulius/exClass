<?php

require __DIR__.'./Tevas.php';

class Vaikas extends Tevas
{
    public function __construct()
    {
        parent::__construct();
        echo 'Vaiko konstruktorius';
    }

    public function betvarke(){
        echo '<h3>betvarke</h3>';
    }
}