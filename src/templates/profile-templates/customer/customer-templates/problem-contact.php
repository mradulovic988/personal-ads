<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header">Predlog / Problem / Kontakt</div>
        <div class="card-body">
            <form id="problemContact" method="POST" enctype="multipart/form-data">
                <div class="col form-group">
                    <label for="chooseSubject">Odaberi naslov</label>
                    <select id="chooseSubject" class="form-control">
                        <option selected>Odaberi...</option>
                        <option value="predlog">Predlog</option>
                        <option value="problem">Problem</option>
                        <option value="kontakt">Kontakt</option>
                    </select>
                </div>
                <div class="col form-group">
                    <label for="problemText">Detaljno obrazloženje</label>
                    <textarea class="form-control" id="problemText" name="problemText" rows="3"></textarea>
                </div>
                <div class="col form-group">
                    <button type="submit" name="problemContact_submit" id="problemContact_submit" class="btn btn-primary mb-2 w-25 mr-1">Pošalji</button>
                </div>
            </form>
        </div>
    </div>
</div>