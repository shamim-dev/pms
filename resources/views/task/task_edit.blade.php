@extends('admin.layout')
@section('a')
<div class="right_col" role="main">
<div class="x_panel">

                 
                    <h2 align="center" > <strong>Update Task</strong> </h2>
                     <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" action="{{action('TaskController@update',$tasks->id)}}" method="post" class="form-horizontal form-label-left" novalidate="">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Task ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="id" id="first-name" required="" readonly value="{{$tasks->id}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Task Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="name" id="first-name" required="required" value="{{$tasks->name}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Task Code <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" name="code" value="{{$tasks->code}}" class="date-picker form-control col-md-7 col-xs-12">  
                        </div>
                      </div>




                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Module Name <span class="required"></span>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Current Stustas<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                         <select name="status" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                             
                              <option value="Open">Select Project Status</option>
                              <option value='Open' selected="selected">Open</option>
                              <option value='Not Assigned'>Not Assigned</option>
                              <option value='Assigned'>Assigned</option>
                              <option value='Hold'>Hold</option>
                              <option value='Completed'>Completed</option>
                              <option value='In-progress'>In-progress</option>
                          
                    
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Starting Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="Date" id="last-name" name="start_at" required="required" value="{{$tasks->start_at}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ending Date </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{$tasks->end_at}}" type="Date" name="end_at">
                        </div>
                      </div>
                     
                      

                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{$tasks->description}}" type="Date" name="description">
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><span class="required"></span>
                            </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <label>is Task assigned?</label>
                            <label class="form-check-inline">
                            <input class="form-check-input" type="radio" name="assign"  value="1">Yes
                            </label>
                            <label class="form-check-inline">
                            <input class="form-check-input" type="radio" name="assign"  value="0"> No
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
                             <button class="btn btn-primary">Cancel</button>
                          </div>
                           <div class="col-sm-4"></div>

                        </div>


                      
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
 @endsection()