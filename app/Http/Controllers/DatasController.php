<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasController extends Controller
{
    public function dataku(){
        return view('data-tables');
    }
}
