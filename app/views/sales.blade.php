
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
    <div class="panel panel-primary">
   <div class="panel-heading">
      <h2 class="panel-title">
        <i class="fa fa-cloud"> </i>
         Sales
      </h2>
   </div>
   <div class="panel-body">
   <h3 class="active-tab"><strong>Sales Tab</strong>: <span></span></h3>
<hr>
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
<div id="myTabContent" class="tab-content">
<!-- Customer Tab Start -->
   <div class="tab-pane fade in active" id="home">
    <h3 class="text-success">Customer Info</h3>
    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
      <thead>
        <tr>
          <th>Username</th>
          <th>Full Name</th>
          <th>Points</th>
          <th>Notes</th>
          <th>Edit</th>
          <th>Delete</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>alex</td>
          <td>Alex Nilson</td>
          <td>1234</td>
          <td class="center">power user </td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td>
        </tr>
        <tr>
          <td>lisa</td>
          <td>Lisa Wong </td>
          <td>434</td>
          <td class="center">new user</td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>nick12 </td>
          <td>Nick Roberts</td>
          <td>232</td> 
          <td class="center">power user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>goldweb</td>
          <td>Sergio Jackson</td>
          <td> 132</td> 
          <td class="center"> elite user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
      </tbody>
    </table>
   </div>
   <!-- Customer Tab End -->

   <!-- Agency Tab Start -->

   <div class="tab-pane fade" id="agency">
      <h3 class="text-info">Agency Info</h3>
          <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
      <thead>
        <tr>
          <th>Username</th>
          <th>Full Name</th>
          <th>Points</th>
          <th>Notes</th>
          <th>Edit</th>
          <th>Delete</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>alex</td>
          <td>Alex Nilson</td>
          <td>1234</td>
          <td class="center">power user </td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td>
        </tr>
        <tr>
          <td>lisa</td>
          <td>Lisa Wong </td>
          <td>434</td>
          <td class="center">new user</td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>nick12 </td>
          <td>Nick Roberts</td>
          <td>232</td> 
          <td class="center">power user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>goldweb</td>
          <td>Sergio Jackson</td>
          <td> 132</td> 
          <td class="center"> elite user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
      </tbody>
    </table>
   </div>

   <!-- Agency Tab End -->

   <!-- Customer History Tab Start -->

      <div class="tab-pane fade" id="Chistory">
      <h3 class="text-info">Customer Sales History Info</h3>
          <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
      <thead>
        <tr>
          <th>Username</th>
          <th>Full Name</th>
          <th>Points</th>
          <th>Notes</th>
          <th>Edit</th>
          <th>Delete</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>alex</td>
          <td>Alex Nilson</td>
          <td>1234</td>
          <td class="center">power user </td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td>
        </tr>
        <tr>
          <td>lisa</td>
          <td>Lisa Wong </td>
          <td>434</td>
          <td class="center">new user</td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>nick12 </td>
          <td>Nick Roberts</td>
          <td>232</td> 
          <td class="center">power user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>goldweb</td>
          <td>Sergio Jackson</td>
          <td> 132</td> 
          <td class="center"> elite user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
      </tbody>
    </table>
   </div>
   <!-- Customer History Tab End -->

   <!-- Agency History Start -->
      <div class="tab-pane fade" id="Ahistory">
      <h3 class="text-info">Agency Sales History Info</h3>
          <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
      <thead>
        <tr>
          <th>Username</th>
          <th>Full Name</th>
          <th>Points</th>
          <th>Notes</th>
          <th>Edit</th>
          <th>Delete</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>alex</td>
          <td>Alex Nilson</td>
          <td>1234</td>
          <td class="center">power user </td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td>
        </tr>
        <tr>
          <td>lisa</td>
          <td>Lisa Wong </td>
          <td>434</td>
          <td class="center">new user</td>
          <td><a class="edit" href="javascript:;">Edit </a></td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>nick12 </td>
          <td>Nick Roberts</td>
          <td>232</td> 
          <td class="center">power user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
        <tr>
          <td>goldweb</td>
          <td>Sergio Jackson</td>
          <td> 132</td> 
          <td class="center"> elite user</td>
          <td><a class="edit" href="javascript:;">Edit </a> </td>
          <td><a class="delete" href="javascript:;">Delete </a></td> 
        </tr>
      </tbody>
    </table>
   </div>
   <!-- Agency History End -->

   <!-- Register Customer -->
   <div class="tab-pane fade" id="jmeter">
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
</div>

@stop