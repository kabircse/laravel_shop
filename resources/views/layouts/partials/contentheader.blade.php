<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', isset($contentTitle)? $contentTitle : '')
        <small>@yield('contentheader_description',isset($contentDes) ? $contentDes : '')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
    </ol>
</section>
@if(Session::has('notification'))
  <span class="text-center alert alert-{{ Session::get('alert') }} alert_msg">{{ Session::get('notification') }}</span>
@endif
