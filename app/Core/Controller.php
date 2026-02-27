<?php

namespace App\Core;

class Controller
{
    protected function render(string $view, array $data = [])
    {
        // Extraer variables para la vista
        extract($data);

        require_once __DIR__ . '/../Views/layout/header.php';
        require_once __DIR__ . '/../Views/' . $view . '.php';
        require_once __DIR__ . '/../Views/layout/footer.php';
    }
}