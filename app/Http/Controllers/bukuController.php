<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class bukuController extends Controller
{
    public function index(){
        return view('buku');
    }

    public function store(Request $request){
        $validatedata = $request->validate([
            'judul_buku' => 'required',
            'genre' => 'required',
            'pengarang' => 'required',
        ]);
        $result = Buku::create($validatedata);
        if($result){
            return redirect('/');
        }else{
            return 'gagal menambahkan buku';
        }
    }

    public function edit($id){
        return view('buku_update', [
            "buku" => Buku::where('id', $id)->get(),
        ]);
    }    

    public function update(Request $request, $id){
    $validatedata = $request->validate([
        'judul_buku' => 'required',
        'genre' => 'required',
        'pengarang' => 'required',
    ]);
    $result = Buku::where('id', $id)->update($validatedata);
    if($result){
        return redirect('/');
    }else{
        return 'Data gagal diubah';
    }
   }

   public function destroy($id){
     $result = buku::where('id', $id)->delete();
     if($result){
        return redirect('/');
    }else{
        return 'Data gagal dihapus';
    }
   }
}