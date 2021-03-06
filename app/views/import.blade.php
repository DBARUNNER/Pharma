
@extends('layouts.main')


@section('import-style')
  <link href="{{ URL::asset('assets/css/import-nave.css') }}" rel="stylesheet">
@stop

@section('title')
Sistan Pharma
@stop





@section('sidbar')
<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>
                    
                  <li class="mt" onclick="checkExpire();">
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
      @if(Session::has('error'))
      <div class="row" style="position: relative;">
                <div class="alert alert-danger" id="error-message">
                    <strong style="font-size: 20px;">Error !</strong><span style="font-size: 13px;"> {{ Session::get('error') }} </span>
                </div>
            </div>

      @endif

      @if($errors->has('email'))
      <div class="row" style="position: relative;">
                <div class="alert alert-danger" id="error-message">
                    <strong style="font-size: 20px;">Error !</strong>
                    @foreach($errors as $error)
                      <ul><li>{{ $error }}</li></ul>
                    @endforeach
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
        <!-- End of Error message -->
  <div class="board">
    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
    <div class="board-inner">
      <ul class="nav nav-tabs" id="myTab">
      <div class="liner"></div>
        <li class="active" id="suplierList">
          <a href="#home" data-toggle="tab" title="Suplier List">
            <span class="round-tabs one" id="suplier-tab">
              <i class="glyphicon glyphicon-home import-icon"></i>
              <span>Suplier</span><span>List</span>
              </span> 
          </a>
        </li>
        <li id="importSplier">
          <a href="#profile" data-toggle="tab" title="Import form Suplier" >
            <span class="round-tabs two" id="suplier-tab">
              <i class="glyphicon glyphicon-user import-icon" ></i>
              <span>Import from Suplier</span>
            </span> 
           </a>
        </li>
        <li>
          <a href="#messages" data-toggle="tab" title="Add Employee">
            <span class="round-tabs three" id="suplier-tab">
              <i class="glyphicon glyphicon-gift import-icon"></i>
              <span>Add</span><span>Suplier</span>
            </span> 
          </a>
        </li>
        <li id="showHistory">
          <a href="#settings" data-toggle="tab" title="Import History">
            <span class="round-tabs four" id="suplier-tab">
              <i class="glyphicon glyphicon-comment import-icon"></i>
              <span>Import</span><span>History</span>
            </span> 
          </a>
        </li>        
      </ul>
    </div>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="home"> 
        <!-- start of table  -->
        <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default filterable">
              <div class="panel-heading">
                <h1 class="panel-title">Suplier Information</h1>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <table class="table table-hover table-bord">
                <thead>
                  <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Address" disabled></th>        
                    <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($suplierList as $suplier)
                  <tr>
                    <td>{{ $suplier->id }}</td>
                    <td>{{ $suplier->name }}</td>
                    <td>{{ $suplier->phone }}</td>
                    <td>{{ $suplier->address }}</td>
                    <td>{{ $suplier->email }}</td>
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Endf of Table -->
      </div>
      <div class="tab-pane fade" id="profile">
        <!-- Import from suplier  -->
        <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default filterable">
              <div class="panel-heading">
                <h1 class="panel-title">Import from Suplier</h1>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <table class="table table-hover table-bord">
                <thead>
                  <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Phone" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Address" disabled></th>        
                    <th><input type="text" class="form-control" placeholder="Import from Suplier" disabled></th>
                  </tr>
                </thead>
                <tbody id="import-table-body">
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
            <!-- End of Table -->                      
      </div>
      <div class="tab-pane fade" id="messages">
        <!-- star of Registraton  -->
        <div class="container"  style="width: 100%;">
        <h3 class="suplier-header">Suplier Information</h3>
            <hr class="style18">    
    <div class="container">
    <div class="panel panel-default" style="border-radius: 0px;">
      <div class="panel-heading"style="background-color: #fff;">
       <i class="fa fa-pencil-square-o"></i> Register New Supplier
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="{{ URL::route('register-suplier-post')}}">
         <div class="form-group">
            <label id = "label-font-style" for="firstname" class="col-sm-2 control-label">Supplier Name</label>
            <div class="col-sm-10">
               <input type="text" name="firstName" class="form-control" id="firstname" 
                  placeholder="Enter First Name" required="required">
            </div>
         </div>
         <div class="form-group">
            <label id = "label-font-style" for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
               <input type="text" name="address" class="form-control" id="address" 
                  placeholder="Enter Address" required="required">
            </div>
         </div>
          <div class="form-group">
            <label id = "label-font-style" for="phone" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
               <input type="text" name="phone" class="form-control" id="phone" 
                  placeholder="Enter Phone" required="required">
            </div>
         </div>
            <div class="form-group">
            <label id = "label-font-style" for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
               <input type="email" name="email" class="form-control" id="email" 
                  placeholder="Enter Email" required="required">
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <button type="submit" class="btn btn-success" style="border-radius: 0px;"><i class="fa fa-pencil-square-o"></i> Register</button>
               <button type="reset" class="btn btn-warning" style="border-radius: 0px;"><i class="fa fa-refresh"></i> Register</button>
            </div>
         </div>
      </form>
      {{ Form::token() }}
      </div>
    </div>
    </div>
        </div>
          <!-- End of Registration -->
      </div>
      <div class="tab-pane fade" id="settings">
        <!-- Star of Import History -->
        <div class="container-fluid">
          <div class="row">
            <div class="panel panel-default filterable">
              <div class="panel-heading">
                <h1 class="panel-title">Import History</h1>
                <div class="pull-right">
                  <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </div>
              <table class="table table-hover table-bord">
                <thead>
                  <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Bill No" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Materials" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Suplier" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Date" disabled></th>        
                    <th><input type="text" class="form-control" placeholder="Total" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Cash" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Loan" disabled></th>
                  </tr>
                </thead>
                <tbody id="table-history-body">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- End of Table -->
         <!-- End of Imprt History -->
      </div>
      <div class="tab-pane fade" id="doner">                    
        <div class="text-center">
          <i class="img-intro icon-checkmark-circle"></i>
        </div>
        <h3 class="head text-center">Fifth Tab</h3>

      </div>
      <div class="clearfix"></div>
    </div>
  </div>


      <!-- Material  model -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="import-material" class="modal fade">
      <div class="modal-dialog" id="materila-import">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Material Information </h4>
          </div>
          <div class="modal-body">
           <!-- Material table -->
              <div class="widget stacked widget-table action-table">
          <!--   
        <div class="widget-header">
          <i class="icon-th-list"></i>
          <h3>Table</h3>
        </div>  -->
        
        <div class="widget-content">
          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Made In</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Product Date</th>
                  <th>Expire Date</th>
                  <th>Price</th>
                  <th>Label</th>
                  <th>Weight</th>

              </tr>
            </thead>
            <tbody id="import-material-body">
              
              </tbody>
            </table>
          
        </div> <!-- /widget-content -->
      
      </div> <!-- /widget -->


           <!-- End of material table -->
          </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="submit">Submit</button>
              </div>
        </div>
      </div>
    </div>
    <!-- Material Model  -->

    <!-- change password model -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="contact" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Chagen password!</h4>
          </div>
          <div class="modal-body">
            <form method="post"  action="{{ URL::route('change-password')}}" id="change-password">
              <p>Enter your old password</p>
              <input type="password" name="old-password" placeholder="Old Password" autocomplete="off" class="form-control placeholder-no-fix">
              <input type="password" name="password" placeholder="New Password" autocomplete="off" class="form-control placeholder-no-fix">
              <input type="password" name="password-again" placeholder="password-again" autocomplete="off" class="form-control placeholder-no-fix">
              
            </form>
            </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" onclick="submit();" type="submit">Submit</button>
              </div>
        </div>
      </div>
    </div>
    <!-- End of change password modal  -->

<!-- model code is here -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Import Bill from Suplier</h4>
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
                <button type="button" class="btn btn-primary btn-block" id="submit-table" onclick="import_from_suplier();">Submit all and finish</button>
              </div>                
            </div>
          </div>
        </div>
      </div>
        <!-- End of BILL form  -->
    </div>   
  </div>
</div>

<!-- End of model -->


<!-- End of model -->


@stop


@section('script')

@stop