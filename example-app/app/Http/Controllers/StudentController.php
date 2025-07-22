<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Student/index'); //link the index file path
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student/create'); //link the create file path
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());               //crete form all details are request to dd format
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Student/show'); //link the show file path
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('student/edit'); //link the edit file path
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





