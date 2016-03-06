
@extends('layouts.main')




@section('title')
Sistan Pharma/Sales
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
                      <a class="active" href="{{URL::route('sales-get')}}" >
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
<div id="tab-style">
  <ul id="sales-tab" class="nav nav-tabs" id="ul-tab-style">
   <li class="active"><a href="#home" data-toggle="tab">
       Sales to customer <i class="fa fa-chevron-down"></i> </a></li>
   <li><a href="#agency" data-toggle="tab"> Sales to Agency <i class="fa fa-chevron-down"></i> </a></li>
   <li><a href="#Chistory" data-toggle="tab"> Customer Sales history <i class="fa fa-chevron-down"></i> </a></li>
   <li><a href="#Ahistory" data-toggle="tab"> Agency Sales history <i class="fa fa-chevron-down"></i> </a></li>
  <li class="dropdown">
    <a href="#" id="myTabDrop1" class="dropdown-toggle" 
      data-toggle="dropdown">
     <i class = "fa fa-pencil-square-o"></i> Register New <b class="caret"></b></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
         <li><a href="#registerCustomer" tabindex="-1" data-toggle="tab"><i class = "fa fa-pencil-square-o"> </i> Add new Customer</a></li>
         <li><a href="#registerAgency" tabindex="-1" data-toggle="tab"><i class = "fa fa-pencil-square-o"> </i> Add new Agency</a></li>
      </ul>
   </li>
