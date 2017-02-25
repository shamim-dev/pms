@extends('admin.layout')
@section('a')
<div class="right_col" role="main">
<div class="x_panel">

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
                 
                    <h2 align="center" > <strong>Hi, <i style="color: #169F85;">{{$users->name}}! </i>  update your profile</strong> </h2>
                     <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" 
                    action="{{action('UserController@update',$users->id)}}" method="post" class="form-horizontal form-label-left" novalidate="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="id" id="first-name" required="" readonly value="{{$users->id}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="name" value="{{$users->name}}" id="first-name"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="username" value="{{$users->username}}" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="last-name" name="email" value="{{$users->email}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        <div class="row">
                           <div class="col-sm-4 col-md-4 col-lg-4 "></div>
                           <div class="col-sm-6 col-md-6 col-lg-6">
                            <button type="submit" class="btn btn-success" ><span class=" fa fa-retweet"></span> Update</button>

                           <a href="{{url('dashboard/user/index')}}"  class="btn btn-primary"><span class="fa fa-step-backward" aria-hidden="true" ></span> Cancel</a>
                          
                           </div>
                           <div class="col-sm-3"></div>

                        </div>


                      
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
 @endsection()