<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentRequest;
use App\Models\Document;
use App\Models\File;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $document = $project->document()->create();
        foreach ($request->file() as $name => $files){
            if(is_array($files)){
                foreach ($files as $file){
                    $file_path = $file->store('documents/'.$name,'public');
                    $document->file()->create(['path'=>$file_path,'type'=>$name,'name'=>$file->getClientOriginalName()]);
                }
            }else{
                $file_path = $files->store('documents/'.$name,'public');
                $document->file()->create(['path'=>$file_path,'type'=>$name,'name'=>$files->getClientOriginalName()]);
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
    public function update(DocumentRequest $request,Project $project)
    {
        $document = $project->document;
        $document->update($request->except(['_token','_method','type']));
        foreach ($request->file() as $name => $files){
            $docFiles = $document->file()->where('type',$name)->get();
            Storage::disk('public')->delete($docFiles->pluck('path'));
            File::whereIn('id',$docFiles->pluck('id'))->delete();
            if(is_array($files)){
                foreach ($files as $file){
                    $file_path = $file->store('documents/'.$name,'public');
                    $document->file()->create(['path'=>$file_path,'type'=>$name,'name'=>$file->getClientOriginalName()]);
                }
            }else{
                $file_path = $files->store('documents/'.$name,'public');
                $document->file()->create(['path'=>$file_path,'type'=>$name,'name'=>$files->getClientOriginalName()]);
            }
        }
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
