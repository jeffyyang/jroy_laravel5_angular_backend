<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" /> 
  <title>Be Angular | Bootstrap Admin Web App with AngularJS</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{ asset('static/css/bootstrap.css') }}" type="text/css" /> 
  <link rel="stylesheet" href="{{ asset('static/css/font-awesome.min.css') }}" type="text/css" /> 
  <link rel="stylesheet" href="{{ asset('static/css/base.css') }}" type="text/css" /> 
 </head> 
 <body> 
  <!-- uiView:  -->
  <div class="app ng-scope app-header-fixed"> 
   <!-- navbar --> 
   <div class="app-header navbar ng-scope"> 
    <!-- navbar header --> 
    <div class="navbar-header bg-black"> 
     <button class="pull-right visible-xs dk" ui-toggle-class="show" data-target=".navbar-collapse"> <i class="glyphicon glyphicon-cog"></i> </button> 
     <button class="pull-right visible-xs" ui-toggle-class="off-screen" data-target=".app-aside" ui-scroll="app"> <i class="glyphicon glyphicon-align-justify"></i> </button> 
     <!-- brand --> 
     <a href="#/" class="navbar-brand text-md"> <i class="fa fa-btc"></i> <img src="{{ asset('static/images/logo.png') }}" alt="." class="hide" /> <span class="hidden-folded m-l-xs text-md ng-binding">柚皮网后台管理</span> </a> 
     <!-- / brand --> 
    </div> 
    <!-- / navbar header --> 
    <!-- navbar collapse --> 
    <div class="collapse navbar-collapse box-shadow bg-white-only"> 
     <!-- buttons --> 
     <div class="nav navbar-nav m-l-sm hidden-xs"> 
      <a href="" class="btn no-shadow navbar-btn" ng-click="app.settings.asideFolded = !app.settings.asideFolded"> <i class="fa fa-dedent fa-fw"></i> </a> 
      <a href="" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user"> <i class="icon-user fa-fw"></i> </a> 
     </div> 
     <!-- / buttons --> 
     <!-- link and dropdown --> 
     <ul class="nav navbar-nav hidden-sm"> 
      <li class="active"> <a href=""><i class="fa fa-cloud-upload fa-fw"></i> <span translate="header.navbar.UPLOAD" class="ng-scope">Upload</span></a> </li> 
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-fw fa-plus visible-xs-inline-block"></i> <span translate="header.navbar.new.NEW" class="ng-scope">New</span> <span class="caret"></span> </a> 
       <ul class="dropdown-menu" role="menu"> 
        <li><a href="#" translate="header.navbar.new.PROJECT" class="ng-scope">Projects</a></li> 
        <li> <a href="#"> <span class="badge bg-info pull-right">5</span> <span translate="header.navbar.new.TASK" class="ng-scope">Task</span> </a> </li> 
        <li><a href="#" translate="header.navbar.new.USER" class="ng-scope">User</a></li> 
        <li class="divider"></li> 
        <li> <a href="#"> <span class="badge bg-danger pull-right">4</span> <span translate="header.navbar.new.EMAIL" class="ng-scope">Email</span> </a> </li> 
       </ul> </li> 
     </ul>
     <form class="navbar-form navbar-form-sm navbar-left shift ng-scope ng-pristine ng-valid" ui-shift="prependTo" target=".navbar-collapse" role="search" ng-controller="TypeaheadCtrl"> 
      <div class="form-group"> 
       <div class="input-group"> 
        <input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control input-sm bg-light no-border rounded padder ng-pristine ng-valid" placeholder="Search projects..." aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-013-434" />
        <!-- ngIf: isOpen() --> 
        <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button> </span> 
       </div> 
      </div> 
     </form> 
     <!-- / link and dropdown --> 
     <!-- search form --> 
     <!-- / search form --> 
     <!-- nabar right --> 
     <ul class="nav navbar-nav navbar-right"> 
      <li class="hidden-xs"> <a ui-fullscreen=""></a> </li> 
          <li class="dropdown"> <a href="" class="dropdown-toggle clear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm"> <img src="{{ asset('static/images/a0.jpg') }}" alt="..." /> <i class="on md b-white bottom"></i> </span> <span class="hidden-sm hidden-md">John.Smith</span> <b class="caret"></b> </a> 
           <!-- dropdown --> 
             <ul class="dropdown-menu animated fadeInRight w"> 
              <li class="wrapper b-b m-b-sm bg-light m-t-n-xs"> 
               <div> 
                <p>300mb of 500mb used</p> 
               </div> 
               <div class="progress-xs m-b-none bg-white progress ng-isolate-scope" value="60"> 
                <div class="progress-bar" ng-class="type &amp;&amp; 'progress-bar-' + type" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ng-style="{width: percent + '%'}" aria-valuetext="60%" ng-transclude="" style="width: 60%;"></div> 
               </div> </li> 
              <li> <a href=""> <span class="badge bg-danger pull-right">30%</span> <span>Settings</span> </a> </li> 
              <li> <a ui-sref="app.page.profile">Profile</a> </li> 
              <li> <a ui-sref="app.docs"> <span class="label bg-info pull-right">new</span> Help </a> </li> 
              <li class="divider"></li> 
              <li> <a href="/backend/auth/logout">Logout</a> </li> 
             </ul> 
           <!-- / dropdown --> 
         </li> 
     </ul> 
     <!-- / navbar right --> 
    </div> 
    <!-- / navbar collapse -->
   </div> 
   <!-- / navbar --> 
   <!-- menu --> 
   <!-- ngInclude: 'modules/backend/tpl/blocks/aside.html' -->
   <div class="app-aside hidden-xs bg-black">
    <div class="aside-wrap ng-scope"> 
     <div class="navi-wrap"> 

      <!-- nav --> 
      @include('backend::partials.sidebar')
      <!-- nav --> 
      <!-- aside footer --> 
      <div class="wrapper m-t"> 
         <div class="text-center-folded"> 
            Created By Jroy
         </div> 
      </div> 
      <!-- / aside footer --> 
     </div> 
    </div>
   </div> 
   <!-- / menu --> 
   <!-- content --> 
   <div class="app-content ng-scope"> 
    <div class="butterbar  ng-animate"></div> 
    <a href="" class="off-screen-toggle hide" ></a> 
    <!-- uiView:  -->
    <div class="app-content-body fade-in-up ng-scope"> 
     <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope" > 
      <div class="col"> 
           <!-- uiView:  -->
            <div class="fade-in-up ng-scope">
                 <div class="bg-light lter b-b wrapper-xs ng-scope"> 
                    <ul class="breadcrumb">
                      <li><a ui-sref="app.dashboard" href="#/app/dashboard"><i class="fa fa-home"></i> 首页</a></li>
                      <li><a ui-sref="app.cms.category.list" href="#/app/cms/category/list">栏目列表</a></li>
                      <li class="active">新增栏目</li>
                    </ul>
                 </div> 
                 <div class="wrapper-md ng-scope" > 
                   <div class="panel panel-default"> 
                      <div class="panel-heading">{{ $title or 'Dashboard' }}</div> 
                      <div class="panel-body b-b b-light">
                            @yield('content')
                       </div> 
                      </div> 
                 </div>
            </div>
      </div> 
     </div>
    </div> 
   </div> 
   <!-- /content --> 
   <!-- footer --> 
   <div class="app-footer wrapper b-t bg-light ng-binding ng-scope"> 
    <span class="pull-right ng-binding">1.1.3 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i class="fa fa-long-arrow-up"></i></a></span> &copy; 2015 Copyright By jroy@foxmail.com. 
   </div> 
   <!-- / footer --> 
  </div> 
  <!-- jQuery --> 
  <script src="{{ asset('static/js/jquery-1.10.1.min.js') }}"></script> 
  <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

 </body>
</html>