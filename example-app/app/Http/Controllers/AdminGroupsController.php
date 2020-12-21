<?php


namespace App\Http\Controllers;


class AdminGroupsController extends Controller
{
    public function index()
    {
        return view('admin.groups.all');

    }


    public function create()
    {
        return view('admin.groups.create');

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
