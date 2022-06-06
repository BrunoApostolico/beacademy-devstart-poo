<?php

declare(strict_types=1);

namespace App\Controller;

class ProductController{
    public function indexAction(): void
    {
        echo 'Olá Mundo! Estou dentro de uma action, dentro do ProductController';
    }
}