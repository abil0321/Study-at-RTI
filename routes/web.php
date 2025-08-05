<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$movies = [];
for ($i = 0; $i < 3; $i++) {
    $movies[] = [
        'name' => 'Title ' . $i,
        'year' => 2001,
        'genre' => 'Genre'
    ];
};

Route::get('/movie', function () use ($movies) {
    return $movies;
});

// * Route POST: membuat data baru
//* note: ada settingan di bootstrap/app.php untuk menjalankan method post nya. Semacam Validasi Baru
Route::post('/movie', function () use ($movies) {
    // * mengambil semua request dari form
    // return request()->all();

    // *mengambil request sesuai dengan attribute/key
    $movies[] = [
        'name' => request('name'),
        'year' => request('year'),
        'genre' => request('genre')
    ];
    return $movies;
});

// *  Route PUT: Edit data by index menggunakan Route PUT
Route::put('/movie/{id}', function ($id) use ($movies) {
    $movies[$id]['name'] = request('name');
    $movies[$id]['year'] = request('year');
    $movies[$id]['genre'] = request('genre');

    return $movies;
});

// *  Route PATCH: Edit data by index menggunakan Route PATCH
Route::patch('/movie/{id}', function ($id) use ($movies) {
    $movies[$id]['name'] = request('name');
    $movies[$id]['year'] = request('year');
    $movies[$id]['genre'] = request('genre');

    return $movies;
});


// * Route Delete: Menghapus data by index
Route::delete('/movie/{id}', function ($id) use ($movies) {
    unset($movies[$id]);
    return $movies;
});
