<!DOCTYPE html>
<html lang="en">
  @include('head')
  <body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="https://hackday2020.kz"><img src="{{asset('logo.svg')}}" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>

                        <li class ={{ URL::current() == 'http://127.0.0.1:8000/home' ? 'active' : ''}} ><a href="home"><img src = {{asset('meet3.png')}} width = 28px height = 28px> Events</a></li>
                        <li class ={{ URL::current() == 'http://127.0.0.1:8000/organizations' ? 'active' : ''}}><a href="organizations"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Organizations</span></a></li>
                        <li class ={{ URL::current() == 'http://127.0.0.1:8000/conferences' ? 'active' : ''}}><a href="conferences"><i class="far fa-handshake" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Conference</span></a></li>
                        <li class ={{ URL::current() == 'http://127.0.0.1:8000/projects' ? 'active' : ''}}><a href="projects"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Ideas</span></a></li>
                        <li class ={{ URL::current() == 'http://127.0.0.1:8000/startups' ? 'active' : ''}}><a href="startups"><i class="fa fa-rocket" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Startups</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="add_event" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <div class="row">
                      <h1></h1>

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('footer')
  </body>
</html>
