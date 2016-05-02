
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><b>Laravel Shop</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ url('home/aboutus') }}">About Us</a></li>
                    <li><a href="{{ url('home/history') }}">Our History</a></li>
                    <li><a href="{{ url('home/contact') }}">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('cart/index') }}"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-lock"></span>Login</a></li>
                        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-book"></span>Register</a></li>
                    @else
                        <li><a href="{{ url('wish/index') }}">Wish List</span></a></li>
                        @if(Auth::user()->is_admin)
                          <li><a href="{{ url('admin/home') }}"><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->name }}</a></li>
                        @else                          
                          <li><a href="{{ url('home/userdashboard') }} "><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->name }}</a></li>
                        @endif
                        <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>