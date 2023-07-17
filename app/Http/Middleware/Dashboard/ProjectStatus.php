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
        $project = $request->route('project');
        $type =  $route_path[count($route_path)-2];
        $route = null;

        if ($type == 'purchase' ){
            $action = $project->purchase ? 'edit' : 'create';
            $route = 'purchase.'.$action;

        }elseif($type == 'finance'){
            if(! $project->purchase){
                $route = 'purchase.create';
            }
            $action = $project->finance ? 'edit' : 'create';
            $route =  $route ?? 'finance.'.$action;

        }elseif($type == 'document'){
            if(! $project->purchase){
                $route = 'purchase.create';
            }elseif(! $project->finance){
                $route = 'finance.create';
            }
            $action = $project->document ? 'edit' : 'create';
            $route =  $route ?? 'document.'.$action;

        }

        if($route)
        {
            \request()->session()->flash('WithoutMiddleware',true);
            return  redirect()->route("dashboard.projects.$route",['project'=>$project]);
        }


        return $next($request);
    }

}
