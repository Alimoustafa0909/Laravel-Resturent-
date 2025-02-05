<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>

                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index-2.html">Feliciano</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('about.page')}}" class="nav-link">About</a></li>

                <li class="nav-item"><a href="{{route('menu.page')}}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{route('contact.index')}}" class="nav-link">Contact</a></li>

                <li class="nav-item"><a href="{{route('reviews.index')}}" class="nav-link">Reviews</a></li>



                @auth


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <a href="{{route('logout')}} "
                                   onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                            </a>
                        </div>
                    </li>

                @else
                    <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Sign in</a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link"> Register</a></li>

                @endif

                <li class="nav-item cta"><a href="{{route('reservation.index')}}" class="nav-link">Book a table</a></li>
            </ul>
        </div>
    </div>
</nav>
