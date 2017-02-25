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
                 
	<h2 align="center" > <strong>Asign Task </strong> </h2>
	<div class="x_title">
		<div class="clearfix"></div>
	</div>
		
    <div class="x_content"><br>
    <form id="demo-form2" data-parsley-validate="" action="store" method="post" class="form-horizontal form-label-left" novalidate="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
		
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Task: <span class="required">*</span>
		 </label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		  <select name="tasks_id" class="form-control">
			@foreach($tasks as $task)
     		  <option value='{{$task->id}}'>{{$task->name}}</option>";
      		@endforeach
  	      </select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">To Developer: <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		  <select name="developers_id" class="form-control">
			@foreach($developers as $developer)
     		  <option value='{{$developer->id}}'>{{$developer->name}}</option>";
      		@endforeach
  		  </select>
		</div>
	</div>
	
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Submition Date:<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<input type="date" name="submit_date" id="first-name" required="required" class="form-control col-md-7 col-xs-12" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status:<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<input type="text" name="status" id="first-name" required="required" class="form-control col-md-7 col-xs-12" />
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Remark: <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<textarea name="remark" id="first-name" required="required" class="form-control col-md-7 col-xs-12"></textarea>
		</div>
	</div>

	<div class="ln_solid"></div>
    <div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<button   class="btn btn-primary">Cancel</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
    </div>
	</form>
    </div>
</div>  
</div>
 @endsection()