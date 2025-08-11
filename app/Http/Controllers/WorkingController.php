<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class WorkingController extends Controller implements HasMiddleware
{
    public $workings;
    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
            $this->workings[] = [
                'name' => 'perusahaan A' . $i,
                'jumlah_p' => 100,
                'lokasi' => 'jawa'
            ];
        }
    }

    public static function middleware()
    {
        return [
            // 'authentication',
            // new Middleware('isPegawai', only: ['show'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->workings;
        // return view('working.index', ['perusahaans' => $data]);
        // return view('working.index', compact('data'))->with([
        //     'title_page' => 'Halaman Working Index'
        // ]);

        return view('working.index')->with([
            'perusahaans' => $data,
            'title_page' => 'Halaman Working Index'
        ]);

        // return response()->json([
        //     'message' => 'List data perusahaan',
        //     'perusahaan' => $data
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->workings[$id];
        return view('working.show', compact('data'))->with([
            'title_page' => 'Halaman Working Show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
