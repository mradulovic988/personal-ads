<?php ob_start(); ?>
<?php include realpath('src/templates/headers/auth-header.php'); ?>
<?php include realpath('src/backend/register/register_form.php'); ?>

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
                                    <div class="h3 font-weight-light mb-3">Registrujte se</div>
                                    <div class="small text-muted mb-2">Ulogujte se koristeći...</div>
                                    <a class="btn btn-icon btn-facebook mx-1" href="javascript:void(0);">
                                        <i class="fab fa-facebook-f fa-fw fa-sm"></i>
                                    </a>
                                    <a class="btn btn-icon btn-google mx-1" href="javascript:void(0);">
                                        <i class="fab fa-google fa-fw fa-sm"></i>
                                    </a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body p-5">

                                    <?php include realpath('src/templates/errors/error.php'); ?>

                                    <div class="text-center small text-muted mb-4">...ili dodajte svoje informacije ispod.</div>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="register_firstName">Ime</label>
                                                    <input class="form-control form-control-solid py-4" id="register_firstName" name="register_firstName" type="text" placeholder="Ime" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="register_lastName">Prezime</label>
                                                    <input class="form-control form-control-solid py-4" id="register_lastName" name="register_lastName" type="text" placeholder="Prezime" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label class="text-gray-600 small" for="register_email">E-mail adresa</label>
                                                    <input class="form-control form-control-solid py-4" id="register_email" name="register_email" type="text" placeholder="E-mail Adresa" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">

                                                    <label class="text-gray-600 small" for="register_userName">Korisničko ime</label>
                                                    <input class="form-control form-control-solid py-4" id="register_userName" name="register_userName" type="text" placeholder="Korisničko ime" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="register_password">Lozinka</label>
                                                    <input class="form-control form-control-solid py-4" id="register_password" name="register_password" type="password" placeholder="Lozinka" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-gray-600 small" for="register_confirmPassword">Potvrdi lozinku</label>
                                                    <input class="form-control form-control-solid py-4" id="register_confirmPassword" name="register_confirmPassword" type="password" placeholder="Potvrdi lozinku" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between">
                                            <div class="custom-control custom-control-solid custom-checkbox">
                                                <input class="custom-control-input small" id="customCheck1" name="acceptpolicy" type="checkbox"/>
                                                <label class="custom-control-label mr-3" for="customCheck1">Prihvatam 
                                                    <a href="javascript:void(0);">sve uslove</a>.
                                                </label>
                                            </div>
                                            <input type="hidden" name="user_role" value="1"/>
                                            <input type="submit" class="btn btn-primary" name="register_submit" id="register_submit" value="Napravite svoj nalog">
                                        </div>
                                    </form>

                                    <img class="ajax-loader" src="assets/img/gifs/ajax-loader.gif" alt="Ajax Loader">
                                    <div id="register_successMessage"></div>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">Vec imate svoj nalog? 
                                        <a href="login.php">Ulogujte se!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
<?php include realpath('src/templates/footers/auth-footer.php'); ?>