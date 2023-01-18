<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg  navigation">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <span class="lasu">
                            <img class="lasu-image" src="{{asset('frontend/images/lasu.jpeg')}}" alt="">
                            Lasu E-hub
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                            </li>
                            <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Department <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{url("department")}}">Law</a>
                                    <a class="dropdown-item" href="{{url("department")}}">Computer Science</a>
                                    <a class="dropdown-item" href="{{url("department")}}"> Biochemistry</a>
                                    <a class="dropdown-item" href="{{url("department")}}">Microbilogy</a>
                                    <a class="dropdown-item" href="{{url("department")}}"> Fishries</a>
                                    <a class="dropdown-item" href="{{url("department")}}"> Transport</a>
                                    <a class="dropdown-item" href="{{url("department")}}">Marketing</a>
                                    <a class="dropdown-item" href="{{url("department")}}">Sociology</a>
                                </div>
                            </li>
                            {{-- <li class="nav-item dropdown dropdown-slide">
                                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Listing <span><i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown list -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> --}}
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            {{-- <li class="nav-item">
                                <a class="nav-link login-button" href="index.html">Register</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link login-button" href="{{route('login')}}">Login</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link add-button" href="#"><i class="fa fa-shopping-cart"></i> Cart</a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>