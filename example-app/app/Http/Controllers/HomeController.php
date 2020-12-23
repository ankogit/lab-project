<?php

namespace App\Http\Controllers;

use App\Models\AcademicPerformance;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }




    public function teacherSubjects()
    {
        return view('teacher-subject')->with('subjects', Subject::where('teacher_id', Auth::id())->get());
    }
    public function teacherSubjectMarks($id)
    {
        $subject = Subject::find($id);
        return view('teacher-subject-marks')->with('subject', $subject)->with('performance', AcademicPerformance::where('subject_id', $id)->get());
    }
    public function teacherSubjectMarksSave(Request $request, $id)
    {
        $input = $request->request->all();
        unset($input['_token']);
        unset($input['DataTables_Table_0_length']);
        $keys = array_keys($input);
        $data = [];
        foreach ($keys as $key) {
            $el = explode('_', $key);

            $data[] = [
                'subject_id' => $id,
                'user_id' => $el[0],
                'event_id'=> $el[1],
                'points' => $input[$key]
            ];
        }

        AcademicPerformance::where('subject_id', $id)->delete();

        foreach ($data as $row) {
            AcademicPerformance::create($row);
        }
        $subject = Subject::find($id);
        return view('teacher-subject-marks')->with('subject', $subject)->with('performance', AcademicPerformance::where('subject_id', $id)->get());
    }
    public function teacherEvents()
    {
        return view('teacher-events');
    }
    public function allPerformance()
    {
        $ac = AcademicPerformance::where('user_id', Auth::id())->get()->pluck('subject_id')->unique();
        $AcademicPerformance = AcademicPerformance::where('user_id', Auth::id())->get();

        return view('all-performance')->with('subjects', Subject::whereIn('id', $ac)->get())->with('AcademicPerformance', $AcademicPerformance);
    }
    public function subjectPerformance($id)
    {
        $S = Subject::find($id);
        $a = AcademicPerformance::where('user_id', Auth::id())->where('subject_id', $id)->get();
        return view('subject-performance')->with('subject', $S)->with('performance', $a);
    }

}
