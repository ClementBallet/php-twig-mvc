<?php
namespace App\Controllers;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Extra\String\StringExtension;
use Twig\Loader\FilesystemLoader;

abstract class Controller {
    private ?Environment $twig = null;

    public function renderTwig ($view, $data) {
        if (is_null($this->twig)) {
            $loader = new FilesystemLoader( dirname(__DIR__) . '/templates');
            $this->twig = new Environment($loader, array(
                "debug" => true
            ));
            $this->twig->addExtension(new DebugExtension());
            $this->twig->addExtension(new StringExtension());
        }

        return $this->twig->render($view, $data);
    }
}