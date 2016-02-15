
@extends('layouts.main')


@section('import-style')
<style>
/*style for import page*/

@import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
/* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/
.board{
    width: 100%;
margin: 0px auto;
min-height: 800px;
background: #fff;
/*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
}
.board .nav-tabs {
    position: relative;
    /* border-bottom: 0; */
    /* width: 80%; */
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}

.board > div.board-inner{
    background: #fafafa url('../img/geometry2.png');
    background-size: 30%;
}

p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 61%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
    margin-left: 83px; 
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    /* background-color: #ffffff; */
    border: 0;
    border-bottom-color: transparent;
}

span.round-tabs{
    width: 100px;
    height: 100px;
    line-height: 17px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

span.round-tabs.one{
    color: #506a85;
    border: 2px solid #d2dae3;
}

li.active span.round-tabs.one{
    background: #1abb9c !important;
    border: 1px solid #fff;
    color: #fff;
}

span.round-tabs.two{
    color: #506a85;
    border: 2px solid #d2dae3;
}

li.active span.round-tabs.two{
    background: #1abb9c !important;
    border: 1px solid #fff;
    color: #fff;
}

span.round-tabs.three{
    color: #506a85;
    border: 2px solid #d2dae3;
}

li.active span.round-tabs.three{
    background: #1abb9c !important;
    border: 1px solid #fff;
    color: #fff;
}

span.round-tabs.four{
    color: #506a85;
    border: 2px solid #d2dae3;
}

li.active span.round-tabs.four{
    background: #1abb9c !important;
    border: 1px solid #fff;
    color: #fff;
}

span.round-tabs.five{
    color: #506a85;
    border: 2px solid #999;
}

li.active span.round-tabs.five{
    background: #1abb9c !important;
    border: 1px solid #fff;
    color: #fff;
}

.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;
    
}
li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
}
.nav-tabs > li a{
   width: 100px;
   height: 100px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-content{
}
.tab-pane{
   position: relative;
padding-top: 50px;
}
.tab-content .head{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}



@media( max-width : 585px ){
    
.board {
width: 90%;
height:auto !important;
}
span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
.tab-content .head{
        font-size:20px;
        }
.nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}
</style>

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
                              <i class="glyphicon glyphicon-home import-icon" style="margin-bottom: 14px;"></i>
                              <span>Suplier List</span>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="Import form Suplier" >
                     <span class="round-tabs two" id="suplier-tab">
                         <i class="glyphicon glyphicon-user import-icon" ></i>
                         <span style="font-size: 12px;">Import from Suplier</span>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="Add Employee">
                     <span class="round-tabs three" id="suplier-tab">
                          <i class="glyphicon glyphicon-gift import-icon"></i>
                          <span>Add Employee</span>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Import History">
                         <span class="round-tabs four" id="suplier-tab">
                              <i class="glyphicon glyphicon-comment import-icon"></i>
                              <span>Import History</span>
                         </span> 

                     </a></li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">        
                          <div class="container">
                               <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="profile">
                          <h3 class="head text-center">Second Tab</h3>
                          
                          
                      </div>

                      <div class="tab-pane fade" id="messages">
                          <h3 class="head text-center">Third Tab</h3>
                    
                      </div>

                      <div class="tab-pane fade" id="settings">
                          <h3 class="head text-center">Fourth Tab</h3>
                    
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


@stop