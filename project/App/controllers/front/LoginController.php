<?php
namespace App\controllers\front;

use App\Core\Controller;

class LoginController extends Controller {
    public function login() {
        $this->view('front/login', ['title' => 'Bienvenue']);
    }
}
