@extends('admin.layout')
@section('content')
  <body style="background-image:url({{URL::asset('img/bg.jpg')}}); background-size: cover;">

   <!-- <div style="width: 200px; height:300px; background-color: white; float: left; margin-top: 190px; margin-left: 100px;"></div> -->

      <form class="login-form" action="{!!url('login')!!}" method="post" style="border: 7px solid white; border-radius: 10px; margin-top: 130px; ">
      {!!csrf_field()!!}
        <div class="login-wrap">
        <legend align="center" style="text-align: center;"><h3><strong>PMS Login</strong></h3></legend>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div align="center" style="box-shadow: 0px 0px 50px 7px rgba(240,244,245,1); color: red; font-style: italic; font-size: 15px; font-weight: bold;">Username: guest<br>Password: shamim@123</div>
             
            <label class="checkbox" style="padding:0px  30px;">
                <input type="checkbox" value="remember-me" > Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
            <span style="font-size: 12px; color: green; ">Cell : 01814-111176, E-mail:shamim_ctgbd@yahoo.com</span>
            
       
      </form>
    </div>

  </body>
  @endsection()
