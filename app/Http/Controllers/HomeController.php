<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // TODO: If else, ternary condition, dan switch case
        // $name = "<h1>Home</h1>";
        $user = [
            'name' => 'Muhammad Salsabil',
            'email' => 'sabil@gmail.com',
            'role' => 'admin',
            'category' => 'wfh'
        ];
        return view('home.index', compact('user'));
    }

    public function experience()
    {
        // TODO: Looping, Continue, looping variable, attribute class condition, and include for component
        $experiences = [
            ['title' => 'Programmer Application', 'year' => 2022],
            ['title' => 'Web Developer', 'year' => 2023],
            ['title' => 'Administrator', 'year' => 2024],
            ['title' => 'Administrator Project', 'year' => 2021],
            ['title' => 'Front-end Web Developer', 'year' => 2022],
            ['title' => 'Backend Web Developer', 'year' => 2023],
            ['title' => 'Administrator Program', 'year' => 2024],
            ['title' => 'Junior Web Developer', 'year' => 2021],
        ];
        return view('home.experience', compact('experiences'));
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
        //
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
