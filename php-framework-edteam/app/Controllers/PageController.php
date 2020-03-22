<?php
namespace App\Controllers;

use App\Libraries\View;
use App\Models\Page;

class PageController {

    public function index(){
        $datos = Page::All();
        View::render('pages/ejemplo', compact('datos'));
    }
}