<?php

namespace Admin\PhpOop\Controllers\Client;

use Admin\PhpOop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Hieu';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}