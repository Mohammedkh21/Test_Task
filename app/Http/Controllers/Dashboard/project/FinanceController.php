<?php

namespace App\Http\Controllers\Dashboard\project;

use App\Http\Controllers\Controller;
use App\Http\Requests\FinanceRequest;
use App\Models\Project;

class FinanceController extends MainController
{
    /**
     * Show the form for creating the resource.
     */
    public function create(Project $project)
    {
        $operation = 'store';
        return view('dashboard.project.finance.index',compact('project','operation'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(FinanceRequest $request ,Project $project)
    {
        $project->finance()->create($request->except('terms'));
        return response()->json(['status'=>true],200);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(Project $project)
    {
        $finance = $project->finance;
        return view('dashboard.project.finance.index',compact(['finance','project']));
    }

    /**
     * Update the resource in storage.
     */
    public function update(FinanceRequest $request,Project $project)
    {
        $project->finance()->update($request->except(['terms','_token','_method']));
        return response()->json(['status'=>true],200);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