</ul>
<!-- Tab Start -->
<div id="myTabContent" class="tab-content">
  <!-- Customer Tab Start -->
  <div class="tab-pane fade in active" id="home">
  <hr class="style18">
    <div class="panel panel-default filterable" style="margin:10px;">
      <div class="panel-heading" id="table-panel" >
         <span class="table-panel-heading"><i class = "fa fa-bar-chart-o"></i> Sales to customer</span>
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
          <tr class="filters" id="table-style">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
            <th><input type="text" class="form-control" placeholder="Email" disabled></th>
            <th><input type="text" class="form-control" placeholder="Sales" disabled></th>
          </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)

            <tr>
              <td>{{ $customer->id }}</td>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->phone }}</td>
              <td>{{ $customer->email }}</td>

          <td class="center"><a onclick="setId({{ $customer->id }})" class="md-trigger import" data-toggle="modal" data-target="#myModal" > Sale </a></td></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- Customer Tab End -->

   <!-- Agency Tab Start -->

   <div class="tab-pane fade" id="agency">
    <div class="panel panel-default filterable" style="margin:10px;">
      <div class="panel-heading" id="table-panel" >
        <span class="table-panel-heading"><i class = "fa fa-bar-chart-o"></i> Sales to Agency</span>
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
          <tr class="filters" id="table-style">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Agency Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
            <th><input type="text" class="form-control" placeholder="Sale" disabled></th>
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

   <!-- Agency Tab End -->

   <!-- Customer History Tab Start -->

    <div class="tab-pane fade" id="Chistory">
      <div class="panel panel-default filterable" style="margin:10px;">
      <div class="panel-heading" id ="table-panel" >
        <span class="table-panel-heading"><i class = "fa fa-bar-chart-o"></i> Customer Sales Info</span>
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
          <tr class="filters" id="table-style">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invoice Number" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Date" disabled></th>
            <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
            <th><input type="text" class="form-control" placeholder="Cash" disabled></th>
            <th><input type="text" class="form-control" placeholder="Balance" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invers" disabled></th>
          </tr>

        </thead>
        <tbody>
          <tr>
            <td>alex</td>
            <td>Alex Nilson</td>
            <td><a class="md-trigger import" data-toggle="modal" data-target="#import-material">1234 </a> </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">Power user </td>

            <!-- Sales Modal Start-->


            <!-- Sales Modal End -->

          </tr>
          <tr>
            <td>lisa</td>
            <td>Lisa Wong </td>
            <td>434</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">Power user </td>
          </tr>
          <tr>
            <td>nick12 </td>
            <td>Nick Roberts</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td>232</td> 
            <td class="center">power user</td>
            <td class="center">Power user </td>
          </tr>
          <tr>
            <td>goldweb</td>
            <td>Sergio Jackson</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td> 132</td> 
            <td class="center"> elite user</td>
            <td class="center">Power user </td>

          </tr>
        </tbody>
      </table>
    </div>
    </div>
   <!-- Customer History Tab End -->

   <!-- Agency History Start -->
      <div class="tab-pane fade" id="Ahistory">
      <div class="panel panel-default filterable" style="margin:10px;">
      <div class="panel-heading" id ="table-panel" >
        <span class="table-panel-heading"><i class = "fa fa-bar-chart-o"></i> Agency Sales Info</span>
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
          <tr class="filters" id="table-style">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invoice Number" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Date" disabled></th>
            <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
            <th><input type="text" class="form-control" placeholder="Cash" disabled></th>
            <th><input type="text" class="form-control" placeholder="Balance" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invers" disabled></th>
          </tr>

        </thead>
        <tbody>
          <tr>
            <td>alex</td>
            <td>Alex Nilson</td>
            <td><a class="md-trigger import" data-toggle="modal" data-target="#import-material">1234 </a> </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">Power user </td>
            <td class="center">Power user </td>

            <!-- Sales Modal Start-->


            <!-- Sales Modal End -->

          </tr>
          <tr>
            <td>lisa</td>
            <td>Lisa Wong </td>
            <td>434</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">Power user </td>
          </tr>
          <tr>
            <td>nick12 </td>
            <td>Nick Roberts</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td>232</td> 
            <td class="center">power user</td>
          </tr>
          <tr>
            <td>goldweb</td>
            <td>Sergio Jackson</td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td class="center">power user </td>
            <td> 132</td> 
            <td class="center"> elite user</td>
            <td class="center">Power user </td>

          </tr>
        </tbody>
      </table>
    </div>
   </div>
   <!-- Agency History End -->

   <!-- Register Customer -->
  <div class="tab-pane fade" id="registerCustomer"> 
    <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading" id ="table-panel">
       <i class="fa fa-pencil-square-o"></i> Register New Customer
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ URL::route('register-customer-post')}}">
         <div class="form-group">
            <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Customer Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="firstName" id="firstname" 
                  placeholder="Enter First Name" required="required">
            </div>
         </div>
         <div class="form-group">
            <label id = "label-font-style" for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="address" id="address" 
                  placeholder="Enter Address" required="required">
            </div>
         </div>
          <div class="form-group">
            <label id = "label-font-style" for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="phone" id="phone" 
                  placeholder="Enter Phone" required="required">
            </div>
         </div>
            <div class="form-group">
            <label id = "label-font-style" for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
               <input type="email" class="form-control" name="email" id="email" 
                  placeholder="Enter Email" required="required">
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-default"><i class="fa fa-pencil-square-o"></i> Register</button>
            </div>
         </div>
      </form>
      </div>
    </div>
    </div>
  </div>
    <!-- Customer Register End -->


   <!-- Register Customer -->
  <div class="tab-pane fade" id="registerAgency">
    <div class="container">
    <div class="panel panel-default" style="margin:5px;">
      <div class="panel-heading" id ="table-panel">
       <i class="fa fa-pencil-square-o"></i> Register New Agency
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ URL::route('register-customer-post')}}">
         <div class="form-group">
            <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Agency Name</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="firstName" id="firstname" 
                  placeholder="Enter First Name" required="required">
            </div>
         </div>
         <div class="form-group">
            <label id = "label-font-style" for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="address" id="address" 
                  placeholder="Enter Address" required="required">
            </div>
         </div>
          <div class="form-group">
            <label id = "label-font-style" for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" name="phone" id="phone" 
                  placeholder="Enter Phone" required="required">
            </div>
         </div>
            <div class="form-group">
            <label id = "label-font-style" for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
               <input type="email" class="form-control" name="email" id="email" 
                  placeholder="Enter Email" required="required">
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-default"><i class="fa fa-pencil-square-o"></i> Register</button>
            </div>
         </div>
      </form>
      </div>
    </div>
    </div>
  </div>
    <!-- Customer Register End -->
  <!-- model code is here -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Sales To Customer Bill</h4>
      </div>
      <div class="modal-body">
        <!-- Start of BILL form  -->
        <div class="container-fliud">
          <div class="row">
            <div class="col-sm-12">
              <legend >Suplier Name:<span id="suplier-name" style="font-size: 1.5em;color: red;"></span></legend>
            </div>
            <!-- panel preview -->
            <div class="col-sm-4">
              <h4>Insert your Material</h4>
              <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                <div id="sales-content-bill">
                  <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Genric Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="madIn" class="col-sm-3 control-label">Made in</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="madIn" name="madeIn">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="weight" class="col-sm-3 control-label">Weight</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="weight" name="weight" >
                    </div>
                  </div>         
                  <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="amount" name="amount">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" onblur="total();" class="form-control" id="price" name="price">
                    </div>
                  </div>
                  <div class="form-group" style="display: none;">
                    <label for="Tatal Price" class="col-sm-3 control-label">Total Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="totalPrice" name="TotalPrice">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Product Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="productDate" name="product_date">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Expire Date</label>
                    <div class="col-sm-9">
                      <input type="date" class="form-control" id="expireDate" name="expire_date">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="status" name="status">
                        <option>Paid</option>
                        <option>Unpaid</option>
                      </select>
                    </div>
                  </div> 
                </div>
                  <div class="form-group">
                   <label for="label" class="col-sm-3 control-label">Label</label>
                    <div class="col-sm-3">
                      <input type="text" onblur="retriveValue();" class="form-control" id="label" name="label">
                    </div>
                    <div class="col-sm-6 text-right">
                      <button type="button" class="btn btn-default preview-add-button">
                        <span class="glyphicon glyphicon-plus"></span> Add
                      </button>
                    </div>
                    
                  </div>
              </div>
            </div>            
          </div> <!-- / panel preview -->
          <div class="col-sm-8">
            <h4>Preview:</h4>
            <div class="row">
              <div class="col-xs-12">
                <div class="table-responsive">
                  <table class="table preview-table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Made In</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Product Date</th>
                        <th>Expire Date</th>
                        <th>Price</th>
                        <th>Total Price</th>
                      </tr>
                    </thead>
                    <tbody id="import-table"></tbody> <!-- preview content goes here-->
                  </table>
                </div>                            
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3" style="margin-top: 11px;">
                <h4 class="paid-header">Total:</h4> <input class="preview-total" id="bill-total"> </input>
              </div>
              <div class="col-xs-4" style="margin-top: 11px;">
                <h4 class="paid-header">Paid:</h4><input onblur="loan();" type="text" placeholder="Insert Paid" class="paid-input" id="paid-input"></input>
              </div>
              <div class="col-xs-4" style="margin-top: 11px;">
                <h4 class="loan-header">Loan:</h4> <input type="text" placeholder="Insert Loan" class="loan-input" id="loan-input"></input>
              </div>
              <input id="suplier_id" style="display: none;"></input>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <hr style="border:1px dashed #dddddd;">
                <button type="button" class="btn btn-primary btn-block" id="submit-table" onclick="sell_to_customer();">Submit all and finish</button>
              </div>                
            </div>
          </div>
        </div>
      </div>
        <!-- End of BILL form  -->

@stop