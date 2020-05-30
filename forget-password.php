<?php include realpath('src/templates/headers/auth-header.php'); ?>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 font-weight-light mb-0">Password Recovery</div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <div class="text-center small text-muted mb-4">Enter your email address below and we will send you a link to reset your password.</div>
                                    <form>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="emailExample">Email address</label>
                                            <input class="form-control form-control-solid py-4" type="text" placeholder aria-label="Email Address" aria-describedby="emailExample" />
                                        </div>
                                        <div class="form-group mb-0">
                                            <a class="btn btn-primary" href="login-social.php">Reset Password</a>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">New user? 
                                        <a href="register-social.php">Create an account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
<?php include realpath('src/templates/footers/auth-footer.php'); ?>