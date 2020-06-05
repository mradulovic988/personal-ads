<div class="container mt-5">
    <div class="card">
        <div class="card-header">Promeni lozinku</div>
        <div class="card-body">

            <form id="changePass" method="post" enctype="multipart/form-data">
                <div class="col mb-2">
                    <label for="oldPassword" class="sr-only">Stara Lozinka</label>
                    <input type="password" class="form-control w-100" name="oldPassword" id="oldPassword" placeholder="Stara Lozinka" required="" oninvalid="this.setCustomValidity('Ovo polje je obavezno.')" oninput="setCustomValidity('')">
                </div>

                <div class="col mb-2">
                    <label for="changePassword" class="sr-only">Nova Lozinka</label>
                    <input type="password" class="form-control w-100" name="changePassword" id="changePassword" placeholder="Nova Lozinka" required="" oninvalid="this.setCustomValidity('Ovo polje je obavezno.')" oninput="setCustomValidity('')">
                </div>

                <div class="col mb-2">
                    <label for="confirmPassword" class="sr-only">Potvrdi Lozinku</label>
                    <input type="password" class="form-control w-100" name="confirmPassword" id="confirmPassword" placeholder="Potvrdi Lozinku" required="" oninvalid="this.setCustomValidity('Ovo polje je obavezno.')" oninput="setCustomValidity('')">
                </div>
                <div class="col mb-2 d-inline-flex">
                    <button type="submit" name="changePassword_submit" id="changePassword_submit" class="btn btn-warning mb-2 w-50 mr-1">Sačuvaj</button>
                    <a href="forget-password.php" class="btn btn-warning mb-2 w-50 ml-1">Zaboravljena Lozinka</a>
                </div>
            </form>
            <?php include realpath('src/templates/profile-templates/customer/customer-controllers/change-password.php'); ?>
            <?php include realpath('src/templates/errors/error.php'); ?>

        </div>
    </div>
</div>