<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $project = auth()->user()->projects()->where('completed',false)->first();
        if (! $project){
            $project = auth()->user()->projects()->create();
        }
        return redirect()->route('dashboard.projects.purchase.create',['project'=>$project]);
    }
}
