<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return 'Nama: John Doe<br>NIM: 1234567890';
    }
}
