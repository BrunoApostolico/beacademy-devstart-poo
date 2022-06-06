<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController{
    public function indexAction(): void
    {
        echo 'Olá Mundo! Estou dentro de uma action, dentro da CategoryController';
    }
}