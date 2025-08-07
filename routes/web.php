<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkingController;
use App\Http\Middleware\CheckPegawai;
use Cassandra\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(
    [
        'middleware' => ['isAuth'],
        'prefix' => 'working',
        'as' => 'working.'
    ],
    function () {
        Route::get('/', [WorkingController::class, 'index'])->name('index');
        Route::get('/response_json', [WorkingController::class, 'index_response_json'])->name('index_response_json');
        Route::get('/{id}', [WorkingController::class, 'show'])->name('show');
        Route::post('/', [WorkingController::class, 'store'])->name('store');
        Route::put('/{id}', [WorkingController::class, 'update_put'])->name('update_put');
        Route::patch('/{id}', [WorkingController::class, 'update_patch'])->name('update_patch');
        Route::delete('/{id}', [WorkingController::class, 'destroy'])->name('delete');
    }
);


Route::get('/career', function () {
    return 'Mendaftar sebagai pegawai di perusahaan kami!';
});
Route::get('login', function () {
    return 'Halaman Login';
})->name('login');

// TODO: Bermain dengan request =====================================================
Route::get('/request', function (Request $request) {
    $user = $request->all();
    // dd($user);
    return $user['nik'];
});

Route::post('/request', function (Request $request) {
    return $request->all();
});

Route::post('/request/input', function (Request $request) {
    // * dapat all data
    // $input = $request->input();

    // * dapat all data color
    $input = $request->input('color.*');
    return $input;
});

Route::post('/request/query', function (Request $request) {
    // * cuma dapat data query nya saja / data dari url
    $query = $request->query('gender');
    return $query;
});

Route::post('/request/date', function (Request $request) {
    // * untuk format date
    $date = $request->date('schedule', 'Y-m-d', 'Asia/Jakarta')->addDay()->addMinutes(30)->addHours(3)->format('Y-m-d H:i:s');
    return $date;
    // return $date->diffForHumans();
});

// * mengecek keberadaan property
Route::post('/request/has', function (Request $request) {
    if ($request->has(['name', 'email'])) {
        return 'Data ada, Login Berhasi';
    }

    if ($request->hasAny(['name', 'email'])) {
        return 'Datanya ada bang!';
    }

    return 'gagal';
});

// * mengecek ke tidak adaan property
Route::post('/request/missing', function (Request $request) {
    if ($request->missing(['name', 'email'])) {
        return 'Datanya tidak ada bang';
    }

    return 'Datanya ada bang!';
});

Route::post('/request/merge', function (Request $request) {
    // * bakalan ngereplace yang ada, mau datanya awalnya null atau tidak, ada atau tidak
    $merge = $request->merge(['email' => 'budi@gmail.com']);
    return $request->input();
});


// TODO: Bermain dengan response =======================================================
// * Melakukan response header
Route::get('/response', function () {
    return response('Selamat Datang', 201)->header('Content-Type', 'text/plain');
});

// * Melakukan response cache Control
Route::get('response/cache_control', function () {
    return Response::make('this page allow to cache controle', 200)->header('Cache-Control', 'public, max_age=2628000');
});

// * Melakukan response cache Control bisa juga dilakukan via middleware route, yang dimana harus snake case di dalam route middleware
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () {

    Route::get('/home_1', function () {
        return 'Home dari halaman 1 ' . request()->source_url;
    })->name('home');

    Route::get('/home_2', [HomeController::class, 'index'])->name('home_2');

    Route::get('/response/privacy', function () {
        return 'Privacy Page';
    });

    Route::get('/response/terms', function () {
        return 'Terms Page';
    });

    // * add cookie: Memanfaatkan Cookies untuk menyimpan akses terakhir
    Route::get('/response/cookie', function () {
        $user = 'admin';
        return response('Hello World Cookie', 200)->cookie('user', $user);
    });

    // * remove cookie: menghapus cookie yang sudah digunakan
    Route::get('/response/rm_cookie', function () {
        // return response('Logout and remove cookie', 200)->withoutCookie('user');

        // * redirect ke halaman home - by route
        // return redirect()->route('home', ['source_url' => 'logout'])->withoutCookie('user');

        // * redirect ke halaman home - by controller
        return redirect()->action([HomeController::class, 'index'], ['source_url' => 'logout'])->withoutCookie('user');
    });
});

Route::get('/external', function () {
    // * redirect ke halaman luar
    // return redirect()->away('https://laravel.com');

    // * redirect ke halaman home/halaman yang sama - by route
    // return redirect()->route('home');

    // * bisa redirect ke route, controller, maupun external
    return redirect('https://laravel.com');
    // return redirect('/');
});

