<?php


namespace App\Http\Controllers;



use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{


    public function index()
    {
        return view('admin.users.all')->with('users', User::all());

    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|unique:users',
            'name' => 'required|string',
            'role_id' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('admin-users.index');
    }

    public function edit($id)
    {
        return view('admin.users.edit')->with('user', User::find($id));

    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'email' => 'required|string',
            'name' => 'required|string',
            'role_id' => 'required|string',
            'password' => 'required|string',
        ]);

        $user->fill([
            'email' => $request->email,
            'name' => $request->name,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('admin-users.index');
    }

    public function destroy($id)
    {
        //
    }

}
