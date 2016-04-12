<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', isset($contentTitle)? $contentTitle : '')
        <small>@yield('contentheader_description',isset($contentDes) ? $contentDes : '')</small>
    </h1>
    @if(Session::has('notification'))
      <div class="col-md-3 col-md-offset-2">
        <p class="text-center alert alert-{{ Session::get('alert') }}"><strong>{{ Session::get('notification') }}</strong></p>
      </div>
    @endif
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
    </ol>
</section>
