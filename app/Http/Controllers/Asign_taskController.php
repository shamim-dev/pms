<?php
namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_task;
use App\im_developer;
use App\im_asign_task;

class Asign_taskController extends Controller
{
    public function index()
    {       
        $asign_tasks = im_asign_task::all();
        return view('asign_task/asign_task_list',compact("asign_tasks"));
    }

    
    public function create()
    {   
        $developers = im_developer::all()->where('status',0); 
        $tasks = im_task::all()->where('status','Open');
        $asign_tasks = DB::table('im_asign_tasks')->get();
        return view('asign_task/add_asign_task',compact('asing_tasks','developers','tasks'));
                                           
    }

    public function store(Request $request)
    {   
        im_asign_task::create(Request::all());
        return redirect('/dashboard/asigntask/index');
    }

    // public function show($id)
    // {
    //     //
    // }

    public function edit($id)
    {   
        $developers = im_developer::all(); 
        $tasks = im_task::all();
        $asign_tasks=im_asign_task::find($id);
        return view('asign_task/asign_task_edit',compact('asign_tasks','developers','tasks'));
    }

    
    public function update(Request $request, $id)
    {
        im_asign_task::find($id)->update(Request::all());
        return redirect('/dashboard/asigntask/index');
    }

    
    public function destroy($id)
    {
       im_asign_task::find($id)->delete();
       return redirect('/dashboard/asigntask/index');
    }
}
