<?php

namespace App\Http\Controllers;

use App\Models\Salarie;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return Salarie::with('service')->get();
    }
}
