<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use DB;
use Session;
use App\im_developer; 

class DevelopersController extends Controller
{

    public function index()
    {
       $deves=im_developer::all();
       return view('developer/developer_list',compact('deves'));

    }

    public function create()
    {
       return view('developer/add_developer');
    }


    public function store(Request $request)
    {
        im_developer::create(Request::all());
        Session::flash('flash_message', 'Data successfully Saved!');
        return redirect('/dashboard/developer/index');
    }


    public function edit($id)
    {
       $deves=im_developer::find($id);
       
       return view('developer/edit_developer',compact('deves'));
    }


    public function update(Request $request, $id)
    {
        $deves=im_developer::find($id);
        $deves->update(request::all());
        return redirect('/dashboard/developer/index');
    }


    public function destroy($id)
    {
        $deves=im_developer::find($id);
        $deves->delete();
         Session::flash('flash_message', 'Data successfully Deleted!');
         return redirect('/dashboard/developer/index');
    }
}
