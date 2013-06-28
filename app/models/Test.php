<?php namespace app\models;

use cuckoo\core\Model;

class Test extends Model
{
    public function __construct()
    {
        echo 'Init Model...', "\n";
    }

}