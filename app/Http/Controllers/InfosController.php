<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// class mit web.php-Route verbinden
class InfosController extends Controller
{
    public function show(){
        return 'Hallo aus dem Controller';          //localhost:8000/infos
    }
}
