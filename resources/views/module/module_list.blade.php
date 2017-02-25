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

    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><h3><strong>Module List</strong> </h3></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Cone</th>
                <th>Module</th>
                <th>Project Name</th>
                <th>Star Date</th>
                <th>End Date</th>
                <th>Duration</th>
                <th>Asingn On</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL </th>
                <th>Cone</th>
                <th>Module</th>
                <th>Project Name</th>
                <th>Star Date</th>
                <th>End Date</th>
                <th>Duration</th>
                <th>Asingn On</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($modules as $module)
            <tr>
                <td>{{$module->id}}</td>
                <td>{{$module->code}}</td>
                <td>{{$module->name}}</td>
                <td>{{$module->project_id}}</td>
                <td>{{$module->start_date}}</td>
                <td>{{$module->end_date}}</td>
                <td>{{$module->duration}}</td>
                <td>{{$module->asigned}}</td>
                <td>{{$module->status}}</td>

                <td align="center">
                    <a href="{{action('ModuleController@edit',$module->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('ModuleController@destroy',$module->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()