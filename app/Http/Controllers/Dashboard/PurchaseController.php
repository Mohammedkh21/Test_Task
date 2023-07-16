<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PurchaseRequest;
use App\Models\File;
use App\Models\Project;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PurchaseController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Project $project)
    {
        $suppliers = Supplier::all();
        $operation = 'store';
        return view('dashboard.project.purchase.index',compact(['suppliers','operation','project']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PurchaseRequest $request,Project $project)
    {
        $file_path = $request->file('price')->store('purchase/files','public');
        $purchase = $project->purchase()->create($request->except('price'));
        $purchase->file()->create(['path'=>$file_path,'name'=>$request->file('price')->getClientOriginalName()]);
        return response()->json(['status'=>true],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $purchase = $project->purchase;
        $suppliers = Supplier::all();
        return view('dashboard.project.purchase.index',compact(['suppliers','purchase','project']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PurchaseRequest $request, Project $project)
    {
        $purchase = $project->purchase;
        Storage::disk('public')->delete($purchase->file->path);
        $file_path = $request->file('price')->store('purchase/files','public');
        $purchase->file()->update(['path'=>$file_path,'name'=>$request->file('price')->getClientOriginalName()]);
        $project->purchase()->update($request->except(['price','_token','_method']));
        return response()->json(['status'=>true],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
