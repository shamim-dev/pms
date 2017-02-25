@extends('admin.layout')
@section('a')
<div class="right_col" role="main">
<div class="x_panel">

                 
                    <h2 align="center" > <strong>Update/Edit Module</strong> </h2>
                     <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" action="{{action('ModuleController@update',$modules->id)}}" method="post" class="form-horizontal form-label-left" novalidate="">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="id" id="first-name" required="" readonly value="{{$modules->id}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Code:<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="code" id="first-name" required="required" value="{{$modules->name}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Module Name <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="text" name="name" id="first-name" required="required" value="{{$modules->name}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Name: <span class="required">*</span>
                           </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <select name="project_id" class="form-control"">
                                  
                                  @foreach($projects as $project)
                                    <option value='{{$project->id}}'>{{$project->name}}</option>";
                                  @endforeach
                              </select>
                          </div>
                        </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="birthday" name="start_date" class="date-picker form-control col-md-7 col-xs-12"> {{$modules->description}}</textarea>  
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Start Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{$modules->start_date}}" type="date" name="start_date">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{$modules->end_date}}" type="date" name="end_date">
                        </div>
                      </div>

        <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Duration: <span class="required">*</span>
               </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="duration" id="first-name" value="{{$modules->duration}}" required="required" class="form-control col-md-7 col-xs-12">
          </div>
      </div>



      <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Status: <span class="required">*</span>
                           </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="status" class="form-control"">   
                          <option value="Open">Select Project Status</option>
                          <option value='Open' selected="selected">Open</option>
                          <option value='Not Assigned'>Not Assigned</option>
                          <option value='Assigned'>Assigned</option>
                          <option value='Hold'>Hold</option>
                          <option value='Completed'>Completed</option>
                          <option value='In-progress'>In-progress</option>
                          
                    </select>
                              </select>
                          </div>
                        </div>
      
     

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        <div class="row">
                           <div class="col-sm-4 col-md-4 col-lg-4"></div>
                           <div class="col-sm-4 col-md-4 col-lg-4"><button   class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button></div>
                           <div class="col-sm-4"></div>

                        </div>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
 @endsection()