<?php

namespace app\Controllers;

use Machine\Routing\Controller as BaseController;
use duncan3dc\Laravel\BladeInstance as frameworkEngine;


/**
 * Class Controller
 * @package App\Controllers
 */
class Controller extends BaseController
{
    /**
     * @param $view
     * @param array $data
     * @return string
     */
    public static function make($view, array $data = [])
    {
        $View = new frameworkEngine(config('view.resource'), config('view.compiled'));

        if (file_exists(config('view.resource'). DIRECTORY_SEPARATOR .$view.'.blade.php')){
            return $View->render($view, $data);
        }else{

            http_response_code(404);
            return false;
            //return $View->render('errors/404', $data);

        }
    }

}