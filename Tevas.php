<?php
require __DIR__.'./Senelis.php';
class Tevas extends Senelis
{
    public static $posakis2 = '/\opapa/\\';

    public function __construct()
    {
        parent::__construct();
        echo 'Tevo konstruktorius';
    }

    public function tvarka(){
        echo '<h1>tvarka</h1>';
        echo $this->posakis;
        echo self::$posakis2;
        echo static::$posakis2;

    }
}