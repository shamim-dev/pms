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
                 
                <h2 align="center" > <strong>Add New Developer</strong> </h2>
                <div class="x_title">
                    
                 <div class="clearfix"></div>
                 </div>
                <div class="x_content">
                <br>

              <!--start form--> 
                   
                <form class="form-horizontal" action="{{action('DevelopersController@update',$deves->id)}}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Code</strong></label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                          <input name="code" class="form-control" type="text" value="<?php echo $deves->code ?>">
                  </div>
                  </div>
                </div>

                <div class="form-group"> 
                  <label class="col-md-4 control-label"><strong>Developer Name</strong> </label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-text-width"></i></span>
                      <input name="name" class="form-control" type="text" value="<?php echo $deves->name ?>">
                  </div>
                </div>
                </div>
                
                <div class="form-group"> 
                  <label class="col-md-4 control-label"><strong>Developer Language</strong> </label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                      <select name="dev_langs_id" class="form-control selectpicker" value="<?php echo $deves->dev_langs_id ?>">
                         <option>Select Developers Language</option>
                         <option value='0'>PHP</option>
                         <option value='1'>C++</option>
                         <option value='2'>Java</option>
                         <option value='3'>Paython</option>
                         <option value='4'>Graphics</option>
                         <option value='5'>Web Design</option>
                         <option value='6'>Oracle</option>
                         <option value='7'>.NET</option>
                    </select>
                  </div>
                </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Designation</strong></label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                           <textarea class="form-control" name="designation" placeholder="Job Description" ><?php echo $deves->designation ?></textarea>
                  </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Job Description</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="job_desc" placeholder="Job Description" ><?php echo $deves->job_desc ?></textarea>
                    </div>
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Email</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" class="form-control" type="text" value="<?php echo $deves->email ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Phone</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input name="phone" class="form-control" type="text" value="<?php echo $deves->phone ?>">
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-4 control-label"><strong>Status</strong> </label>  
                   <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="status" class="form-control selectpicker" value="<?php echo $deves->status ?>">
                          <option value="0">Select Developers Status</option>
                          <option value='0'>Active</option>
                          <option value='1'>Inactive</option>              
                    </select>
                    </div>
                  </div>
                </div> 
                
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

