<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectData;
class ProjectDataController extends Controller
{
    // public function index()
    // {
    //     $projects = ProjectData::all();
    //     return view('projects.index', ['projects' => $projects]);
    // }
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        if($search){
            $projects = ProjectData::where('project_name', 'LIKE', '%'.$search.'%')->get();
        } else {
            $projects = ProjectData::all();
        }
    
        return view('projects.index', compact('projects'));
    }
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|max:255',
            'project_goal' => 'nullable',
            'project_features' => 'nullable',
            'performance_measure'=>'nullable',
            'new_users_monthly'=>'nullable',
            'tasks_added_monthly'=>'nullable',
            'annual_users'=>'nullable',
            'monthly_tasks'=>'nullable',
            'recommendations'=>'nullable',
            'risk_assessment'=>'nullable',
            'completion_date'=>'nullable',
            'supported_devices'=>'nullable',
            'payment_status'=>'nullable',
            // تعريف قواعد الصحة لبقية الحقول هنا
        ]);

        ProjectData::create($validatedData);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function show($id)
    {
        $project = ProjectData::findOrFail($id);
        return view('projects.show', ['project' => $project]);
    }

    public function edit($id)
    {
        $project = ProjectData::findOrFail($id);
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'project_name' => 'required|max:255',
            'project_goal' => 'nullable',
            'project_features' => 'nullable',
            // تعريف قواعد الصحة لبقية الحقول هنا
        ]);

        ProjectData::whereId($id)->update($validatedData);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = ProjectData::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
