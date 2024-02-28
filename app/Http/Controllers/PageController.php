<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    
    public function about(){
        return 'Nama: John Doe<br>NIM: 1234567890';
    }
    public function articles($id) {
        return "Halaman Artikel dengan Id $id";
}
}