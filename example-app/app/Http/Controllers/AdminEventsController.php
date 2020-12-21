<?php


namespace App\Http\Controllers;


class AdminEventsController extends Controller
{
    public function index()
    {
        return view('admin.events.all');

    }


    public function create()
    {
        return view('admin.events.create');

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
