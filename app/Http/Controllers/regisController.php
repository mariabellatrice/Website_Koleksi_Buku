<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class regisController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validateData["password"] = bcrypt($request->password);
        $result = User::create($validateData);
        if($result){
            return "berhasil registrasi";
        }else{
            return "gagal registrasi";
        }
    }
}
