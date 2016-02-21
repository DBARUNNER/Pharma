
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
   <h3 class="active-tab text-info"><strong> &nbsp Sales Tab</strong>: <span></span></h3>
<hr>
<div id="tab-style">
<ul id="myTab" class="nav nav-tabs">
   <li class="active"><a href="#home" data-toggle="tab">
      <i class="fa fa-info-circle"></i>  Sales to customer</a></li>
   <li><a href="#agency" data-toggle="tab">Sales to Agency</a></li>
   <li><a href="#Chistory" data-toggle="tab">Customer Sales history</a></li>
   <li><a href="#Ahistory" data-toggle="tab">Agency Sales history</a></li>
   <li class="dropdown">
      <a href="#" id="myTabDrop1" class="dropdown-toggle" 
         data-toggle="dropdown">
        <i class="fa fa-plus-square"></i> Register <b class="caret"></b></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
         <li><a href="#jmeter" tabindex="-1" data-toggle="tab"><i class="fa fa-plus-square"> </i> Add new Customer</a></li>
         <li><a href="#ejb" tabindex="-1" data-toggle="tab"> <i class="fa fa-plus-square"> </i> Add new Agency</a></li>
      </ul>
   </li>
</ul>
<!-- Tab Start -->
<div id="myTabContent" class="tab-content">
  <!-- Customer Tab Start -->
  <div class="tab-pane fade in active" id="home">
    <div class="panel panel-default filterable">
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
      <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
          <tr class="filters">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
            <th><input type="text" class="form-control" placeholder="Sale" disabled></th>
          </tr>
        </thead>
        <tbody>
          <tr id="filter-table">
            <td>alex</td>
            <td>Alex Nilson</td>
            <td><a class="edit" href="#">1234 </a> </td>
            <td class="center">power user </td>
            <td class="center"><a class="md-trigger import" data-toggle="modal" data-target="#myModal" > Sale </a></td>
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
  <!-- Customer Tab End -->

   <!-- Agency Tab Start -->

   <div class="tab-pane fade" id="agency">
    <div class="panel panel-default filterable">
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
      <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
          <tr class="filters">
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
      <h3 class="text-info">Customer Sales History Info</h3>
      <div class="panel panel-default filterable">
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
      <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
          <tr class="filters">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invoice Number" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Email" disabled></th>
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
            <td><a class="edit" href="#">1234 </a> </td>
            <td class="center">power user </td>
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
            <td class="center">new user</td>
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
            <td class="center">Power user </td>
          </tr>
          <tr>
            <td>goldweb</td>
            <td>Sergio Jackson</td>
            <td class="center">power user </td>
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
      <h3 class="text-info">Agency Sales History Info</h3>
            <div class="panel panel-default filterable">
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
      <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
        <thead>
          <tr class="filters">
            <th><input type="text" class="form-control" placeholder="id" disabled></th>
            <th><input type="text" class="form-control" placeholder="Customer Name" disabled></th>
            <th><input type="text" class="form-control" placeholder="Invoice Number" disabled></th>
            <th><input type="text" class="form-control" placeholder="Address" disabled></th>
            <th><input type="text" class="form-control" placeholder="Email" disabled></th>
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
            <td><a class="edit" href="#">1234 </a> </td>
            <td class="center">power user </td>
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
            <td class="center">new user</td>
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
            <td class="center">Power user </td>
          </tr>
          <tr>
            <td>goldweb</td>
            <td>Sergio Jackson</td>
            <td class="center">power user </td>
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
   <div class="tab-pane fade" id="jmeter">
      <h3 class="text-info">Customer Register</h3>
      <form class="form-horizontal" role="form" >
       <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">Name:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="firstname" 
                placeholder="Name...">
          </div>
       </div>
       <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Address:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Address...">
          </div>
       </div>
          <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Phone:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Phone...">
          </div>
       </div>
          <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Email...">
          </div>
       </div>
          <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Date:</label>
          <div class="col-sm-10">
             <input type="date" class="form-control" id="lastname" 
                placeholder="Date...">
          </div>
       </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-success">Register</button>
             <button type="Reset" class="btn btn-primary">Reset</button>
          </div>
        </div>
      </form>
    </div>
    <!-- Customer Register End -->
       <!-- Sales Modal Start -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" id="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Sales Bill To Customer</h4>
                  </div>
                  <div class="modal-body">
                    <!-- Start of BILL form  -->
                    <div class="container-fliud">
                      <div class="row">
                        <div class="col-sm-12">
                          <legend>Name of suplier</legend>
                        </div>
                        <!-- panel preview -->
                        <div class="col-sm-4">
                          <h4>Insert your Material</h4>
                          <div class="panel panel-default">
                            <div class="panel-body form-horizontal payment-form">
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
                                <div class="col-sm-4">
                                  <input type="text" class="form-control" id="weight" name="weight">
                                </div>
                                <label for="label" class="col-sm-2 control-label">Label</label>
                                <div class="col-sm-3">
                                  <input type="text" class="form-control" id="lable" name="label">
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
                              <div class="form-group">
                                <div class="col-sm-12 text-right">
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
                                <tbody></tbody> <!-- preview content goes here-->
                              </table>
                            </div>                            
                          </div>
                        </div>
                        <div class="row text-right">
                          <div class="col-xs-12">
                            <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <hr style="border:1px dashed #dddddd;">
                            <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                          </div>                
                        </div>
                      </div>
                    </div>
                  </div>
                    <!-- End of BILL form  -->
                </div>   
              </div>
            </div>
          <!-- Sales Modal End -->

    <!-- Agency Register Start =-->
  <div class="tab-pane fade" id="ejb">
  <h3 class="text-info">Agency Register</h3>
    <form class="form-horizontal" role="form">
       <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">Name:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="firstname" 
                placeholder="Name...">
          </div>
       </div>
       <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Father name:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Address...">
          </div>
       </div>
       <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Phone:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Phone...">
          </div>
       </div>
        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Address:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Email...">
          </div>
       </div>
        <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Email:</label>
          <div class="col-sm-10">
             <input type="date" class="form-control" id="lastname" 
                placeholder="Date...">
          </div>
       </div>
       <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Register Date:</label>
          <div class="col-sm-10">
             <input type="date" class="form-control" id="lastname" 
                placeholder="Registerition Date...">
          </div>
       </div>
       <div class="form-group">
          <label for="lastname" class="col-sm-2 control-label">Location:</label>
          <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" 
                placeholder="Location...">
          </div>
       </div>
       <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-success">Register</button>
             <button type="Reset" class="btn btn-primary">Reset</button>
          </div>
       </div>
    </form>
   </div>
   <!-- Agency register End -->
</div>
</div>
<!-- End Tab -->

@stop