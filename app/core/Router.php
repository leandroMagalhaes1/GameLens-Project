<?php
// app/core/Router.php

class Router {
    public function dispatch($url) {
        // Remove slashes no início e no final da URL
        $url = trim($url, '/');
    
        // Divide a URL em partes
        $urlParts = explode('/', $url);
    
        // Define o nome do controlador padrão
        if (!empty($urlParts[0])) {
            $controllerName = ucfirst($urlParts[0]) . 'Controller';
        } else {
            $controllerName = 'HomeController';
        }
    
        // Define a ação padrão
        if (!empty($urlParts[1])) {
            $action = $urlParts[1];
        } else {
            $action = 'index';
        }
    
        // Verifica se o arquivo do controlador existe
        if (file_exists("../app/controllers/$controllerName.php")) {
            require_once "../app/controllers/$controllerName.php"; // Inclui o controlador
    
            // Cria uma instância do controlador
            $controller = new $controllerName();
    
            // Verifica se a ação existe no controlador
            if (method_exists($controller, $action)) {
                $controller->$action(); // Chama o método da ação
            } else {
                $this->error404(); // Ação não encontrada, exibe 404
            }
        } else {
            $this->error404(); // Controlador não encontrado, exibe 404
        }
    }
    
    

    // Show a 404 error page
    private function error404() {
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
