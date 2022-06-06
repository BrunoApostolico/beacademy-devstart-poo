<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController{
    public function indexAction(): void
    {
        echo '<h1>Olá Mundo! Estou dentro de uma action, dentro do controller</h1>';
    }
}