<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    // * Menampilkan semua data di halaman index

    public function index(){
        $data = Menu::all();
        return view('layouts.hotel_list', compact('data'));
    }

    // * Pindah halaman saat ingin meng-Create data
    public function create (){
        return view('layouts.hotel_create');
    }

    // * Memvalidasi untuk menginput data ke dalam database
    public function store(Request $request){
        // Menu::create($request->all());
        // if($request->hasFile('gambar')) {
        //     $namaGambar = time() . '.' . $request->gambar->getClientOriginalExtension();
        //     $request->gambar->move('uploads/', $namaGambar);
        //     $request->merge(['gambar' => $namaGambar]);
        // }

        $request->validate([
            'nama_tiket' =>'required',
            'harga' =>'required',
            'deskripsi' =>'required',
            'status' =>'required',
            'gambar' =>'required|image|mimes:jpg,png,jpeg'
        ]);

        $data = new Menu();
        $data->nama_tiket = $request->nama_tiket;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->status = $request->status;
        $data->gambar = $request->gambar;
        $data->save();

        if($request->hasFile('gambar')) {
           $file = $request->file('gambar');
           $extension = $file->getClientOriginalExtension();
           $fileName = time() . '-'.$extension;
           $file->move('uploads/menu', $fileName);
           $data->gambar = $fileName;
        }
        $data->save();
        return redirect()->route('tiket.index')->with('success', 'Data berhasil ditambahkan');
    }

    // * Pindah halaman saat ingin meng-Edit data
    public function edit($id){
        $data = Menu::find($id);
        return view('layouts.hotel_edit', compact('data'));
    }

    // * Memvalidasi untuk mengupdate data ke dalam database
    public function update(Request $request, $id){
        $data = Menu::find($id);
        $data->update($request->all());
        return redirect()->route('tiket.index')->with('success', 'Data berhasil diubah');
    }

    // * Menghapus data di database
    public function destroy($id){
        Menu::destroy($id);
        return redirect()->route('tiket.index')->with('success', 'Data berhasil dihapus');
    }

    // * Menghapus data di halaman show
    public function show($id){
        $data = Menu::find($id);
        return view('layouts.hotel_show', compact('data'));
    }

}
