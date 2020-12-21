<?php


namespace App\Http\Controllers;


class AdminUsersController extends Controller
{


    public function index()
    {
        return view('admin.users.all');

    }


    public function create()
    {
        return view('admin.users.create');
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
