<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">

    @section('htmlheader')
        @include('layouts.public_partials.p_htmlheader')
    @show

    
    <body class="skin-blue sidebar-mini">
    <div class="wrapper">        
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>adminlte-laravel</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#desc" class="smoothScroll">Description</a></li>
                    <li><a href="#showcase" class="smoothScroll">Showcase</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="admin/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
        
        <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-2"> <!-- sidebar -->
                       <!-- sidebar -->
                       @include('layouts.public_partials.p_sidebar')
                    </div>
                    <div class="col-lg-10">                
                        @yield('main-content');
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    
        <div id="c"><!-- Main Footer -->
            @include('layouts.partials.footer')
        </div>
    
        @section('scripts')
            @include('layouts.public_partials.p_scripts')
        @show

        </div><!-- ./wrapper -->
    </body>
<style>
    .carousel .item {
        height: 250px;
    }
    .item img {
        position: absolute;
        top: 0;
        left: 0;
        min-height: 250px;
    }
</style>
</html>