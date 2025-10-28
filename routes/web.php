<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contoh');
});

// requests and responses
Route::get('/showform', function () {
    return view ('showform');
});

Route::get('/send-get', function (Requests $request) {
    dump($request->all());
});

Route::post('/send-post', function (Requests $request) {
    dump($request->all());
});

Route::put('/send-put', function (Requests $request) {
    dump($request->all());
});

Route::any('/send-delete', function (Requests $request) {
   if ($request->isMethod('delete')) {
        return 'ini menerima method delete';
   } else {
        return redirect('/showform');
   }
});