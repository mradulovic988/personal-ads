<div class="container mt-5">
    <div class="card">
        <div class="card-header">Obriši nalog</div>
        <div class="card-body">
            <div class="col">
                <small class="text-muted">Jednom kada obrišete nalog, više ga ne možete povratiti.</small>
            </div>
            <div class="col form-group mt-3">
                <button type="button" id="deleteAccount" class="btn btn-danger mb-2 w-25 mr-1" data-toggle="modal" data-target="#deleteAccountModal">Obriši nalog</button>
            </div>
        </div>
        <?php include realpath('src/templates/profile-templates/customer/customer-controllers/delete-account.php'); ?>
    </div>
</div>

<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Da li ste sigurni?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="deleteAccountForm">
                    <p>Razlog vašeg odlaska:</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="willBack" value="Vratiću se, ovo je samo privremeno." checked>
                        <label class="form-check-label" for="willBack">
                            Vratiću se, ovo je samo privremeno.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="dontUnderstand" value="Ne razumem kako se koristi LO.">
                        <label class="form-check-label" for="dontUnderstand">
                            Ne razumem kako se koristi LO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="dontSecure" value="Ne osećam se bezbedno na LO.">
                        <label class="form-check-label" for="dontSecure">
                            Ne osećam se bezbedno na LO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="tooMuchTime" value="Provodim previše vremena na LO.">
                        <label class="form-check-label" for="tooMuchTime">
                            Provodim previše vremena na LO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="manyMessages" value="Dobijam previše poruka, pozivnica i zahteva od LO.">
                        <label class="form-check-label" for="manyMessages">
                            Dobijam previše poruka, pozivnica i zahteva od LO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="moreAccount" value="Imam još jedan nalog na LO.">
                        <label class="form-check-label" for="moreAccount">
                            Imam još jedan nalog na LO.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="notUseful" value="LO mi nije koristan.">
                        <label class="form-check-label" for="notUseful">
                            LO mi nije koristan.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="privacyCare" value="Brinem za svoju privatnost.">
                        <label class="form-check-label" for="privacyCare">
                            Brinem za svoju privatnost.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reasonSubmitRadio" id="rest" value="Ostalo.">
                        <label class="form-check-label" for="rest">
                            Ostalo.
                        </label>
                    </div>
                    <div class="form-group mt-3">
                        <label for="explainMore" class="sr-only">Objasnite nam više.</label>
                        <textarea class="form-control" name="explainMore" id="explainMore" rows="3" placeholder="Objasnite nam više."></textarea>
                        <small class="text-muted custom_description">Kako bi smo unapredili LO i sajt učinili korisnijim za vas, molimo napišite nam razlog vašeg odlaska.</small>
                    </div>
                    <button type="submit" name="reasonSubmit" id="reasonSubmit" class="btn btn-primary">Pošalji</button>
                </form>

            </div>
            <div id="deleteEmailSuccess"></div>
            <div class="modal-footer">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Nazad</button>
                        <button type="submit" id="deleteAccountDb" name="deleteAccountDb" class="btn btn-danger btn-sm">Preskoči i obriši nalog</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>