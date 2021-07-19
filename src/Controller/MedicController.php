<?php


namespace App\Controller;


class MedicController extends Controller
{
    public function medic()
    {

        echo $this->twig->render("medic.twig", [
            "" => "",
        ]);
    }
}
