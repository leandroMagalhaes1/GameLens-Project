<?php
// app/core/Router.php

class Router {
    public function dispatch($url) {
        // Remove leading/trailing slashes and sanitize the URL
        $url = trim($url, '/');
    
        // Define default controller and action
        $controllerName = 'HomeController';
        $action = 'index';
    
        // Parse URL into components
        $urlParts = explode('/', $url);
    
        // If the first part is your project name, skip it
        if (count($urlParts) > 3) {
            // Map the first part after the project name to a controller
            $controllerName = ucfirst($urlParts[3]) . 'Controller';
        }
    
        // Map the second part to an action if it exists
        if (isset($urlParts[3])) {
            $action = $urlParts[3];
        }
        
        // Check if the controller class exists
        if (file_exists("../app/controllers/$controllerName.php")) {
            require_once "../app/controllers/$controllerName.php";
            
            // Instantiate the controller
            $controller = new $controllerName();
    
            // Check if the specified action method exists in the controller
            if (method_exists($controller, $action)) {
                // Call the action method
                $controller->$action();
            } else {
                // Action not found, show 404 page
                $this->error404();
            }
        } else {
            // Controller not found, show 404 page
            $this->error404();
        }
    }
    
    

    // Show a 404 error page
    private function error404() {
        http_response_code(404);
        echo "404 - Page Not Found";
    }
}
