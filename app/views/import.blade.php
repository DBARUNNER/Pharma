
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
                    
                  <li class="mt">
                      <a href="index.html">
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
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Stock</span>
                      </a>
                  </li>

                   <li class="sub-menu">
                      <a href="javascript:;" >
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
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="Suplier List">
                      <span class="round-tabs one" id="suplier-tab">
                              <i class="glyphicon glyphicon-home import-icon"></i>
                              <span>Suplier</span><span>List</span>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="Import form Suplier" >
                     <span class="round-tabs two" id="suplier-tab">
                         <i class="glyphicon glyphicon-user import-icon" ></i>
                         <span>Import from Suplier</span>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="Add Employee">
                     <span class="round-tabs three" id="suplier-tab">
                          <i class="glyphicon glyphicon-gift import-icon"></i>
                          <span>Add</span><span>Employee</span>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Import History">
                         <span class="round-tabs four" id="suplier-tab">
                              <i class="glyphicon glyphicon-comment import-icon"></i>
                              <span>Import</span><span>History</span>
                         </span> 

                     </a></li>
                     
                     </ul></div>

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
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a class="md-trigger import" data-modal="modal-4">Import</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <!-- End of Table -->
                          
                      </div>

                      <div class="tab-pane fade" id="messages">
                        <!-- star of Registraton  -->
                        <div class="container">
                          <h3 class="text-info">Customer Register</h3>
      <form class="form-horizontal" role="form">
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
          <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" class="btn btn-success">Register</button>
             <button type="Reset" class="btn btn-primary">Reset</button>
          </div>
        </div>
      </form>
      </div>

                        <!-- End of Registration -->
                      </div>

                      <div class="tab-pane fade" id="settings">
                        <!-- Star of Import History -->
                                   <div class="container-fluid">
                               <div class="row">
        <div class="panel panel-default filterable">
            <div class="panel-heading" style="background-color:#fff;">
                <h1 class="panel-title">Import History</h1>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>somthing@gmail.ocm</td>
                    </tr>
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



<!-- model code is here -->
  

<!-- End of model -->

@stop


@section('script')

@stop