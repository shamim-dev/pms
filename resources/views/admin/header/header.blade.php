<div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="height: 1100px;">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>ITS's PMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General Menues</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home <span class=""></span></a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Companies <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{url('dashboard/company/create')}}">Add Company</a></li>
                      <li><a href="{{url('dashboard/company/index')}}">Company List</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Projects <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <legend style="padding-left: 10px; border-color: #374A5E; margin-bottom: 0px;">Project</legend>
                      <li><a href="{{url('dashboard/project/create')}}">New Project</a></li>
                      <li><a href="{{url('dashboard/project/index')}}">View Project</a></li>
                      <legend style="padding-left: 10px; border-color: #374A5E; margin-bottom: 0px;">Module</legend>
                      <li><a href="{{url('dashboard/module/create')}}">Add  Module</a></li>
                      <li><a href="{{url('dashboard/module/index')}}">Module List</a></li>
                      <legend style="padding-left: 10px; border-color: #374A5E; margin-bottom: 0px;">Task </legend>
                      <li><a href="{{url('dashboard/task/create')}}">Add  Task</a></li>
                      <li><a href="{{url('dashboard/task/index')}}">Task List</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-bar-chart-o"></i> Developer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('dashboard/developer/create')}}">Add Developer</a></li>
                      <li><a href="{{url('dashboard/developer/index')}}">Developer List</a></li>
                      
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-table"></i> Dev Unit <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('')}}">Create Unit</a></li>
                      <li><a href="{{url('')}}">View Unit</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-clone"></i>Task Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('/dashboard/asigntask/create')}}">Assign Task</a></li>
                      <li><a href="{{url('/dashboard/submittask/create')}}">Submit Task</a></li>
                      <li><a href="{{url('Asign_taskController@index')}}">Task Reports</a></li>
                    </ul>
                  </li>

                  <li><a href="{{url('dashboard/user/index')}}"><i class="fa fa-user"></i>User Manager <span class=""></span></a>

                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" style="margin-bottom: 15px;">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              
              <!-- Button trigger modal for calculator -->
              <a type="button"  data-toggle="modal" data-target="#myModal" title="calculator">
               <span class="fa fa-hospital-o" style="color: yellow;" aria-hidden="true"></span>
  
                </a>

              <a data-toggle="tooltip" href="{!!url('logout')!!}" style="color: red;" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->

          



          </div>
        </div>