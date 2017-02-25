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


    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><h3><strong>Projects List</strong> </h3></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Code</th>
                <th>Project Name</th>
                <th>Client Id</th>
                <th>Price </th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->code}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->client_id}}</td>
                <td>{{$project->price}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->end_date}}</td>
                <td>{{$project->status}}</td>
                <td>
                <a href="{{action('ProjectsController@edit',$project->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('ProjectsController@destroy',$project->id)}}" class="btn btn-danger ">Delete</a>
                	
                </td>
                
            </tr>
            @endforeach
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()
