<!DOCTYPE html>
<html lang="en" class="full-height">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="/css/compiled.min.css">
        <link rel="stylesheet" href="/css/landing.min.css">
        <style>
        .intro-2 {
        /*background: url("/img/89.jpg")no-repeat center center;*/
        background-size: cover;
        }
        .top-nav-collapse {
        background-color: white !important;
        }
        .navbar:not(.top-nav-collapse) {
        background: transparent !important;
        }
        @media (max-width: 768px) {
        .navbar:not(.top-nav-collapse) {
        background: white !important;
        }
        }
        .md-form .prefix {
        font-size: 1.5rem;
        margin-top: 1rem;
        }
        h6 {
        line-height: 1.7;
        }
        @media (max-width: 740px) {
        .full-height,
        .full-height body,
        .full-height header,
        .full-height header .view {
        height: 1100px;
        }
        }
        </style>
    </head>
    <body class="fixed-sn white-skin">
        <header>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="/img/logo.png" height="40px" />
                    </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
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
                        </ul>
                        <ul class="navbar-nav nav-flex-icons">
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
                </div>
            </nav>
            <!--Intro Section-->
            <section class="view intro-2 hm-indigo-slight">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center">
                            <div class="row flex-center pt-5 mt-3">
                                <div class="col-md-6 wow fadeInLeft">
                                    <img src="/img/banner.png" class="img-fluid">
                                </div>
                                <div class="col-md-6 wow fadeInRight text-center">
                                    <div class="col-12 px-0">
                                        <img src="/img/g.png" class="img-fluid">
                                    </div>
                                    <div class="col-8 offset-2 mx-auto px-0" style="    border-radius: 8%;
                                        border: 10px solid #ef5350;">
                                        <img src="/img/add4.jpg" class="img-fluid" style="border-radius: 4%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <main  class="software-lp mt-4">
            <div class="container-fluid">
                <section class="py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="row">
                                    <div class="col-12">
                                        <!--Section: Team v.3-->
                                        <section class="section team-section pb-4  py-2">
                                            
                                            <!--Section heading-->
                                            <h4 class="h4 text-center">Today's Highlighted Profiles</h4>
                                            <!--Section description-->
                                            <p class="section-description blue-text">We Show Four New Profiles daily on Our Home Page on the First Come First Serve Bases</p>
                                            <!--Grid row-->
                                            <div class="row mb-lg-4 center-on-small-only">
                                                <!--Grid column-->
                                                <div class="col-lg-6 col-md-12 mb-r">
                                                    <div class="col-md-6 float-left">
                                                        <div class="avatar">
                                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded z-depth-1" alt="First sample avatar image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 float-right">
                                                        <h4>
                                                        <strong>John Doe</strong>
                                                        </h4>
                                                        <h6 class="font-bold  mb-4">Web Designer</h6>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                                                        <!--Facebook-->
                                                        <a class="icons-sm fb-ic">
                                                            <i class="fa fa-info"></i> View Details
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--Grid column-->
                                                <!--Grid column-->
                                                <div class="col-lg-6 col-md-12 mb-r">
                                                    <div class="col-md-6 float-left">
                                                        <div class="avatar">
                                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded z-depth-1" alt="Second sample avatar image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 float-right">
                                                        <h4>
                                                        <strong>Maria Kate</strong>
                                                        </h4>
                                                        <h6 class="font-bold  mb-4">Photographer</h6>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                                                        <!--Facebook-->
                                                        <a class="icons-sm fb-ic">
                                                            <i class="fa fa-info"></i> View Details
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--Grid column-->
                                            </div>
                                            <!--Grid row-->
                                            <!--Grid row-->
                                            <div class="row center-on-small-only">
                                                <!--Grid column-->
                                                <div class="col-lg-6 col-md-12 mb-r">
                                                    <div class="col-md-6 float-left">
                                                        <div class="avatar">
                                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" class="rounded z-depth-1" alt="Fourth sample avatar image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 float-right">
                                                        <h4>
                                                        <strong>Anna Deynah</strong>
                                                        </h4>
                                                        <h6 class="font-bold  mb-4">Web Developer</h6>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                                                        <!--Facebook-->
                                                        <a class="icons-sm fb-ic">
                                                            <i class="fa fa-info"></i> View Details
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--Grid column-->
                                                <!--Grid column-->
                                                <div class="col-lg-6 col-md-12 mb-r">
                                                    <div class="col-md-6 float-left">
                                                        <div class="avatar">
                                                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(29).jpg" class="rounded z-depth-1" alt="Fifth sample avatar image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 float-right">
                                                        <h4>
                                                        <strong>Sarah Melyah</strong>
                                                        </h4>
                                                        <h6 class="font-bold  mb-4">Front-end Developer</h6>
                                                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.</p>
                                                        <!--Google +-->
                                                        <a class="icons-sm fb-ic">
                                                            <i class="fa fa-info"></i> View Details
                                                        </a>
                                                    </div>
                                                </div>
                                                <!--Grid column-->
                                            </div>
                                            <!--Grid row-->
                                        </section>
                                        <!--Section: Team v.3-->
                                    </div>
                                </div>
                                @if(count($blogs) > 0)
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="h1 text-center py-5">Recent Blogs</h2>
                                        @foreach($blogs as $blog)
                                        <div class="media mb-1">
                                            <a class="media-left waves-light" href="/members/{{$blog->user_id}}">
                                                <img class="rounded-circle" src="{{$blog->avtar}} " alt="Generic placeholder image" height="100px" width="100px">
                                            </a>
                                            <div class="media-body">
                                                <a href="/blogs/{{$blog->id}}"><h4 class="media-heading">{{$blog->title}}</h4></a>
                                                <h6 class="text-muted">By {{$blog->user_name}} - {{$blog->created_at}}</h6>
                                                <p class="text-justify">{{$blog->short_desc}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-sm12 col-md-3">
                                <div class="row my-3">
                                    @if(count($circulars) > 0)
                                    <div class="col-12">
                                        <h4 class="text-center h4 mb-5">Latest Circulars</h4>
                                        <div class="list-group transparent">
                                            @foreach($circulars as $circular)
                                            <a href="/circulars/{{$circular->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <p class="mb-1">$circular->title</p>
                                                <small class="text-muted">$circular->created_at</small>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    @if(count($event) > 0)
                                    <div class="row mt-5">
                                        <div class="col-sm-12">
                                            <h5 class="text-center mb-5">Upcoming Events</h5>
                                            <!--Card Narrower-->
                                            <div class="text-center card card-cascade narrower">
                                                <!--Card image-->
                                                <div class="view overlay hm-white-slight">
                                                    <img src="/covers/{{$event[0]->cover_image}} " class="img-fluid" alt="" style="max-width: 100%">
                                                    <a>
                                                        <div class="mask"></div>
                                                    </a>
                                                </div>
                                                <!--/.Card image-->
                                                <!--Card content-->
                                                <div class="card-body">
                                                    <h5 class="pink-text"><i class="fa fa-calendar"></i>{{$event[0]->time}} </h5>
                                                    <!--Title-->
                                                    <h4 class="card-title">{{$event[0]->title}} </h4>
                                                    <a class="btn btn-unique" href="/events/{{$event[0]->id}}">View Details</a>
                                                </div>
                                                <!--/.Card content-->
                                            </div>
                                            <!--/.Card Narrower-->
                                            <hr>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
            <!--Main content-->
            @include('./includes/footer')
            <!-- SCRIPTS -->
            <script src="/js/jquery-3.2.1.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" charset="utf-8"></script>
<script src="/js/mdb.min.js" charset="utf-8"></script>

                
            <script>
            //Animation init
            new WOW().init();
            //Modal
            $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
            })
            // Material Select Initialization
            $(document).ready(function () {
            $('.mdb-select').material_select();
            });
            </script>
        </body>
    </html>