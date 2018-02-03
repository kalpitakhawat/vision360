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
                                        <h3 class="dark-grey-text mb-5"><strong>Sign Up</strong></h3>
                                    </div>
                                    <!--Body-->
                                    <form id="needs-validation" action="/register" method="POST">
                                        {{csrf_field()}}
                                        <div class="md-form">
                                            <input type="text" name="f_name" id="Form-name1" class="form-control" required="" autofocus>
                                            <label for="Form-name1">First Name</label>
                                        </div>
                                        <div class="md-form ">
                                            <input type="text" name="l_name" id="Form-name2" class="form-control " required="">
                                            <label for="Form-name2">Last Name</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="email" name="email" id="Form-email1" class="form-control" required="">
                                            <label for="Form-email1">Your email</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="password" name="password" id="Form-pass1" class="form-control" required="">
                                            <label for="Form-pass1">Password</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="password" name="c_password" id="Form-pass2" class="form-control" required="">
                                            <label for="Form-pass1">Confirm Password</label>
                                        </div>
                                        <div class="text-center mb-3">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light z-depth-1a">Sign Up</button>
                                        </div>
                                    </form>
                                    <p class="font-small grey-text d-flex justify-content-center">Already a member ? <a href="#" class="blue-text">&nbsp;Sign In</a></p>
                                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign Up with:</p>
                                    <div class="row my-3 d-flex justify-content-center">
                                        <!--Facebook-->
                                        <a type="button" class="btn-floating my-1 btn-fb waves-effect waves-light" href="/auth/facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <!--Linked In-->
                                        <!-- <a type="button" class="btn-floating my-1 btn-li waves-effect waves-light">
                                            <i class="fa fa-linkedin"></i>
                                        </a> -->
                                        <!--Google +-->
                                        <a type="button" class="btn-floating my-1 btn-gplus waves-effect waves-light" href="/auth/google">
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
        <script type="text/javascript">
        var password = document.getElementById("Form-pass1"), confirm_password = document.getElementById("Form-pass2");
        function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
        confirm_password.setCustomValidity('');
        }
        }
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        </script>
    </body>
</html>