<?php
namespace App\Controller;

use App\DB\Connection;
use App\View\View;
use App\Entity\Product;

class ProductController
{
    public function index($id)
    {
        $id = (int)$id[0];

        $pdo = Connection::getInstance();

        $view = new View('site/product.phtml');

        $view->product = (new Product($pdo))->find($id);
        
        return $view->render();
    }
}