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
                                    <div class="h3 font-weight-light mb-3">Ulogujte se</div>
                                    <a class="btn btn-icon btn-facebook mx-1" href="javascript:void(0);">
                                        <i class="fab fa-facebook-f fa-fw fa-sm"></i>
                                    </a>
                                    <a class="btn btn-icon btn-google mx-1" href="javascript:void(0);">
                                        <i class="fab fa-google fa-fw fa-sm"></i>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">
                                    <form>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="emailExample">E-mail adresa</label>
                                            <input class="form-control form-control-solid py-4" type="text" placeholder aria-label="Email Address" aria-describedby="emailExample" />
                                        </div>
                                        <div class="form-group">
                                            <label class="text-gray-600 small" for="passwordExample">Lozinka</label>
                                            <input class="form-control form-control-solid py-4" type="password" placeholder aria-label="Password" aria-describedby="passwordExample" />
                                        </div>
                                        <div class="form-group">
                                            <a class="small" href="forget-password.php">Lozinka zaboravljena</a>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                            <div class="custom-control custom-control-solid custom-checkbox">
                                                <input class="custom-control-input small" id="customCheck1" type="checkbox" />
                                                <label class="custom-control-label" for="customCheck1">Lozinka zaboravljena</label>
                                            </div>
                                            <a class="btn btn-primary" id="submit-login" name="submit-login" href="index-2.php">Ulogujte se</a>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">Novi korisnik? 
                                        <a href="register.php">Napravi svoj nalog!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
<?php include realpath('src/templates/footers/auth-footer.php'); ?>