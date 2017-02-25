@extends('admin.layout')
@section('a')
<div class="right_col" role="main" style="padding-top: 75px;">

<!-- top tiles -->


@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
<div class="panel pane-default" > 


    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><h3><strong>Developer List</strong> </h3></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Code</th>
                <th>Developer Name</th>
                <th>Developer Language </th>
                <th>Designation </th>
                <th>Job_desc</th>
                <th>email</th>
                <th>Phone</th> 
                <th>status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        @foreach($deves as $deve)
            <tr>
                <td>{{$deve->id}}</td>
                <td>{{$deve->code}}</td>
                <td>{{$deve->name}}</td>
                <td>{{$deve->dev_langs_id}}</td>
                <td>{{$deve->designation}}</td>
                <td>{{$deve->job_desc}}</td>
                <td>{{$deve->email}}</td>
                <td>{{$deve->phone}}</td>
                <td>{{$deve->status}}</td>
                <td>
                    <a href="{{action('DevelopersController@edit',$deve->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('DevelopersController@destroy',$deve->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()
