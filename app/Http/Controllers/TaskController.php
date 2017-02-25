<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_task;
use App\im_module;
use App\im_project;
class TaskController extends Controller
{
   
    public function index()
    {
        /*$tasks=DB::table('im_modules')
            ->join('im_tasks', 'im_modules.id', '=', 'im_tasks.modules.id')
            ->select('im_modules.name as m_name', 'im_modules.id')
            ->get();*/

    
        $tasks=im_task::all();
        return view('task.task_list',compact("tasks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $project=DB::table('im_projects')->where('status','New')->get();
     $modules=DB::table('im_modules')->where('status','Open')->get();
      return view('task.add_task')
          ->with('projects',$project)
          ->with('modules',$modules);;//,compact('projects','modules'));//->with('modules',$modules);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        im_task::create(Request::all());
          

     Session::flash('flash_message', 'Data successfully Saved!');
        
        return redirect('/dashboard/task/index');
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
       $project=DB::table('im_projects')->where('status',0)->get();
       $modules=DB::table('im_modules')->where('status','Open')->get();
       $tasks=im_task::find($id);
        return view('task.task_edit',compact("tasks"))
            ->with('projects',$project)
            ->with('modules',$modules);
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
          
         im_task::find($id)->update(request::all());
         
        /*$tasks=im_task::find($id);
        $tasks->update(request::all());*/
        return redirect('/dashboard/task/index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       im_task::find($id)->delete();
        /*$tasks=im_task::find($id);
        $tasks->delete();*/
         Session::flash('flash_message', 'Data successfully Deleted!');
         return redirect('/dashboard/task/index');


    }
}
