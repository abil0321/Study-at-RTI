<?php

use App\Http\Middleware\CheckPegawai;
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


Route::group(['middleware' => ['isAuth'], 'prefix' => 'movie', 'as' => 'movie.'], function () use ($movies) {
    Route::get('/', function () use ($movies) {
        return $movies;
    });
    Route::post('/', function () use ($movies) {
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
    Route::put('/{id}', function ($id) use ($movies) {
        $movies[$id]['name'] = request('name');
        $movies[$id]['year'] = request('year');
        $movies[$id]['genre'] = request('genre');

        return $movies;
    });
    Route::patch('/{id}', function ($id) use ($movies) {
        $movies[$id]['name'] = request('name');
        $movies[$id]['year'] = request('year');
        $movies[$id]['genre'] = request('genre');

        return $movies;
    });
    Route::delete('/{id}', function ($id) use ($movies) {
        unset($movies[$id]);
        return $movies;
    });
    Route::get('/{id}', function ($id) use ($movies) {
        return $movies[$id];
    })->middleware(['isPegawai']);
});


Route::get('/career', function () {
    return 'Mendaftar sebagai pegawai di perusahaan kami!';
});
Route::get('login', function () {
    return 'Halaman Login';
})->name('login');
