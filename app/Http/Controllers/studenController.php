<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\student;
use DB;
use Session;
class studenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crs=DB::table('course')->get();
        $ses=DB::table('session_tbl')->get();

       return view('add_stdn')
         ->with('crs',$crs)
         ->with('ses',$ses);
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

      /*  $this->validate($request, [
        'name' => 'required',
        'f_name' => 'required'
    ]);*/
        student::create(Request::all());
          

     Session::flash('flash_message', 'Data successfully added!');
        
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$result=student::all();
        //return view('stdn\show_stdn',['data'=>$result]);

      $result=DB::table('students')->paginate(3);
      return view('stdn\show_stdn')->with('data',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $crs=DB::table('course')->get();
        $ses=DB::table('session_tbl')->get();
        //$data=App\student::find($id);
        //$data=student::find(Request::all($id));
        $data=DB::table('students')->find($id);

        return view('edit_stdn')->with('crs',$crs)
         ->with('ses',$ses)->with('stdn',$data);
       
    }


    public function delete($id)
    {
       DB::table('students')->where('id',$id)->delete();
       Session::flash('flash_message', 'Data successfully Deleted!');
       return redirect()->back();
       
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
