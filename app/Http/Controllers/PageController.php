<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo 'Selamat Datang';
    }

    public function about(){
        echo 'Faiza Nur Abida 2031710068';
    }

    public function articles(){
        echo 'Halaman artikel dengan ID '.$id;
    }
}
