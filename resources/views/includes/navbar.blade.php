<header>
  <nav class="navbar navbar-expand-lg navbar-dark blue-gradient">
                <a class="navbar-brand" href="#">
                  <img src="/img/vision_360.png" height="70px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect waves-light" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="/circulars">Circulars</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Requirements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="/events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="/blogs">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="/members">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="#">Contact Us</a>
                        </li>
                        @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-unique" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item waves-effect waves-light" href="#">My Profile</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Logout</a>
                            </div>
                        </li>
                        @else
                         <li class="nav-item">
                            <a class="nav-link waves-effect waves-light" href="login">Sign In / Sign Up</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>
            
</header>
