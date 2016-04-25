
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
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="home/aboutus" class="smoothScroll">About Us</a></li>
                    <li><a href="home/history" class="smoothScroll">Our History</a></li>
                    <li><a href="home/contact" class="smoothScroll">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('cart/index') }}"><i class="fa fa-shopping-cart"></i><span>Cart</span></a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('wish/index') }}"><i class="fa fa-shopping-cart"></i><span>Wish List</span></a></li>
                        <li><a href="admin/home">{{ Auth::user()->name }}</a></li>
                        <li><a href="/logout">Logout</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>