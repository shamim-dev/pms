@extends('admin.layout')
@section('a')
<div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count" >

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-radius:0px 0px 0px 30px  ; border: 3px solid white; border-right: 0px;">
              <span class="count_top"><i class="fa fa-user" style="color: green;"></i> Total Developers</span>
             
              <div class="count green" >{{session()->get('total_devs')}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Available &nbsp; </i> <i style="font-weight: bold;">( {{session()->get('available_devs')}} )</i></span>
             
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-radius:0px 30px 0px 0px  ; border: 3px solid white;border-left: 0px;">
              <span class="count_top"><i class="fa fa-clock-o" style="color: red;"></i> Active Developers</span>
              <div class="count">{{session()->get('active_devs')}}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>All are busy Now</i></span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-top: 5px solid white;   border-radius:0px 30px  ; border: 3px solid white;">
              <span class="count_top"><i class="fa fa-briefcase"></i> Total Projects</span>
              <div class="count green">{{session()->get('total_pro')}}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i> In-progress </i>

              <i><strong>( {{session()->get('running_pro')}} )</strong></i> </span>

            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-radius:0px 30px 0px 30px  ; border: 3px solid white;">
              <span class="count_top"><i class="fa fa-building"></i> 
              Total Modules</span>
              <div class="count">{{session()->get('total_mod')}}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>In-progress </i> <i><strong>( {{session()->get('running_mod')}} )</strong></i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-radius:0px 0px 0px 30px  ; border: 3px solid white; border-right: 0px;">
              <span class="count_top"><i class="fa fa-tasks" style="color: #F4A72D;"></i> Total Tasks</span>
              <div class="count">{{session()->get('total_task')}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Not Assigned </i> <i><strong>( {{session()->get('not_assign_task')}} )</strong></i> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count" style="border-radius:0px 30px 0px 0px  ; border: 3px solid white; border-left: 0px;">
              <span class="count_top"><i class="fa fa-tasks " style="color: green;" ></i> Total Assigned Tasks</span>
              <div class="count">{{session()->get('assigned_task')}}</div>
              <span class="count_bottom"><i ><i class="fa fa-sort-asc"></i><span style="color: #4BA4DF;"><strong> Completed task</span></i>

              <i>( {{session()->get('Completed_task')}} )</strong></i> </span>
            </div>
          </div>
          <!-- /top tiles -->



          <div class="col-md-8" >
                            <section class="panel">
                              <header class="panel-heading" style="background-color: #EDEDED; text-align: center; border: 0px;">
                                  <strong>Projects In Progress</strong>
                            </header>
                            <div class="panel-body table-responsive" style="border: 0px;">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>SL</th>
                                      <th>Project</th>
                                      <th>Code</th>
                                      <th>Price</th>
                                      <th>Start from</th>
                                      <th>Deadline</th>
                                      <th>Status</th>
                                      <!-- <th>Progress</th> -->
                                  </tr>
                              </thead>
                              <?php $i=1; ?>
                              @foreach($projects as $project)
                              <tbody>
                                <tr>
                                  <td><?php echo $i; $i++?></td>
                                  <td>{{$project->name}}</td>
                                  <td>{{$project->code}}</td>
                                  <td>{{$project->price}}</td>
                                  <td>{{$project->start_date}}</td>
                                  <td>{{$project->end_date}}</td>

                                  <td>
                                @if($project->status == 'New')
                                 <span class="label label-info"><a style="color: white;" href="{{url('dashboard/project/index')}}">New</a></span>
                                @elseif($project->status == 'In-progress')
                                 <span class="label label-danger"><a style="color: white;" href="{{url('dashboard/project/index')}}">In-progress</a></span>
                                @elseif($project->status == 'Completed')
                                 <span class="label label-success"><a style="color: white;" href="{{url('dashboard/project/index')}}">Completed</a></span>
                                 @elseif($project->status == 'Started')
                                 <span class="label label-warning"><a style="color: white;" href="{{url('dashboard/project/index')}}">Started</a></span>
                                 @elseif($project->status == 'Pending')
                                 <span class="label label-warning"><a style="color: white;" href="{{url('dashboard/project/index')}}">Pending</a></span>
                                 @elseif($project->status == 'Hold')
                                 <span class="label label-danger"><a style="color: white;" href="{{url('dashboard/project/index')}}">Hold</a></span>
                                 @endif
                                 </td>
                                  <!-- <td><span class="badge badge-info">50%</span></td> -->

                              </tr>

                              @endforeach 
                          </tbody>

                      </table>
                      <div class="paginatios col-lg-12" align="center">
                        {!! $projects->render()!!}
                      </div>
                  </div>
              </section>          
          </div> 




          <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading" style="background-color: #EDEDED; border: 0px; text-align: center;">
                                                Notifications
                                            </header>
                                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="panel-body" id="noti-box" style="overflow: hidden; width: auto; height: 400px; border: 0px;">

                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Oh snap!</strong> You Have 1 Task(s)  Under Holding Please See details.
                                                    </div>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Well done!</strong> You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                    </div>


                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                                                    </div>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Well done!</strong> You successfully read this important alert message.
                                                    </div>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                                    </div>
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong>Warning!</strong> Best check yo self, you're not looking too good.
                                                    </div>



                                                </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 5px; z-index: 99; right: 1px; height: 213.333px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 5px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                        </section>



                      </div>





          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />





 @endsection()