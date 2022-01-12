<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showhome(){
        return view('frontview.home');
    }

    function showabout(){
        return view('frontview.about');
    }

    function showcontact(){
        return view('frontview.contact');
    }

    function showlogin(){
        return view('login');
    }

    function showregistrasi(){
        return view('registrasi');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showpelanggan(){
        return view('backview.pelanggan');
    }

    function showproduct(){
        return view('backview.product');
    }

    function product($product, $hargaMin = 2000, $hargaMax = 30000){
        if($product == 'sosis bakar'){
            echo "Tampilkan Produk Sosis Bakar";
        }elseif($product == 'Bakso'){
            echo "Produk Bakso";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }

}