<?php


namespace App\Http\Controllers;


class AdminSubjectsController extends Controller
{
    public function index()
    {
        return view('admin.subjects.all');

    }


    public function create()
    {
        return view('admin.subjects.create');

    }


    public function store()
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
