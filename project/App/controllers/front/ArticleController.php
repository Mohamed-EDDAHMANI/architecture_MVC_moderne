<?php
namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\ArticleModel;

class ArticleController extends Controller {
    public function article(): void {
        $articles = ArticleModel::getAll();
        $this->view('front/article', ['articles' => $articles]);
    }
}
