<?php
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\DashboardModel;

class DashboardController extends Controller {
    public function article(): void {
        $articles = DashboardModel::getAll();
        $this->view('front/article', ['articles' => $articles]);
    }
}