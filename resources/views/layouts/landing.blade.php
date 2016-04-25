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
        @include('layouts.public_partials.p_mainheader')
        
        <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-2"> <!-- sidebar -->
                       <!-- sidebar -->
                       @include('layouts.public_partials.p_sidebar')
                    </div>
                    <div class="col-lg-10">
                        @include('layouts.public_partials.alert_modal')
                        @yield('main-content');
                    </div>
                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->

        <div id="c"><!-- Main Footer -->
            @include('layouts.partials.footer')
        </div>

        @section('scripts')
            @include('layouts.partials.scripts')
        @show

        </div><!-- ./wrapper -->
    </body>
</html>
