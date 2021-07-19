<?php

namespace App\Controller;

class FormController extends Controller
{

    public function form()
    {
        echo $this->twig->render('form.twig', []);
    }
}
