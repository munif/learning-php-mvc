<?php

namespace App\Controllers;

use App\Core\View;

class AgendaController {

    public function index() {
        View::render("agenda/index.html");
    }
    
    public function show() {
        echo "agenda/show";
    }

}