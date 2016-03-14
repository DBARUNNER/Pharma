
@extends('layouts.main')




@section('title')
Sistan Pharma/dailyPayment
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
                      <a  href="{{URL::route('employee-get')}}" >
                          <i class="fa fa-cogs"></i>
                          <span>Employee</span>
                      </a>
                  </li>

                 <li class="sub-menu">
                      <a class="active" href="{{URL::route('daily-get')}}" >
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

 @if(Session::has('error'))
      <div class="row" style="position: relative;">
                <div class="alert alert-danger" id="error-message">
                    <strong style="font-size: 20px;">Error !</strong><span style="font-size: 13px;"> {{ Session::get('error') }} </span>
                </div>
            </div>

      @endif

      @if(Session::has('success'))
      <div class="row" style="position: relative;">
                <div class="alert alert-success" id="error-message">
                    <strong style="font-size: 20px;">Info !</strong><span style="font-size: 13px;"> {{ Session::get('success') }} </span>
                </div>
            </div>

      @endif
  <div id="stock-tab" class="col-md-10 col-sm-10">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{{ URL::asset('assets/img/image.jpg') }}">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="{{ URL::asset('assets/img/image.jpg') }}">
        </div>
        <div class="card-info"> <span class="card-title">Sistan Pharma</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Daily pays</div>
            </button>
        </div>
        <div class="btn-group" role="group" id="payment-history">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Daily Payment history</div>
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
            <div class="panel panel-primary" style="border-radius: 0px;">
              <div class="panel-heading">
               <i class="fa fa-pencil-square-o"></i> Add Daily Expense
              </div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="post" action="{{ URL::route('daily-payment-post')}}">
                 <div class="form-group">
                    <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                       <textarea class="form-control" rows="3" placeholder="Description..." required="required" type="text" name="desc"></textarea>
                    </div>
                 </div>
                 <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                       <input type="text" class="form-control" id="lastname" 
                          placeholder="Cost..." required="required" name="price">
                    </div>
                 </div>
                  <div class="form-group">
                    <label id = "label-font-style" for="lastname" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                       <input type="date" class="form-control" id="lastname" 
                          placeholder="Select Date" required="required" name="date">
                    </div>
                 </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="reset" class="btn btn-warning" style="border-radius: 0px;"><i class="fa fa-refresh"></i> Reset</button>
                        <button type="submit" class="btn btn-success" style="border-radius: 0px;"><i class="fa fa-save"></i> Save</button>
                    </div>
                 </div>
              </form>
              </div>
            </div>
        </div>

        <!-- Medicine Status Start -->

        <div class="tab-pane fade in" id="tab2">
          <div class="panel panel-default filterable">
            <div class="panel-heading" id ="table-panel" >
              <h2 class="panel-title" style="color:white;">Medicine Info</h2>
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
                <tr class="filters">
                  <th><input type="text" class="form-control" placeholder="No" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Price" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Edit" disabled></th>
                  <th><input type="text" class="form-control" placeholder="Delete" disabled></th>
                </tr>
              </thead>
              <tbody id="paiyment-history">
                
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