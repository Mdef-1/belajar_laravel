<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama barang'=>'meja','merk'=>'mebel jokowi','harga'=>'1000'],
            ['nama barang'=>'kursi','merk'=>'mebel jokowi','harga'=>'1000'],
            ['nama barang'=>'patung','merk'=>'mebel jokowi','harga'=>'1000'],
            ['nama barang'=>'asbak','merk'=>'mebel jokowi','harga'=>'1000'],
            ['nama barang'=>'talenan','merk'=>'mebel jokowi','harga'=>'1000']
        ];
         //masukan database
         DB::table('barangs')->insert($barang);
    }
}
