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

require('../Cuckoo.php');

try {
    $router = new \cuckoo\core\Router();
    $router->dispatch(PATH);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "<br>";
}