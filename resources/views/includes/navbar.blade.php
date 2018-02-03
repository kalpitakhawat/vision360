<nav class="mb-1 navbar navbar-expand-lg">
                <a class="navbar-brand" href="#"><img src="/img/logo.png" height="40px" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('circulars')}}">Circulars</a>
                        </li>
     <!--                    <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Requirements</a>
                        </li>
 -->                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('events')}}">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('blogs')}}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('members')}}">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('about')}}">About Us</a>
                        </li>
                        @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="#">My Profile</a>
                                <form action="/logout" method="POST">
                                    {{csrf_field()}}
                                    <button type="submit" class="dropdown-item waves-effect waves-light" href="#">Logout</button>
                                </form>
                            </div>
                        </li>
                        @else
                         <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="{{route('login')}}">Sign In / Sign Up</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>