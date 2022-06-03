<?php

class Senelis
{
    protected $posakis = 'VA va, sakiau /'; //pasilieka sheimoj.
    public static $posakis2 = ' \arklys'; //pasilieka sheimoj.

    public function __construct()
    {
        echo 'Senelio konstruktorius';
    }

    public function pasaka(){
        echo '<h6>Pasaka apie Meskena</h6>';
    }
}