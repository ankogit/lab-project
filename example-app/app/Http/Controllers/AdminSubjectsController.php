<?php


namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\Group;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminSubjectsController extends Controller
{
    public function index()
    {
        return view('admin.subjects.all')->with('subjects', Subject::all());

    }


    public function create()
    {
        return view('admin.subjects.create')->with('teachers', User::where('role_id', '1')->get())->with('groups', Group::all())->with('events', Event::all());

    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'group_id' => 'required',
            'teacher_id' => 'required',
        ]);

        if(Subject::where('title', $request->title)->where('group_id', $request->group_id)->where('teacher_id', $request->teacher_id)->get()->count() > 0) {
            return back()->withErrors(["Такой предмет уже существует"]);
        }

        $user = Subject::create([
            'title' => $request->title,
            'group_id' => $request->group_id,
            'teacher_id' => $request->teacher_id,
        ]);
        return redirect()->route('admin-subjects.index');
    }


    public function show($id)
    {
        //
    }


    public function edit( $admin_subject)
    {

        return view('admin.subjects.edit')
            ->with('teachers', User::where('role_id', '1')->get())
            ->with('groups', Group::all())
            ->with('subject', Subject::find($admin_subject))
            ->with('events', Event::all());

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

    public function addEvent($subject, $event)
    {
        $subject = Subject::find($subject);
        $subject->events()->attach($event);
        return redirect()->back();
        //
    }

    public function removeEvent($subject, $event)
    {
        $subject = Subject::find($subject);
        $subject->events()->detach($event);
        return redirect()->back();
    }
}
