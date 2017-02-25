@extends('admin.layout')
@section('a')
<div class="container" >
        <div class="content" style="margin-top: 63px; color: #000;  font-size:16px;">
            <div style="margin-left: 120px;"> 

                   
                   <header class="panel-heading" style="font-size: 29px; margin-top:2px;">
                            <i class="icon_document"></i>  Update Student Information 
                                                </header>
                   <hr style="margin-bottom:0px; margin-top:2px; border:1px solid #03C;">
                   <hr style="margin-top:2px; border:2px solid #03C;">
               
<!-- <?php //print_r($stdn); ?> -->
            <div class="row" style="padding: 0px 5px;">
                
               <form action="" method="post" class="form">  
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class=" col-sm-12 col-md-6">
                       <div class="thumbnail familycol"> 

                        <legend style="background-color:#F8F8F8;">
                        
                            <i class="icon_profile"></i> Personal Information
                        </legend>
                        
                        <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <label class="required">Student's Full name <i class="icon_cog"></i></label> 
                                    <input type="text" required name="name" value="{{$stdn->name}}" class="form-control input-sm" placeholder="Full name"  />
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Father's name</label>
                                    <input type="text" required name="f_name" value="{{$stdn->f_name}}" class="form-control " placeholder="Father Name"  />
                                </div>
                                
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Mother's name</label>
                                    <input type="text" required name="m_name" value="{{$stdn->m_name}}" class="form-control input-sm" placeholder="Mother's Name"  />
                                </div>
                            </div>
                                
                                
                                
                            <label class="required">Gender : </label>
                            <label class="radio-inline">
                                <input type="radio"  name="gender" value="Male" id=male />                        
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Female" id=female />                        
                                Female
                            </label>
                            <br>
                            <label class="required">Address</label>
                            <textarea class="form-control input-sm" name="address" rows="3" placeholder="Address">{{$stdn->address}}</textarea>
                            <label class="required">Emai ID</label>
                            <input type="text" required name="email" value="{{$stdn->email}}" class="form-control input-sm"/>
                            <label class="required">Telephone</label>
                            <input type="text" required name="mobile" value="{{$stdn->mobile}}" class="form-control input-sm"/>
                            <label class="required">Institution Name</label>
                            <input type="text" required name="institution" value="{{$stdn->institution}}" class="form-control input-sm"/>
                            <br/>
                        
                    </div>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail familycol">
                    <legend style="background-color:#F7F7F7"><i class="icon_book"></i> Course Information</legend>
                            <div class="row">
                            
                                <div class="col-xs-6 col-md-6">
                                 
                                    <label class="required">Select course name</label>
                                    <select   id="plan" name="crs_id" class="btn btn-default form-control input-sm">
                                    <option value='' style="background-color: #ccc;"  >--Select One--</option>
                                    @foreach($crs as $crsname)
                                    <option value='{{$crsname->id}}'  >{{$crsname->crs_name}}</option>
                                     @endforeach
                                    </select> 
                               
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <label class="required">Select Session  </label>
                                    <select  name="session_id" class="btn btn-default form-control input-sm">
                                    <option value='' style="background-color: #ccc;"  >--Select One--</option>
                                     @foreach($ses as $sesname)
                                    <option value='{{$sesname->id}}' class="">{{$sesname->ses_name}}</option>
                                     @endforeach
                                    </select> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" id="ajaxnotes"></div>
                            </div>
                            <input type="hidden" name="desc" id="desc" />
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <label class="required">Start date:</label>
                                    <input type="date" name="crs_start" class="form-control input-sm datepicker"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="required">Expire date</label>
                                    <input type="date" name="crs_spr" class="form-control input-sm datepicker"/>
                                </div>
                            </div>

                        

                            <div class="row">
                                
                                <div class="col-md-2"></div>
                                
                                <div class="col-md-8" style="margin-top: 10px; border: 1px solid black; background-color: #FFF6D7; text-align: center;">
                                    <label class="required"> <strong>Course  Durations:</strong></label> <strong style="color: green;"> Three Months</strong>
                                    <label class="required"> <strong>&nbsp;&nbsp;&nbsp;&nbsp; Course Fees:</strong></label> <strong style="color: green;"> 5000.00 /-</strong>
                                    <!-- <input type="text" name="" class="form-grouped" /> -->
                                   
                                </div>
                                <div class="col-md-2"></div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                            <label style="display: block; border-bottom: 1px solid #ddd;"></label>
                                </div>
                             </div>
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <label style="color: green;">Paid amount</label>
                                    <input type="text" name="" readonly="" class="form-control input-sm"/>
                                </div>
                                
                                <div class="col-md-6">
                                    <label style="color: red;">Unpaid amount</label>
                                    <input type="text" name="unpaid" readonly="" class="form-control input-sm"/>
                                </div>
                                
                             </div>
                             
                             <div class="row">
                                <div class="col-md-6">
                                    <label >Payment </label>
                                    <input type="text" name="paid_amnt" class="form-control input-sm"/>
                                </div>
                                
                                <div class="col-md-6">
                                    <label >Next installment</label>
                                    <input type="date" name="next_amnt_alert" class="form-control input-sm"/>
                                </div>
                                
                             </div>
                            

                            
                        
                             
                            <span class="help-block">By clicking <em><strong>Submit Form</strong></em>, you agree to our Terms and that you have read our Data Use Policy.</span>
                            <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                               <i class="icon_cloud-upload"></i>&nbsp;&nbsp;&nbsp;&nbsp; Submit Form to cloud</button>
                         
                    </div>
                </div>
                </form> 
          
        

              </div>
           </div>         
       </div>
</div>


 @endsection()
 
 