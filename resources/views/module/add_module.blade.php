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
                 
	<h2 align="center" > <strong>Add New Module</strong> </h2>
	<div class="x_title">
		<div class="clearfix"></div>
	</div>
		
    <div class="x_content"><br>
        <form id="demo-form2" data-parsley-validate="" action="store" method="post" class="form-horizontal form-label-left" novalidate="">
        <input type="hidden" name="_token" value="{{csrf_token()}}">


             <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Select Project :</strong> <span class="required">*</span>
				 </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
				    <select name="project_id" class="form-control">
	            	
	              		@foreach($projects as $project)
	             		<option value='{{$project->id}}'>{{$project->name}}</option>";
	              		@endforeach
          			</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Module Name:</strong> <span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="name" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

<label><strong>This Project Module is Complete? </strong></label>
		<label class="form-check-inline">
<input class="form-check-input" type="radio" name="proj_status_id"  value="1"> Yes
</label>
<label class="form-check-inline">
<input class="form-check-input" type="radio" name="proj_status_id"  value="0"> No
</label>
				</div>

			</div>

			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Code: </strong><span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="code" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
				</div>
			</div>
			
			
			
			
			
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Description:</strong><span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<textarea name="description" id="first-name" required="required" class="form-control col-md-7 col-xs-12"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Start Date:</strong><span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="date" name="start_date" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>End Date:</strong> <span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="date" name="end_date" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
				</div>
			</div>

            
            <div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><strong>Status: </strong><span class="required">*</span>
				  </label>
				<div class="col-md-6 col-sm-6 col-xs-12">

				<select name="status" class="form-control selectpicker" >
                         
                          <option value='Open'>Open</option>
                    </select>
					
				</div>
			</div>


			
			
			
			

			<div class="ln_solid"></div>
		    <div class="form-group " >
				<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 " align="center">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4"></div>
						<div class="col-sm-4 col-md-4 col-lg-5">
							<button   class="btn btn-primary">Cancel</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
						<div class="col-sm-4 col-lg-3"></div>
					</div>
				</div>
		    </div>
			
		</form>
    </div>
  </div>  
</div>
 @endsection()