<?php

namespace App\Config;

use Riyu\Helpers\Errors\ViewError;
use Riyu\Views\Engine;

class View
{
    protected $view;
    protected $data;
    protected $mergeData;
    public function __construct($view = null, $data = [], $mergeData = [])
    {
        $this->view = $view;
        $this->data = $data;
        $this->mergeData = $mergeData;
        $this->render();
    }

    public function render()
    {
        $view = $this->view;
        $data = $this->data;
        $mergeData = $this->mergeData;

        if (is_array($view)) {
            foreach ($view as $v) {
                if (file_exists(__DIR__ . '/../../resources/views/' . $v . '.php')) {
                    require_once __DIR__ . '/../../resources/views/' . $v . '.php';
                    // return;
                    // $engine = new Engine;
                    // $engine->setPath(__DIR__ . '/../../resources/views/');
                    // return $engine->render($v, $data, $mergeData);
                } else {
                    return ViewError::code(404);
                }
            }
            return;
        }

        if (file_exists(__DIR__ . '/../../resources/views/' . $view . '.php')) {
            // $engine = new Engine;
            // $engine->setPath(__DIR__ . '/../../resources/views/');
            // return $engine->render($view, $data, $mergeData);

            require_once __DIR__.'/../../resources/views/'.$view.'.php';
        } else {
            return ViewError::code(404);
        }
    }
}
