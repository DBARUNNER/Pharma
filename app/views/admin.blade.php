
@extends('layouts.main')


@section('import-style')
  
@stop

@section('title')
Admin panel
@stop





@section('sidbar')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>
                    
                  <li class="mt">
                      <a href="{{URL::route('home-get')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="active" href="{{ URL::route('import-get')}}" >
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
                      <a href="{{URL::route('stock-get')}}" >
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
                      <a href="{{URL::route('daily-get')}}" >
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
                          <li><a data-toggle="modal" data-target="#contact" data-original-title>
                           Change Password
                          </a></li>
                          <li><a  href="{{URL::route('logout-get') }}">Login</a></li>
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
    <div class="panel panel-primary  panel-green">
    <div class="panel-heading">
      <h3 class="panel-title">&nbsp</h3>
        <ul class="nav panel-tabs">
          <li class="active"><a href="#register" data-toggle="tab">Sales Report</a></li>
          <li><a href="#salary" data-toggle="tab">Customer Reports</a></li>
          <li><a href="#employeeHistory" data-toggle="tab">Employee history</a></li>
        </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="register">
            <div class="panel panel-default filterable" style="border-radius: 0px;">
              <div class="panel-heading" id ="table-panel" >
                <h2 class="panel-title" style="color:white;">Sales Reports</h2>
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
              <div class="panel-body">
                <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">From Date</label>
                    <div class="col-sm-4">
                      <input type="Date" class="form-control" id="lastname">
                    </div>
                     <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">To Date</label>
                    <div class="col-sm-4">
                      <input type="Date" class="form-control" id="lastname">
                    </div>
                </div> <br><br>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                  <thead>
                    <tr class="filters" id="table-style">
                      <th><input type="text" class="form-control" placeholder="Batch number" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Medicine Name" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Total Sales" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Total Money" disabled></th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>alex</td>
                      <td>Alex Nilson</td>
                      <td>1234</td>
                      <td class="center">power user </td>
                    </tr>
                    <tr>
                      <td>lisa</td>
                      <td>Lisa Wong </td>
                      <td>434</td>
                      <td class="center">power user </td>
                    </tr>
                    <tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="3"><i class = "text-info" style ="font-size:20px">Total Sales Amount Money</i></td>
                      <td><i class = "text-info" style ="font-size:20px">Total Sales Amount Money</i></td>
                    </tr>
                    <tr>
                      <td colspan="3"><i class = "text-info" style ="font-size:20px">Profit Amount</i></td>
                      <td><i class = "text-info" style ="font-size:20px">Profit Amount</i></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
        </div>
        <div class="tab-pane fade" id="salary">
            <div class="panel panel-default filterable" style="border-radius: 0px;">
              <div class="panel-heading" id ="table-panel" >
                <h2 class="panel-title" style="color:white;">Customer Reports</h2>
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
              <div class="panel-body">
                <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">From Date</label>
                    <div class="col-sm-4">
                      <input type="Date" class="form-control" id="lastname">
                    </div>
                     <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">To Date</label>
                    <div class="col-sm-4">
                      <input type="Date" class="form-control" id="lastname">
                    </div>
                </div> <br><br>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                  <thead>
                    <tr class="filters" id="table-style">
                      <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Customer name" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Address" disabled></th>
                    </tr>

                  </thead>
                  <tbody>
                    <tr>
                      <td>alex</td>
                      <td>Alex Nilson</td>
                      <td>1234</td>
                      <td class="center">power user </td>
                    </tr>
                    <tr>
                      <td>lisa</td>
                      <td>Lisa Wong </td>
                      <td>434</td>
                      <td class="center">power user </td>
                    </tr>
                    <tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>

        <div class="tab-pane" id="employeeHistory">
          <div class="panel panel-default filterable" style="border-radius: 0px;">
            <div class="panel-heading" id ="table-panel" >
              <h2 class=" text-info panel-title">Agency Sales Info</h2>
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
            <table class="table table-striped table-hover" id="sample_editable_1">
              <thead>
                <tr class="filters" id="table-style">
                  <th><input type="text" class="form-control" placeholder="Employee Id" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Hire-Date" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Edit" disabled></th>
                  <th><input type="text" class="form-control" placeholder="delete" disabled></th>
                </tr>

              </thead>
              <tbody>
                <tr>
                  <td>alex</td>
                  <td>Alex Nilson</td>
                  <td>1234</td>
                  <td class="center">power user </td>
                  <td class="center"><a class="md-trigger import" data-toggle="modal" data-target="#myModal" > Sale </a></td>
                  <!-- Sales Modal Start-->


                  <!-- Sales Modal End -->

                </tr>
                <tr>
                  <td>lisa</td>
                  <td>Lisa Wong </td>
                  <td>434</td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                </tr>
                <tr>
                  <td>nick12 </td>
                  <td>Nick Roberts</td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                </tr>
                <tr>
                  <td>goldweb</td>
                  <td>Sergio Jackson</td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                  <td class="center">power user </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop


@section('script')
  
@stop