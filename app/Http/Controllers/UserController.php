<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use DB;
use Session;
use App\im_client;
use App\arsuser;




//use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        $users=arsuser::all();
        /*echo "<pre>";
        print_r($users);
        echo "<pre>";*/
        return view('user/user_list',compact("users"));
    }

    public function create()
    {
       return view('user/add_user');
    }

    public function store(Request $request)
    {
        $post=Request::all();
        $user=array(
               'name'=> $post["name"],
               'username'=> $post["username"],
               'email' => $post["email"],
               'password'=> $post["password"],
               //'password'=> bcrypt($post["password"]),
        );
        arsuser::create($user);
        Session::flash('flash_message', 'Data successfully Saved!');
        return redirect('/dashboard/user/index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
       $users=arsuser::find($id);
        return view('/user/user_edit')->with('users',$users);
    }


    public function update(Request $request, $id)
    {
        $a=arsuser::find($id);
        $a->update(Request::all());
         Session::flash('flash_message', 'Data successfully Updated!');
        return redirect('/dashboard/user/index');
    }



    public function destroy($id)
    {
       arsuser::find($id)->delete();

       Session::flash('flash_message', 'Data successfully Deleted!');
       return redirect('/dashboard/user/index');


    }
}
