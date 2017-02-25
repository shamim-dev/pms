@extends('admin.layout')
@section('a')
<div class="right_col" role="main" style="padding-top: 75px;">

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

    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;">
        <h3><strong>Asign Task List</strong> </h3>
    </div>
<div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Task Name</th>
                <th>Developer Name</th>
                <th>Submition Date</th>
                <th>Status</th>
                <th>Ramark</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL </th>
                <th>Task Name</th>
                <th>Developer Name</th>
                <th>Submition Date</th>
                <th>Status</th>
                <th>Ramark</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($asign_tasks as $asign_task)
            <tr>
                <td>{{$asign_task->id}}</td>
                <td>{{$asign_task->tasks_id}}</td>
                <td>{{$asign_task->developers_id}}</td>
                <td>{{$asign_task->submit_date}}</td>
                <td>{{$asign_task->status}}</td>
                <td>{{$asign_task->remark}}</td>
                <td align="center">
                    <a href="{{action('Asign_taskController@edit',$asign_task->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('Asign_taskController@destroy',$asign_task->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>

</div>
</div><!-- /top tiles -->
 @endsection()