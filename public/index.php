<?php
// public/index.php

require_once '../app/core/Router.php';  // Load the router
require_once '../app/controllers/HomeController.php';  // Load the homepage controller

// Initialize the Router and direct to the HomeController
$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);