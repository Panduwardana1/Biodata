<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/request', function(Request $request){

    $file = request('file');
    $nama = request('nama');
    $nim = request('nim');
    $prodi = request('nim');
    $alamat = request('alamat');

    return view('bio.pandu', compact('file','nama', 'nim', 'prodi', 'alamat'));
});
