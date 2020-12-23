<?php


namespace App\Http\Controllers;


use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminGroupsController extends Controller
{
    public function index()
    {
        return view('admin.groups.all')->with('groups', Group::all());

    }


    public function create()
    {
        return view('admin.groups.create')->with('teachers', User::where('role_id', 1)->get());

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:groups',
        ]);

        $user = Group::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin-groups.index');
    }


    public function show($id)
    {
        //
    }


    public function edit( $admin_group)
    {
        $users = User::where('role_id', '2')->get();

        return view('admin.groups.edit')->with('group', Group::find($admin_group))->with('users',$users);
    }


    public function update(Request $request, $id)
    {
        $group = Group::find($id);
        $request->validate([
            'name' => 'required|string',
        ]);

        $group->fill([
            'name' => $request->name,
        ]);
        $group->save();

        return redirect()->route('admin-groups.index');
    }

    public function destroy($id)
    {
        //
    }

    public function addUser($group, $user)
    {
        $user = User::find($user);
        $user->group()->attach($group);
        return redirect()->back();
        //
    }

    public function removeUser($group, $user)
    {
        $user = User::find($user);
        $user->group()->detach();
        return redirect()->back();
        //
    }
}
