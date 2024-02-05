<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class homeController extends Controller
{
    public function index(){
        return view('dashboard',[
            'buku' => Buku::all(),
        ]);
    }
}
