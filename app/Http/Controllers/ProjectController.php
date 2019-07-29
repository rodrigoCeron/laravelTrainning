<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();
        return view('projects.index', compact('projects'));
    }
    public function show(Project $project)
    {
        return view('projects.show',compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',

        ]);

        Project::create($fields);

        return redirect()->route('projects.index');
    }
}
