<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class SerkomController extends Controller
{
    public function tambahData(){
        Menu::create([
            'nama_tiket' => 'vip2',
            'deskripsi' => 'ksadkls',
            'harga' => 200.000,
            'status' => 'tersedia',
            'ppn' => 'jdlsd'
        ]);
        return "Data berhasil ditambahkan";
    }

    public function tampilData() {
        $serkom = Menu::all();
        return view('serkom', compact('serkom'));
    }

    public function hapusData($id){
        $serkom = Menu::find($id);
        $serkom->delete();
        return redirect()->back();
    }
}