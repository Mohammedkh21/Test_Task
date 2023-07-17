<?php

namespace App\Http\Controllers\Dashboard\project;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function __construct(){
        $this->middleware('project_status', ['only' => ['create', 'edit']]);
    }
    public function __invoke()
    {
        $project = auth()->user()->projects()->where('completed',false)->first();
        if (! $project){
            $project = auth()->user()->projects()->create();
        }
        return redirect()->route('dashboard.projects.purchase.create',['project'=>$project]);
    }
}
