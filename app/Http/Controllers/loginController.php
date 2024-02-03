<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $request){
        $validatedata = $request->validate([
         'email' => 'required',
         'password' => 'required',
        ]);
 
        $result = Auth::attempt($validatedata);
        if($result){
         return "berhasil login";
        }
         return "gagal login";
        
     }
}
