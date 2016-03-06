
@extends('layouts.main')




@section('title')
Sistan Pharma/employee
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
                      <a href="{{URL::route('stock-get')}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Stock</span>
                      </a>
                  </li>

                   <li class="sub-menu">
                      <a class="active" href="{{URL::route('employee-get')}}" >
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
  <div class="panel panel-primary  panel-green">
    <div class="panel-heading">
      <h3 class="panel-title">&nbsp</h3>
        <ul class="nav panel-tabs">
          <li class="active"><a href="#register" data-toggle="tab">Register New Employee</a></li>
          <li><a href="#salary" data-toggle="tab">Salary Payment</a></li>
          <li><a href="#employeeHistory" data-toggle="tab">Employee history</a></li>
        </ul>
    </div>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="register">
          <div class="container">
            <div class="panel panel-default" style="border-radius: 0px;">
              <div class="panel-heading" id ="table-panel">
               <i class="fa fa-pencil-square-o"></i> Register New Customer
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                 <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Employee Name</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="firstname" 
                          placeholder="Enter First Name">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Father Name</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="firstname" 
                          placeholder="Enter Father Name">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Tazkera No</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="firstname" 
                          placeholder="Enter Tazkera Name">
                    </div>
                 </div>
                 <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Address">
                    </div>
                 </div>
                <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Phone">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Email">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Photo</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="firstname" 
                          placeholder="Select Photo ">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Hire Date</label>
                    <div class="col-sm-10">
                       <input type="date" class="form-control" id="firstname" 
                          placeholder="Enter First Name">
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                       <button type="submit" class="btn btn-primary" style="border-radius: 0px;"><i class="fa fa-pencil-square-o"></i> Register</button>
                       <button type="submit" class="btn btn-warning" style="border-radius: 0px;"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                 </div>
              </form>
              </div>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="salary">
          <div class="container">
            <div class="panel panel-default" style="border-radius: 0px;">
              <div class="panel-heading" id ="table-panel">
               <i class="fa fa-pencil-square-o"></i> Salary Payment
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                 <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Employee Name</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="firstname" 
                          placeholder="Enter First Name">
                    </div>
                 </div>
                 <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Salary</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Address">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Phone">
                    </div>
                 </div>
                    <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Enter Email">
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success" style="border-radius: 0px;"><i class="fa fa-pencil-square-o"></i> Pay</button>
                       <button type="submit" class="btn btn-warning" style="border-radius: 0px;"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                 </div>
              </form>
              </div>
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