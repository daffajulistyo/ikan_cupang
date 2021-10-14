<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cupang;

class CupangController extends Controller
{
    public function home(){
        return view('create');
    }

    public function store(Request $request){
        Cupang::create([
            'jenis_ikan' => $request->jenis_ikan,
            'harga'      => $request->harga,
            'penjual'    => $request->penjual,
            'foto_ikan'  => $request ->foto_ikan
        ]);

        return redirect('/cupangs');
    }

    public function viewCupangs(){
        $cupangs = Cupang::all();
        return view('cupangs', compact('cupangs'));
    }

    public function edit($id){
        $cupang = Cupang::where('id', $id)->first();
        return view ('edit', compact('cupang'));
        
    }

    public function update(Request $request, $id){
        Cupang::where('id', $id)->update([
            //kiri dari db yaitu nama tabel , yang kanan dari identifier pada text input create.blade.php
            'jenis_ikan' => $request->jenis_ikan,
            'harga'      => $request->harga,
            'penjual'    => $request->penjual,
            'foto_ikan'  => $request->foto_ikan
        ]);

        return redirect('/cupangs');
    }

    public function delete($id){
        Cupang::destroy($id);
        return back();
    }

}
