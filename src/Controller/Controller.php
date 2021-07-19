<?php

namespace App\Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    public $twig;

    public function __construct()
    {
        // Twig setup
        $loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . "/templates");
        $this->twig = new Environment($loader, [
            'charset' => 'utf-8',
            'cache' => false, // __DIR__ . '/tmp'
        ]);

        // Add session variables to twig if necessary
        // $twig->addGlobal('session', $_SESSION);
    }

}
