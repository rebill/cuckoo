<?php
/**
 * Part of the Cuckoo framework.
 *
 * @package    Cuckoo
 * @version    0.1
 * @author     Rebill
 * @license    MIT License
 * @copyright  2013 Rebill
 * @link       https://github.com/rebill/cuckoo
 */

namespace cuckoo\core;


class Controller {

    public function render($view, $data)
    {
        try {
            extract((array)$data);
            require(SP . 'app/views/' . $view . '.php');
        } catch(Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

}