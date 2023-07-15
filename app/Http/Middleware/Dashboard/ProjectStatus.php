<?php

namespace App\Http\Middleware\Dashboard;

use App\Models\Project;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('WithoutMiddleware')){
            return $next($request);
        }
        $route_path = explode('/',$request->getPathInfo());
        $project = isset($request->project->user_id) ? $request->project : Project::find($request->project);

        $type =  $route_path[count($route_path)-2];
        \request()->session()->flash('WithoutMiddleware',true);
        $route = '';
        if ($type == 'purchase' ){
            $action = $project->purchase ? 'edit' : 'create';
            return redirect()->route("dashboard.projects.purchase.$action",['project'=>$project]);
        }elseif($type == 'finance'){
//            if(! $project->purchase){
//                $route = route("dashboard.projects.purchase.create",['project'=>$project]);
//            }
            $action = $project->finance ? 'edit' : 'create';
            return redirect()->route("dashboard.projects.finance.$action",['project'=>$project]);
        }elseif($type == 'document'){
//            if(! $project->purchase){
//                $route = route("dashboard.projects.purchase.create",['project'=>$project]);
//            }elseif(! $project->finance){
//                $route = route("dashboard.projects.finance.create",['project'=>$project]);
//            }
            $action = $project->document ? 'edit' : 'create';
            return redirect()->route("dashboard.projects.document.$action",['project'=>$project]);
        }


        return  $next($request);
    }
}
