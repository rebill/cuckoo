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


class Router
{

    public function dispatch($path)
    {
        $controller = '\app\controllers\\';
        $action = 'run';

        $path = trim($path, '/');
        if ($path === '') {
            // Default controller
            $controller .= 'Index';
        } else {
            $segments = explode('/', $path);
            $controller .= ucfirst($segments[0]);
            // Look for a RESTful method, or try the default run()
            if (sizeof($segments) > 1) {
                $action = $segments[1];
            }
        }

        $controller = new $controller();
        $controller->$action();

    }

}