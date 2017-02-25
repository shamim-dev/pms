<?php
namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_task;
use App\im_developer;
use App\im_submit_task;

class Submit_taskController extends Controller
{
    public function index()
    {       
        $submit_tasks = im_submit_task::all();
        return view('submit_task/submit_task_list',compact("submit_tasks"));
    }

    
    public function create()
    {   
        $developers = im_developer::all()->where('status',0); 
        $tasks = im_task::all()->where('status','Assigned');
        $submit_tasks = DB::table('im_submit_tasks')->get();
        return view('submit_task/add_submit_task',compact("submit_tasks","developers","tasks"));
                                           
    }

    public function store(Request $request)
    {   
        im_submit_task::create(Request::all());
        return redirect('/dashboard/submittask/index');
    }

    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {
       $developers = im_developer::all(); 
       $tasks = im_task::all();
       $submit_tasks=im_submit_task::find($id);
       return view('submit_task/submit_task_edit',compact("submit_tasks","developers","tasks"));
    }

    
    public function update(Request $request, $id)
    {
        im_submit_task::find($id)->update(Request::all());
        return redirect('/dashboard/submittask/index');
    }

    
    public function destroy($id)
    {
       im_submit_task::find($id)->delete();
       return redirect('/dashboard/submittask/index');
    }
}
