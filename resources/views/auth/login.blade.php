<!DOCTYPE html>
<html>
    <head>
        <title></title>
        @include('/includes/headers')
        <style type="text/css">
        .form-elegant .font-small {
        font-size: 0.8rem; }
        .form-elegant .z-depth-1a {
        -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
        box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); }
        .form-elegant .z-depth-1-half,
        .form-elegant .btn:hover {
        -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
        box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }
        </style>
    </head>
    <body>
        <main>
            <div class="container text-white">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <section class="form-elegant mt-3 ">
                        <!--Form without header-->
                        <div class="card" style="min-width: 100px;">
                            <div class="card-body mx-5">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="dark-grey-text mb-5"><strong>Sign in</strong></h3>
                                </div>
                                <!--Body-->
                                <form method="post" action="./login">
                                    {{csrf_field()}}
                                    <div class="md-form">
                                    <input type="email" id="Form-email1" name="email" class="form-control" value="{{ old('email') }}" required="" autofocus>
                                    <label for="Form-email1">Your email</label>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p class="red-text">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                                </div>
                                <div class="md-form">
                                    <input type="password" id="Form-pass1" name="password" class="form-control" required="">
                                    <label for="Form-pass1">Your password</label>
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <p class="red-text">{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                                    <p class="font-small blue-text d-flex justify-content-end"> <a href="/password/reset" class="blue-text ml-1">Forgot Password?</a></p>
                                </div>
                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light z-depth-1a">Sign in</button>
                                </div>
                                </form>
                                <p class="font-small grey-text d-flex justify-content-center">Not a member ? <a href="/register" class="blue-text">&nbsp;Sign Up</a></p>
                                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>
                                <div class="row my-3 d-flex justify-content-center">
                                    <!--Facebook-->
                                    <a type="button" class="btn-floating my-1 btn-fb waves-effect waves-light">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <!--Linked In-->
                                    <a type="button" class="btn-floating my-1 btn-li waves-effect waves-light">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <!--Google +-->
                                    <a type="button" class="btn-floating my-1 btn-gplus waves-effect waves-light">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer pt-3 mb-1 justify-content-center">
                                <p class="font-small grey-text d-flex justify-content-center"><a href="/" class="blue-text">Back To Home</a></p>
                            </div>
                        </div>
                        <!--/Form without header-->
                    </section>
                    </div>
                </div>
            </div>
        </main>
        @include('/includes/scripts')
    </body>
</html>