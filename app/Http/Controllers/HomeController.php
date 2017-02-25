<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\im_developer;
use App\im_project;
use App\im_module;
use App\im_task;

use Session;
use DB;

class HomeController extends Controller
{
    

    public function index()
    {
        $total_devs=count(im_developer::all());
        $active_devs=count(im_developer::all()->where('status', 0));

            session()->put('total_devs', $total_devs);
            session()->put('active_devs', $active_devs);
        $available_devs=$total_devs-$active_devs;

            session()->put('available_devs', $available_devs); 

        $total_pro=count(im_project::all());
        $running_pro=count(im_project::all()->where('status', 'In-progress'));
            session()->put('total_pro', $total_pro);
            session()->put('running_pro', $running_pro);

        $total_mod=count(im_module::all());
        $running_mod=count(im_module::all()->where('status', 'In-progress'));
            session()->put('total_mod', $total_mod);
            session()->put('running_mod', $running_mod);
        
         $total_task=count(im_task::all());
        $assigned_task=count(im_task::all()->where('status', 'Assigned'));
        $Completed_task=count(im_task::all()->where('status', 'Completed'));
            session()->put('total_task', $total_task);
            session()->put('assigned_task', $assigned_task);
            session()->put('Completed_task', $Completed_task);
        $not_assign_task=$total_task-$assigned_task;
            session()->put('not_assign_task', $not_assign_task);



        
        /*$projects = DB::table('im_projects')
            ->join('im_modules', 'im_projects.id', '=', 'im_modules.project_id')
            ->join('im_tasks', 'im_projects.id', '=', 'im_tasks.project_id')
            ->select('im_projects.*', 'im_modules.name as modules', 'im_tasks.name as tasks')
            ->get();*/

    return view('home')->with('projects',  im_project::paginate(6));
           /*$projects=im_project::paginate(3);
           return view('home', compact('projects'));*/
         

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
