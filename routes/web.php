<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/siswa', function () {
    $data_siswa = ['keyndra','rido'];

    return view('tampil',compact('data_siswa'));
});

route::get('/home/{nama}/{tempat_lahir}/{jenis_kelamin}/{agama}/{alamat}',function ($nama,$tmpt_l,$jk,$agama,$alamat){
    return "nama : ".$nama."<br>".
           "tempat lahir : ".$tmpt_l."<br>" .
           "jenis kelamin : ".$jk ."<br>".
           "agama : ".$agama."<br>".
           "alamat : ".$alamat."<br>";
});

route::get('hitung/{bilangan1}/{bilangan2}', function ($bilangan1,$bilangan2) {
    $hasil = $bilangan1 + $bilangan2;
    return "bilangan1 = $bilangan1<br>".
        "bilangan2 = $bilangan2<br>".
        "hasil = $hasil<br>";
});

route::get('struk/{nama}/{telepon}/{jenis_barang}/{nama_barang}/{jumlah}/{pembayaran}', function ($nama,$telepon,$jenis_barang,$nama_barang,$jumlah,$pembayaran) {
    
    if ($jenis_barang == "handphone") {
        if ($nama_barang == "poco") {
        $harga = 3000000;
        }elseif ($nama_barang == "samsung") {
        $harga = 5000000;
        }elseif ($nama_barang == "iphone") {
        $harga = 15000000;
        }else {
        echo "barang tidak ada";
        }

        $total = $harga * $jumlah;

        if ($total > 10000000) {
            $cashback = 500000;
            $total= $total - $cashback;
        }else {
            $cashback = 0;
        }
        if ($pembayaran == "transfer") {
            $potongan = 50000;
            $total= $total - $potongan;
        }
    
        return "nama pembeli :".$nama."<br>".
               "telepon:".$telepon."<br><hr>".
               "jenis barang : ".$jenis_barang."<br>".
               "nama barang : ".$nama_barang."<br>".
               "harga : ".number_format($harga)."<br>".
               "jumlah : ".$jumlah."<br><hr>".
               "total : ".number_format($total)."<br>".
               "cashback : ".$cashback."<br>".
               "pembayaran : ".$pembayaran."<br>".
               "potongan : ".number_format($potongan)."<br>".
               "total pembayaran : ".number_format($total)."<br><hr>";
    }

    if ($jenis_barang == "laptop") {
        if ($nama_barang == "lenovo") {
        $harga = 4000000;
        }elseif ($nama_barang == "acer") {
        $harga = 8000000;
        }elseif ($nama_barang == "macbook") {
        $harga = 20000000;
        }else {
        echo "barang tidak ada";
        }

        $total = $harga * $jumlah;

        if ($total > 10000000) {
            $cashback = 500000;
            $total= $total - $cashback;
        }else {
            $cashback = 0;
        }
        if ($pembayaran == "transfer") {
            $potongan = 50000;
            $total= $total - $potongan;
        }
    
        return "nama pembeli :".$nama."<br>".
               "telepon:".$telepon."<br><hr>".
               "jenis barang : ".$jenis_barang."<br>".
               "nama barang : ".$nama_barang."<br>".
               "harga : ".number_format($harga)."<br>".
               "jumlah : ".$jumlah."<br><hr>".
               "total : ".number_format($total)."<br>".
               "cashback : ".$cashback."<br>".
               "pembayaran : ".$pembayaran."<br>".
               "potongan : ".number_format($potongan)."<br>".
               "total pembayaran : ".number_format($total)."<br><hr>";
    }

    if ($jenis_barang == "tv") {
        if ($nama_barang == "toshiba") {
        $harga = 5000000;
        }elseif ($nama_barang == "samsung") {
        $harga = 8000000;
        }elseif ($nama_barang == "LG") {
        $harga = 10000000;
        }else {
        echo "barang tidak ada";
        }
        $total = $harga * $jumlah;

        if ($total > 10000000) {
            $cashback = 500000;
            $total= $total - $cashback;
        }else {
            $cashback = 0;
        }
        if ($pembayaran == "transfer") {
            $potongan = 50000;
            $total= $total - $potongan;
        }
    
        return "nama pembeli :".$nama."<br>".
               "telepon:".$telepon."<br><hr>".
               "jenis barang : ".$jenis_barang."<br>".
               "nama barang : ".$nama_barang."<br>".
               "harga : ".number_format($harga)."<br>".
               "jumlah : ".$jumlah."<br><hr>".
               "total : ".number_format($total)."<br>".
               "cashback : ".$cashback."<br>".
               "pembayaran : ".$pembayaran."<br>".
               "potongan : ".number_format($potongan)."<br>".
               "total pembayaran : ".number_format($total)."<br><hr>";
    }


    

    
});