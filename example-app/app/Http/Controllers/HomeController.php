<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('teacher-subject');
    }
    public function teacherSubjectMarks()
    {
        return view('teacher-subject-marks');
    }
    public function teacherEvents()
    {
        return view('teacher-events');
    }
    public function allPerformance()
    {
        return view('all-performance');
    }
    public function subjectPerformance()
    {
        return view('subject-performance');
    }

}
