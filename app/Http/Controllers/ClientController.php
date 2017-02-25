<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_client;
class ClientController extends Controller
{
    
    public function index()
    {
        $clients=im_client::all();
        return view('company/company_list',compact("clients"));
    }

    public function create()
    {
        return view('company/add_company');
        
    }

    public function store(Request $request)
    {
        im_client::create(Request::all());
          

     Session::flash('flash_message', 'Data successfully Saved!');
        
        return redirect('/dashboard/company/index');
    }

    public function show($id)
    {

        
    }
    public function edit($id)
    {
        $clients=im_client::find($id);
        return view('company/company_edit',compact("clients"));
       
    }

    public function update(Request $request, $id)
    {
        $clients=im_client::find($id);
        $clients->update(request::all());
        return redirect('/dashboard/company/index');
       
    }

    public function destroy($id)
    {
        im_client::find($id)->delete();
         Session::flash('flash_message', 'Data successfully Deleted!');
         return redirect('/dashboard/company/index');


    }
}
