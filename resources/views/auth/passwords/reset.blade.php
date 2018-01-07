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
                                    <h3 class="dark-grey-text mb-5"><strong>Reset Password</strong></h3>
                                </div>
                                <!--Body-->
                                <form>
                                    <div class="md-form">
                                    <input type="email" id="Form-email1" class="form-control" value="{{ old('email') }}" required="" autofocus>
                                    <label for="Form-email1">Your email</label>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p class="text-red">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                                </div>
                                <div class="md-form">
                                    <input type="password" id="Form-pass1" class="form-control" required="">
                                    <label for="Form-pass1">New Password</label>
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <p class="text-red">{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                                </div>
                                 <div class="md-form">
                                    <input type="password" id="Form-pass2" class="form-control" required="">
                                    <label for="Form-pass1">Confirm Password</label>
                                     @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <p class="text-red">{{ $errors->first('password_confirmation') }}</p>
                                    </span>
                                @endif
                                </div>

                                <div class="text-center mb-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light z-depth-1a">Change Password</button>
                                </div>
                                </form>
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