<?php
require 'vendor/autoload.php';

(isset($_GET['p'])) ? $page = $_GET['p'] : $page = "home";

switch ($page) {
    case 'medic':
        $hc = new \App\Controller\MedicController();
        $hc->medic();
        break;
    case 'form':
        $fc = new \App\Controller\FormController();
        $fc->form();
        break;
    default:
        $hc = new \App\Controller\MedicController();
        $hc->medic();
}
