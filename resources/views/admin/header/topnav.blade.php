<div class="top_nav" >
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {!!Html::image('img/avatar1_small.jpg')!!} <i>{!!Auth::guard('admin')->user()->name!!} </i>
                    <span class=" fa fa-cog"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="ja"> Profile</a></li>
                    <li>
                      <a href="{{action('UserController@edit', Auth::guard('admin')->user()->id)}}">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{!!url('logout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>



                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell fa-lg"></i>
                    <span class="badge bg-red">0</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="fa fa-group" style="color: red;" ></span>
                        <span>
                          <span> Todays Deadline Tasks </span>
                          <span class="time">( 0 )</span>
                        </span>
                        
                      
                      </a>
                    </li>

                    <li>
                      <a>
                        <span class="fa fa-user" style="color: red;" ></span>
                        <span>
                          <span> New Developer </span>
                          <span class="time">( 0 )</span>
                        </span>
                        
                      
                      </a>
                    </li>

                    <li>
                      <a>
                        <span class="fa fa-briefcase" style="color: red;" ></span>
                        <span>
                          <span> New Project </span>
                          <span class="time">( 0 )</span>
                        </span>
                        
                      
                      </a>
                    </li>
                    
                    
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts </strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>


                <li  >
                  <a href="javascript:;"   >
                    <span class="" ng-bind="theTime" style="font-size: 18px; font-weight: bold; color: #1ABB9C; "></span>
                    
                  </a>
                 
                </li>

              </ul>
            </nav>
          </div>
        </div>
