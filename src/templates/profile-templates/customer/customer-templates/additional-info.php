<div class="container-fluid mt-n10">
    <div class="card">
        <div class="card-header">Dodatne informacije</div>
        <div class="card-body">
            <form id="phoneNumberForm" class="form-inline" method="post" enctype="multipart/form-data">
                <div class="col mb-2">
                    <label for="phoneNumber" class="sr-only">Telefon</label>
                    <input type="text" class="form-control w-100" name="phoneNumber" id="phoneNumber" placeholder="<?= $user_phone; ?>">
                </div>
                <button type="submit" name="phoneNumber_submit" id="phoneNumber_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                <div id="phoneSuccess"></div>
            </form>

            <form id="birthForm" class="form-inline" method="post" enctype="multipart/form-data">
                <div class="col mb-2">
                    <label for="birth" class="sr-only">Datum Rođenja</label>
                    <input type="date" class="form-control w-100" name="birth" id="birth" placeholder="Datum Rođenja">
                </div>
                <button type="submit" name="birth_submit" id="birth_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                <div id="birthSuccess"></div>
            </form>

            <form id="cityForm" class="form-inline" method="post" enctype="multipart/form-data">
                <div class="col mb-2">
                    <label for="city" class="sr-only">Grad</label>
                    <input type="text" class="form-control w-100" name="city" id="city" placeholder="<?= $user_city ?>">
                </div>
                <button type="submit" name="city_submit" id="city_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                <div id="citySuccess"></div>
            </form>

            <form id="profileImageForm" class="form-inline" method="post" enctype="multipart/form-data">
                <div class="col mb-2">
                    <label for="profileImage" class="sr-only">Profilna slika</label>
                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control w-100 custom-file" name="profileImage" id="profileImage" placeholder="Profilna Slika">
                </div>
                <button type="submit" name="profileImage_submit" id="profileImage_submit" class="btn btn-primary mb-2 w-25">Sačuvaj</button>
                <div id="profileImageSuccess"></div>
            </form>


        </div>
    </div>
</div>