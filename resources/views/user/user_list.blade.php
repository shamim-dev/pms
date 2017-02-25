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
<?php 
           if(Auth::guard('admin')->user()->username=="admin"){ ?>

    <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><a class="btn btn-primary btn-sm" href="" style="margin-top: 5px; float: left;">Change Password</a><h3 style="width: 77%; float: left;"><strong>User List </strong> </h3><a class="btn btn-primary btn-sm" href="{{url('dashboard/user/create')}}" style="margin-top: 5px;">Add New User</a></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email </th>
                <th>Passwprd </th>
                <th>Status</th>
                
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>SL </th>
                <th>Full Name</th>
                <th>Username  </th>
                <th>Email </th>
                <th>Passwprd </th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
        <tbody>
       
        
           

         @foreach($users as $user)
           
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>***********</td>
                <td>{{$user->created_at}}</td>
                <td align="center">
                    <a href="{{action('UserController@edit',$user->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('UserController@destroy',$user->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
           
            
         @endforeach
            <?php }else{ ?>

            <div class="panel-heading no-collapse" style="text-align: center; background-color: #EDEDED; height: 40px;"><a class="btn btn-primary btn-sm" href="" style="margin-top: 5px; float: left;">Change Password</a><h3 style="width: 77%; float: left;"><strong style="color: #2A3F54;">Hi, {!!Auth::guard('admin')->user()->username!!}! your User Info </strong> </h3><!-- <a class="btn btn-primary btn-sm" href="{{url('dashboard/user/create')}}" style="margin-top: 5px;">Add New User</a> --></div>
    <div class="panel-body"><table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>SL </th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email </th>
                <th>Passwprd </th>
                <th>Status</th>
                
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        
        <tbody>
       

            <tr>
                <td>{!!Auth::guard('admin')->user()->id!!}</td>
                <td>{!!Auth::guard('admin')->user()->name!!}</td>
                <td>{!!Auth::guard('admin')->user()->username!!}</td>
                <td>{!!Auth::guard('admin')->user()->email!!}</td>
                
                <td>***********</td>
                <td>{!!Auth::guard('admin')->user()->created_at!!}</td>
                <td align="center">
                    <a href="{{action('UserController@edit',Auth::guard('admin')->user()->id)}}" class="btn btn-warning ">Edit</a>
                    <a href="{{action('UserController@destroy',Auth::guard('admin')->user()->id)}}" class="btn btn-danger ">Delete</a>
                </td>
            </tr>
            <?php } ?>
            
               </tbody>
    </table></div>

</div>

</div><!-- /top tiles -->
 @endsection()