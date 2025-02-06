<?php
namespace App\controllers\front;

use App\Core\Controller;

class HomeController extends Controller {
    public function home() {
        $this->view('front/home', ['title' => 'Bienvenue']);
    }
}
