<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class WorkingController extends Controller implements HasMiddleware
{
    public $workings;

    public function __construct()
    {
        for ($i = 0; $i < 3; $i++) {
            $this->workings[] = [
                'name' => 'Title ' . $i,
                'year' => 2001,
                'genre' => 'Genre'
            ];
        };
    }


    public static function middleware()
    {
        return [
            // 'isAuth', // * Semuanya
            new Middleware('isPegawai', only: ['show']), // * Hanya show
            // new Middleware('isPegawai', except: ['show']), // * Semuanya kecuali show
        ];
    }

    public function index()
    {
        return $this->workings;
    }

    public function show($id)
    {
        return $this->workings[$id];
    }

    public function store()
    {
        $this->workings[] = [
            'name' => request('name'),
            'year' => request('year'),
            'genre' => request('genre')
        ];
        return $this->workings;
    }

    public function update_put($id)
    {
        $this->workings[$id]['name'] = request('name');
        $this->workings[$id]['year'] = request('year');
        $this->workings[$id]['genre'] = request('genre');

        return $this->workings;
    }

    public function update_patch($id)
    {
        $this->workings[$id]['name'] = request('name');
        $this->workings[$id]['year'] = request('year');
        $this->workings[$id]['genre'] = request('genre');

        return $this->workings;
    }


    public function destroy($id)
    {
        unset($this->workings[$id]);
        return $this->workings;
    }
}
