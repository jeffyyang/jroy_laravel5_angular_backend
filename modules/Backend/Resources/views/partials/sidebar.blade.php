<nav class="navi ng-scope" >
   <!-- first --> 
   <ul class="nav ng-scope"> 
      <li class="hidden-folded padder m-t m-b-sm text-muted text-xs"> 
          <span translate="aside.nav.HEADER" class="ng-scope">Navigation</span> 
      </li> 
      <li> 
          <a href="#"> 
          <i class="glyphicon glyphicon-stats icon text-primary-dker"></i> 
          <span class="font-bold">Dashboard</span> 
          </a> 
      </li> 
      <li> 
          <a href="#"> 
          <i class="glyphicon glyphicon-calendar icon text-info-dker"></i> 
          <span class="font-bold">Calendar</span> 
          </a> 
      </li> 
      <li class="line dk"></li> 
      
      <li class="hidden-folded padder m-t m-b-sm text-muted text-xs"> <span>Modules</span> </li> 
      <li class="dropdown"> 
           <a href="javascript:;" class="auto dropdown-toggle" data-toggle="dropdown"> 
                <span class="pull-right text-muted"> 
                  <i class="fa fa-fw fa-angle-right text"></i><i class="fa fa-fw fa-angle-down text-active"></i> 
                </span> 
                <b class="badge bg-info pull-right">3</b> 
                <i class="glyphicon glyphicon-th"></i> <span>资讯</span> 
           </a> 
           <ul class="nav nav-sub dk"> 
                <li class="nav-sub-header"> <a href=""> <span></span> </a> </li> 
                <li class="active"> <a  href="/backend/cms/category"> <span>栏目管理</span> </a> </li> 
                <li> <a href="/backend/cms/posts"> <span>资讯管理</span> </a> </li> 
           </ul> 
       </li>

      <li class="line dk hidden-folded"></li> 
      <li class="hidden-folded padder m-t m-b-sm text-muted text-xs"> <span>全站管理</span> </li> 
      
      <li> <a href="" class="auto"> <span class="pull-right text-muted"> <i class="fa fa-fw fa-angle-right text"></i> <i class="fa fa-fw fa-angle-down text-active"></i> </span> <i class="fa fa-facebook-square text-success-lter"></i> <span>广告管理</span> </a> 
       <ul class="nav nav-sub dk"> 
        <li ui-sref-active="active"> <a ui-sref="app.slide.list" href="#/app/slide/list">广告管理</a> </li> 
        <li ui-sref-active="active"> <a ui-sref="app.banner.all" href="#/app/banner/all">Banner管理</a> </li> 
       </ul> </li> 
      <li> <a ui-sref="app.setting" href="#/app/setting"> <i class="fa fa-cogs icon text-primary-dker"></i> <span class="font-bold">系统设置</span> </a> </li> 
   </ul> 
   <!-- / third -->
</nav> 