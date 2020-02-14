<?php
namespace App\Controller;

use App\DB\Connection;
use App\View\View;
use App\Entity\Product;

class HomeController
{
    public function index()
    {
        $pdo = Connection::getInstance();

        $view = new View('site/home.phtml');
        
        $view->products =(new Product($pdo))->findAll();

        return $view->render();
    }
}