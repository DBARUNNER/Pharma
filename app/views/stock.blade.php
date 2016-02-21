
@extends('layouts.main')




@section('title')
Sistan Pharma/stock
@stop





@section('sidbar')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>
                    
                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="{{ URL::route('import-get')}}" >
                          <i class="fa fa-desktop"></i>
                          <span>Import</span>
                      </a>
                     <!--  <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul> -->
                  </li>

                  <li class="sub-menu">
                      <a href="{{URL::route('sales-get')}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Sales</span>
                      </a>
                      <!-- <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul> -->
                  </li>
                   <li class="sub-menu">
                      <a class="active" href="{{URL::route('stock-get')}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Stock</span>
                      </a>
                  </li>

                   <li class="sub-menu">
                      <a href="{{URL::route('employee-get')}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Employee</span>
                      </a>
                  </li>

                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Daily Payment</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="{{URL::route('login-get') }}">Login</a></li>
                          <li><a  href="{{URL::route('lock-get') }}">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->


@stop


@section('content')
  <div id="stock-tab" class="col-md-10 col-sm-10">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{{ URL::asset('assets/img/image.jpg') }}">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="{{ URL::asset('assets/img/image.jpg') }}">
        </div>
        <div class="card-info"> <span class="card-title">Pamela Anderson</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Stock Status</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Medicine Status</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <div class="panel panel-default filterable">
            <div class="panel-heading" id ="table-panel" >
              <h2 class="panel-title">Stock Info</h2>
              <div class="pull-right btn-group">

               <!-- Tools Button Start -->
                <button id="btn-tools" class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#"><i class="fa fa-print"></i> Print </a></li>
                  <li><a href="#"><i class="fa fa-file-pdf-o"></i> Save as PDF </a></li>
                  <li><a href="#"><i class="fa fa-file-excel-o"></i> Export to Excel </a>  </li>                       
                </ul>
                <!-- Tools Button End -->

                <!-- Filter Button Start -->
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>

                <!-- Filter Button End -->
              </div>
            </div>
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
              <thead>
                <tr class="filters">
                  <th><input type="text" class="form-control" placeholder="Medicine id" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Genric Name" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Quentity" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Price" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Total Price" disabled></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>alex</td>
                  <td>Alex Nilson</td>
                  <td>1234</td>
                  <td class="center">power user </td>
                  <td><a class="edit" href="#">Sale </a> </td>

                  <!-- Sales Modal Start-->


                  <!-- Sales Modal End -->

                </tr>
                <tr>
                  <td>lisa</td>
                  <td>Lisa Wong </td>
                  <td>434</td>
                  <td class="center">new user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
                <tr>
                  <td>nick12 </td>
                  <td>Nick Roberts</td>
                  <td>232</td> 
                  <td class="center">power user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
                <tr>
                  <td>goldweb</td>
                  <td>Sergio Jackson</td>
                  <td> 132</td> 
                  <td class="center"> elite user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Medicine Status Start -->

        <div class="tab-pane fade in" id="tab2">
          <div class="panel panel-default filterable">
            <div class="panel-heading" id ="table-panel" >
              <h2 class="panel-title">Medicine Info</h2>
              <div class="pull-right btn-group">

               <!-- Tools Button Start -->
                <button id="btn-tools" class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i></button>
                <ul class="dropdown-menu pull-right">
                  <li><a href="#"><i class="fa fa-print"></i> Print </a></li>
                  <li><a href="#"><i class="fa fa-file-pdf-o"></i> Save as PDF </a></li>
                  <li><a href="#"><i class="fa fa-file-excel-o"></i> Export to Excel </a>  </li>                       
                </ul>
                <!-- Tools Button End -->

                <!-- Filter Button Start -->
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>

                <!-- Filter Button End -->
              </div>
            </div>
            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
              <thead>
                <tr class="filters">
                  <th><input type="text" class="form-control" placeholder="Medicine id" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Barcode" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Quentity" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Product Date" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Expire Date" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Made in" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Weight" disabled></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>alex</td>
                  <td>Alex Nilson</td>
                  <td>1234</td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                  <td><a class="edit" href="#">Sale </a> </td>

                  <!-- Sales Modal Start-->


                  <!-- Sales Modal End -->

                </tr>
                <tr>
                  <td>lisa</td>
                  <td>Lisa Wong </td>
                  <td>434</td>
                  <td class="center">new user</td>
                  <td class="center">new user</td>
                  <td class="center">new user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
                <tr>
                  <td>nick12 </td>
                  <td>Nick Roberts</td>
                  <td>232</td>
                  <td>Nick Roberts</td>
                  <td>Nick Roberts</td> 
                  <td class="center">power user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
                <tr>
                  <td>goldweb</td>
                  <td>Sergio Jackson</td>
                  <td> 132</td> 
                  <td> 132</td> 
                  <td> 132</td> 
                  <td class="center"> elite user</td>
                  <td><a class="edit" href="javascript:;"> </a> </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
  </div>
            


@stop