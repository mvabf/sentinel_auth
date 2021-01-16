<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function earnings() {
        return response()->json(['total_earnings'=>'R$ 87.998,00']);
    }
}
