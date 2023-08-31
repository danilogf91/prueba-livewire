<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataRequest;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Imports\DataImport;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check() && Project::count() > 0) {

            $message = ProjectResource::collection(Project::query()->orderBy('id', 'desc')->paginate(10));
            // dd($message);
            return view('projects', compact('message'));
        }

        // return response([
        //     'error' => 'Unauthorized',
        //     'message' => 'You are not authorized to access this resource.'
        // ], 401);
        return view('projects', ['message' => 'NO CONTEN']);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateDataRequest $request)
    {

        $file = $request->file('file');

        Excel::import(new DataImport($request->id), $file);

        return response([
            'message' => "Operation successfull",
            'request' => $request->id
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProjectRequest $request)
    {
        if ($this->verifyUserRole()) {

            $project = Project::create($request->all());
            return response(new ProjectResource($project), 201);
        }
        return response([
            'error' => 'Unauthorized',
            'message' => 'You are not authorized to access this resource.'
        ], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        dd($project);
        if ($this->verifyUserRole()) {
            return new ProjectResource($project);
        }

        return response([
            'error' => 'Unauthorized',
            'message' => 'You are not authorized to access this resource.'
        ], 401);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if ($this->verifyUserRole()) {

            $project = Project::findOrFail($id);

            $project->name = $request->name;
            $project->pda_code = $request->pda_code;
            $project->rate = $request->rate;
            $project->state = $request->state;
            $project->investments = $request->investments;
            $project->justification = $request->justification;
            $project->start_date = $request->start_date;
            $project->finish_date = $request->finish_date;
            $project->save();

            return response([
                'message' => "Project {$project->name} updated successfull",
            ], 201);
        }

        return response([
            'error' => 'Unauthorized',
            'message' => 'You are not authorized to access this resource.'
        ], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($this->verifyUserRole()) {

            $project->delete();
            return response([
                'message' => "project {$project->name} deleted",
                // 'test' => auth()->check(),
                // 'request' => $request->all(),
                // 'user' => Auth::check(),
                'user' => Auth::user()->user_name,
            ], 201);
        }

        return response([
            'message' => "Operation not valid",
            'user' => Auth::user()->user_name,
        ], 204);
    }
}
