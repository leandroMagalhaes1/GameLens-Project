<?php
// app/controllers/HomeController.php

class HomeController {
    public function index() {
        // Load the homepage view
        require '../app/views/home/index.php';
    }
}