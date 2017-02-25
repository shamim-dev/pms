<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_project;
use App\im_client;

class ProjectsController extends Controller
{

    public function index()
    {

       $projects=im_project::all();
       return view('project/project_list',compact('projects'));
    }


    public function create()
    {
         $clients=im_client::all();
         return view('project/add_project')->with('clients',$clients);
    }


   
    public function store(Request $request)
    {
        im_project::create(Request::all());
          
        Session::flash('flash_message', 'Data successfully Saved!');
        
        return redirect('/dashboard/project/index');
    }

    public function edit($id)
    {
         $projects=im_project::find($id);
         $clients=im_client::all();
         return view('project/edit_project')->with('clients',$clients)->with('projects',$projects);
       
    }


    public function update(Request $request, $id)
    {
       $projects=im_project::find($id);
       $projects->update(request::all());
        return redirect('/dashboard/project/index');
    }


    public function destroy($id)
    {
        

        $projects=im_project::find($id);
        $projects->delete();
         Session::flash('flash_message', 'Data successfully Deleted!');
         return redirect('/dashboard/project/index');
    }
}
