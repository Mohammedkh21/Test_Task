<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\Project;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(Project $project)
    {
        $operation = 'store';
        return view('dashboard.project.document.index',compact('project','operation'));
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(DocumentRequest $request,Project $project)
    {
        info($request->all());
        $document = $project->document()->create();
        $file_path = $request->file('last_tax')->store('documents/last_tax','public');
        $document->file()->create(['path'=>$file_path,'type'=>'last_tax']);
        foreach ($request->file('bank_statements') as $file){
             $file_path = $file->store('documents/bank_statements','public');
             $document->file()->create(['path'=>$file_path,'type'=>'bank_statements']);
        }
        if ($request->file('financial_statements')){
            foreach ($request->file('financial_statements') as $file){
                $file_path = $file->store('documents/financial_statements','public');
                $document->file()->create(['path'=>$file_path,'type'=>'financial_statements']);
            }
        }
        if ($request->file('supporting_documents')){
            foreach ($request->file('supporting_documents') as $file){
                $file_path = $file->store('documents/supporting_documents','public');
                $document->file()->create(['path'=>$file_path,'type'=>'supporting_documents']);
            }
        }

        $project->completed = true;
        $project->save();
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
        $document = $project->document;
        return view('dashboard.project.document.index',compact(['document','project']));
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request,Project $project)
    {
        $project->document()->update($request->except(['_token','_method','type']));
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
