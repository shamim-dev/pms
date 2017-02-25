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
                 
                    <h2 align="center" > <strong>Add New Task To Project</strong> </h2>
                     <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" action="store" method="post" class="form-horizontal form-label-left" novalidate="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Select Project </strong><span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           
                          <select name="project_id" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                           <?php
                           foreach($projects as $project){
                           echo "<option value='$project->id'>$project->name</option>";
                           }
                         ?>
                           </select>
                        </div>
                      </div>



                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Select Under Module</strong> <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           
                          <select name="module_id" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                           <?php
                           foreach($modules as $module){
                           echo "<option value='$module->id'>$module->name</option>";
                           }
                         ?>
                           </select>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Define Task Name</strong> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="name" placeholder="Add New Task" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><strong>Task Code</strong><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="code" class="date-picker form-control col-md-7 col-xs-12"> 
                        </div>
                      </div>

                     



                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><strong>Start Time</strong> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="last-name" name="start_at" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12"><strong>End Time </strong></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" name="end_at" class="form-control col-md-7 col-xs-12" type="date" name="phone">
                        </div>
                      </div>
                     
                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><strong>Description </strong><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="birthday" name="description" class="date-picker form-control col-md-7 col-xs-12"></textarea>  
                        </div>
                      </div>


                  <input type="hidden" name="status" value="Open">
                  <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Status: </strong>  <span class="required">*</span>
                            </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                  
                          <select  name="status" class="form-control selectpicker" >
                             <option value='Open'>Open</option>
                         </select>
                            
                     </div>
                                   </div>
                   -->


                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                            </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <label><strong>Is It Last Task ?</strong></label>
                            <label class="form-check-inline">

                            <input  type="radio" name="a"  value="1">Yes
                            </label>
                            <label class="form-check-inline">
                            <input class="form-check-input" type="radio" name="a"  value="0"> No
                            </label>
                            </div>
                        </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        <div class="row">
                           <div class="col-sm-4 col-md-4 col-lg-4"></div>
                           <div class="col-sm-4 col-md-4 col-lg-4">
                           <button type="submit" class="btn btn-success">Submit</button>
                           <button   class="btn btn-primary">Cancel</button></div>
                        <div class="col-sm-4"></div>

                        </div>


                      
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
 @endsection()