<?php include realpath('src/templates/headers/auth-header.php'); ?>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <!-- Register Form-->
                            <div class="col-xl-8 col-lg-9">
                                <div class="card my-5">
                                    <div class="card-body p-5 text-center">
                                        <div class="h3 font-weight-light mb-3">Create an Account</div>
                                        <div class="small text-muted mb-2">Sign in using...</div>
                                        <a class="btn btn-icon btn-facebook mx-1" href="javascript:void(0);"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a><a class="btn btn-icon btn-github mx-1" href="javascript:void(0);"><i class="fab fa-github fa-fw fa-sm"></i></a><a class="btn btn-icon btn-google mx-1" href="javascript:void(0);"><i class="fab fa-google fa-fw fa-sm"></i></a><a class="btn btn-icon btn-twitter mx-1" href="javascript:void(0);"><i class="fab fa-twitter fa-fw fa-sm"></i></a>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body p-5">
                                        <div class="text-center small text-muted mb-4">...or enter your information below.</div>
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="text-gray-600 small" for="firstNameExample">First name</label><input class="form-control form-control-solid py-4" type="text" placeholder aria-label="First Name" aria-describedby="firstNameExample" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="text-gray-600 small" for="lastNameExample">Last name</label><input class="form-control form-control-solid py-4" type="text" placeholder aria-label="Last Name" aria-describedby="lastNameExample" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="text-gray-600 small" for="emailExample">Email address</label><input class="form-control form-control-solid py-4" type="text" placeholder aria-label="Email Address" aria-describedby="emailExample" /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="text-gray-600 small" for="passwordExample">Password</label><input class="form-control form-control-solid py-4" type="password" placeholder aria-label="Password" aria-describedby="passwordExample" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="text-gray-600 small" for="confirmPasswordExample">Confirm Password</label><input class="form-control form-control-solid py-4" type="password" placeholder aria-label="Confirm Password" aria-describedby="confirmPasswordExample" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between">
                                                <div class="custom-control custom-control-solid custom-checkbox">
                                                    <input class="custom-control-input small" id="customCheck1" type="checkbox" /><label class="custom-control-label mr-3" for="customCheck1">I accept the <a href="javascript:void(0);">terms &amp; conditions</a>.</label>
                                                </div>
                                                <a class="btn btn-primary" href="login-social.php">Create Account</a>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body px-5 py-4">
                                        <div class="small text-center">Have an account? <a href="login-social.php">Sign in!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<?php include realpath('src/templates/footers/auth-footer.php'); ?>