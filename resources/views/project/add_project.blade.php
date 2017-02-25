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
                 
                    <h2 align="center" > <strong>Add New Project</strong> </h2>
                     <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>

              <!--start form--> 
                   
                <form class="form-horizontal" action="store" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>

                <div class="form-group"> 
                  <label class="col-md-4 control-label"><strong>Client Name</strong> </label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select name="client_id" class="form-control selectpicker" required="" >
                      <option>Select Your Client Name</option>
                        @foreach($clients as $client)
                         <option value='{{$client->id}}'>{{$client->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Project Code</strong></label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                          <input name="code" class="form-control" type="text">
                  </div>
                  </div>
                </div>

                <div class="form-group"> 
                  <label class="col-md-4 control-label"><strong>Project Name</strong> </label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
                      <input name="name" class="form-control" type="text">
                  </div>
                </div>
                </div>


                <div class="form-group"> 
                  <label class="col-md-4 control-label"><strong>Project Price</strong> </label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                      <input name="price" class="form-control" type="text">
                  </div>
                </div>
                </div>
                
                
                
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Description</strong></label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="description" placeholder="Job Description"></textarea>
                  </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Start Date</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="start_date" class="form-control" type="date">
                    </div>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-md-4 control-label"><strong>End Date</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  <input name="end_date" class="form-control" type="date">
                  
                    </div>
                  </div>
                </div>
                

                <input name="status" value="New" class="form-control" type="hidden">
                <!-- <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Status</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="status" class="form-control selectpicker" >
                          <option value="New">Select Project Status</option>
                          <option value='New'>New</option>
                          <option value='Pending'>Pending</option>
                          <option value='Hold'>Hold</option>
                          <option value='Started'>Started</option>
                          <option value='Completed'>Completed</option>
                          <option value='In-progress'>In-progress</option>
                          <option value='Ready'>Ready</option>
                    </select>
                    </div>
                  </div>
                </div>  -->
                
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4">
                    <input type="submit" class="btn btn-success" name="btnSubmit"/>
                  </div>
                </div>  
              </form>
                  </div>
                </div>
 @endsection()