
@extends('layouts.main')




@section('title')
Sistan Pharma/Home
@stop





@section('sidbar')
<aside>
  <div id="sidebar"  class="nav-collapse ">
  <!-- sidebar menu start-->
  <ul class="sidebar-menu" id="nav-accordion"> 
    <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
    <h5 class="centered">Marcel Newman</h5>  
    <li class="mt" onclick="checkExpire();">
      <a class="active" href="{{URL::route('home-get')}}">
        <i class="fa fa-home"></i>
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
    </ul>            <!-- sidebar menu end-->
  </div>
</aside>
      <!--sidebar end-->


@stop

@section('content')

  <div id ="home-logo">
    <div id="homo-sub-logo">
      <img src="assets/images/logo.jpg">
      <h3 class="text-info">&nbsp &nbsp &nbsp Sistan Pharma</h3>
    </div>
  </div>
  <div class="row mt">
    <!-- SERVER STATUS PANELS -->
      <div class="col-md-4 col-sm-4 mb">
        <div class="white-panel pn donut-chart">
          <div class="white-header">
            <h5>SERVER LOAD</h5>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xs-6 goleft">
              <p><i class="fa fa-database"></i> 70%</p>
            </div>
          </div>
          <canvas id="serverstatus01" height="120" width="120"></canvas>
                <script>
                  var doughnutData = [
                      {
                        value: 70,
                        color:"#68dff0"
                      },
                      {
                        value : 30,
                        color : "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                </script>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        

                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn">
                            <div class="white-header">
                    <h5>TOP PRODUCT</h5>
                            </div>
                <div class="row">
                  <div class="col-sm-6 col-xs-6 goleft">
                    <p><i class="fa fa-heart"></i> 122</p>
                  </div>
                  <div class="col-sm-6 col-xs-6"></div>
                            </div>
                            <div class="centered">
                    <img src="assets/img/product.png" width="120">
                            </div>
                          </div>
                        </div><!-- /col-md-4 -->
                        
            <div class="col-md-4 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="white-panel pn">
                <div class="white-header">
                  <h5>TOP USER</h5>
                </div>
                <p><img src="assets/img/ui-zac.jpg" class="img-circle" width="80"></p>
                <p><b>Zac Snider</b></p>
                <div class="row">
                  <div class="col-md-6">
                    <p class="small mt">MEMBER SINCE</p>
                    <p>2012</p>
                  </div>
                  <div class="col-md-6">
                    <p class="small mt">TOTAL SPEND</p>
                    <p>$ 47,60</p>
                  </div>
                </div>
              </div>
            </div><!-- /col-md-4 -->
                        

    </div><!-- /row -->
@stop