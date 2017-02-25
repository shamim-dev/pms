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
<div class="panel pane-default" "> 


    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><h3><strong><span style="color: maroon;">Task List</span></strong> </h3></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead style="background-color: #FBEAB7">
            <tr>
                <th>SL </th>
                <th>Task Name</th>
                <th>Project Name</th>
                <th>Task Code</th>
                <th>Module Name</th>
                <th>Start Time </th>
                <th>End Time </th>
                <th>Duration</th>
                <th>Description</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tfoot style="background-color: #CC9">
            <tr>
               <th>SL </th>
               <th>Task Name</th>
               <th>Project Name</th>
               <th>Task Code</th>
               <th>Module Name</th>
               <th>Start Time </th>
               <th>End Time </th>
               <th>Duration</th>
               <th>Description</th>
               <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->name}}</td>
                <td>{{$task->project_id}}</td>
                <td>{{$task->code}}</td>
                <td>{{$task->module_id}}</td>
                <td>{{$task->start_at}}</td>
                <td>{{$task->end_at}}</td>
                <td>{{$task->duration}}</td>
                <td>{{$task->description}}</td>
                <td style="text-align: center;">

        <?php  if($task->status=='Open')
               {
                echo '<span style="color: #000; background-color: yellow;  padding:0px 5px;"> Open New</span>' ;
                }elseif($task->status=='Not Assigned'){
                    echo '<span style="color: #fff; background-color: #4BA4DF; borde padding:0px 5px;"> Not Assigned</span>' ;

                }elseif($task->status=='Assigned'){
                    echo '<span style="color: #fff; background-color: #6AC62E; padding:0px 5px;"> Assigned</span>' ;

                }elseif($task->status=='Hold'){
                    echo '<span style="color: #fff; background-color: red; padding:0px 5px;"> Hold </span>' ;

                }elseif($task->status=='Completed'){
                    echo '<span style="color: #fff; background-color: #3FC1A5; padding:0px 5px;"> Completed</span>' ;

                }elseif($task->status=='In-progress'){
                    echo '<span style="color: #fff; background-color: #52D9EF; padding:0px 5px;"> In-progress</span>' ;
                }

        ?>

                </td>
                <td align="center">
                    <a href="{{action('TaskController@edit',$task->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('TaskController@destroy',$task->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            @endforeach
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()