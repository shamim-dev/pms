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
        <h3><strong>Submited Task List</strong> </h3>
    </div>
<div class="panel-body">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Task Name</th>
                <th>Developer Name</th>
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
                <th>Status</th>
                <th>Ramark</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($submit_tasks as $submit_task)
            <tr>
                <td>{{$submit_task->id}}</td>
                <td>{{$submit_task->tasks_id}}</td>
                <td>{{$submit_task->developers_id}}</td>
                <td>{{$submit_task->status}}</td>
                <td>{{$submit_task->remark}}</td>
                <td align="center">
                    <a href="{{action('Submit_taskController@edit',$submit_task->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('Submit_taskController@destroy',$submit_task->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>
</div>

</div>
</div><!-- /top tiles -->
 @endsection()