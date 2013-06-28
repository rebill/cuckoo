<?php namespace app\controllers;

use cuckoo\core\Controller;

class Index extends Controller
{

    public function run()
    {
        $data = array(
          'name' => 'World'
        );
        $this->render('welcome', $data);
    }
}