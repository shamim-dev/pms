<?php
namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_module;
use App\im_project;

class ModuleController extends Controller
{
    public function index()
    {       
        $modules = im_module::all();
        return view('module/module_list',compact("modules","projects"));
    }

    
    public function create()
    {   

     /*$projects=DB::table('im_projects')
            ->join('im_modules', 'im_projects.id', '=', 'im_modules.project_id')
            ->select('im_projects.id', 'im_projects.name')
            ->where('im_modules.proj_status_id', 0)
            ->get();*/


        $projects= DB::table('im_projects')->where('status','New')->get();
        return view('module/add_module')->with('projects',$projects);
    }


    public function store(Request $request)
    {
        im_module::create(Request::all());


        return redirect('/dashboard/module/index');



        
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
       $projects= DB::table('im_projects')->get();
       $modules=im_module::find($id);
       return view('module/module_edit')->with('modules',$modules)->with('projects',$projects);
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
        im_module::find($id)->update(Request::all());
       return redirect('/dashboard/module/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       im_module::find($id)->delete();
       return redirect('/dashboard/module/index');
    }
}
