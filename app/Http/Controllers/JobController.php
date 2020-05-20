<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Jobs::latest()->get();
        return view('jobs', compact('jobs'));
    }

    public function store()
    {
        Jobs::create([
            'assignment_id' => request('assignments_id'),
            'user_id' => request('user_id'),
            'date' => request('date'),
            'entry_hours' => request('entry_hours'),
            'home_hours' => request('home_hours'),
            'working_hours' => request('working_hours'),
            'problem' => request('problem'),
        ]);
        return redirect()->route('job.index');
    }

    // public function show(Jobs $jobs)
    // {
    //     return view()
    // }
}
