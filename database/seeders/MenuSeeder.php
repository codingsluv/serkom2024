<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = new Menu();
        $menu->nama_tiket = 'VIP';
        $menu->deskripsi = 'Menu VIP';
        $menu->harga = 50000;
        $menu->status = 'Tersedia';
        $menu->gambar = '';
        $menu->save();
    }
}