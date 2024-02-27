<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesPage extends Controller
{
    public function sales() {
        return view('sales');
    }
}