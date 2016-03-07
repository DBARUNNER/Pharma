
@extends('layouts.main')


@section('admin-tab-style')
  <link href="{{ URL::asset('assets/css/tabStyle.css') }}" rel="stylesheet">
@stop

@section('title')
Admin panel/stockReport
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
            <a  href="{{URL::route('admin-get') }}" >
              <i class="fa fa-desktop"></i>
              <span>Sales report</span>
            </a>
                     <!--  <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul> -->
          </li>
          <li class="sub-menu">
            <a class="active" href="{{URL::route('daily-report-get') }}" >
              <i class="fa fa-cogs"></i>
              <span>Daily Expenses</span>
            </a>
                      <!-- <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul> -->
          </li>
          <li class="sub-menu">
            <a href="#" >
              <i class="fa fa-cogs"></i>
              <span>Stock</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="#" >
              <i class="fa fa-cogs"></i>
              <span>Employee</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="#" >
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
  <section>
    <div class="tabs tabs-style-fillup">
      <nav>
        <ul>
          <li><a href="#section-fillup-1" class="icon icon-home"><span>Home</span></a></li>
          <li><a href="#section-fillup-2" class="icon icon-gift"><span>Deals</span></a></li>
          <li><a href="#section-fillup-3" class="icon icon-upload"><span>Upload</span></a></li>
          <li><a href="#section-fillup-4" class="icon icon-coffee"><span>Work</span></a></li>
          <li><a href="#section-fillup-5" class="icon icon-config"><span>Settings</span></a></li>
        </ul>
      </nav>
      <div class="content-wrap">
        <section id="section-fillup-1"><p>1</p></section>
        <section id="section-fillup-2"><p>2</p></section>
        <section id="section-fillup-3"><p>3</p></section>
        <section id="section-fillup-4"><p>4</p></section>
        <section id="section-fillup-5"><p>5</p></section>
      </div><!-- /content -->
    </div><!-- /tabs -->
  </section>
@stop

@section('script')
  <script type="text/javascript" src="{{ URL::asset('assets/js/admin-tab.js') }}"></script>
@stop