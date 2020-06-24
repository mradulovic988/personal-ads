<?php include realpath('src/templates/headers/be-header.php'); ?>
    <div id="layoutSidenav">
<?php include realpath('src/templates/sidebars/be-sidebar.php'); ?>
    <div id="layoutSidenav_content">
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="file"></i></div>
                        <span>Novi oglas</span>
                    </h1>
                    <div class="page-header-subtitle">Na jako jednostavan način možete brzo i lako da kreirate vaš
                        oglas
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-n10">
            <div class="card">
                <div class="card-header">Dodaj svoj oglas</div>
                <div class="card-body">
                    <?php include realpath('src/templates/ads/customer/add_new.php'); ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="adsName">Naslov</label>
                            <input type="text" class="form-control" id="adsName" name="adsName"
                                   placeholder="Naslov vašeg oglasa">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="adsCategory">Kategorija</label>
                                <select id="adsCategory" name="adsCategory[]" class="form-control">
                                    <option selected disabled>Odaberi kategoriju...</option>
                                    <option value="onatrazinjega">Ona traži njega</option>
                                    <option value="onatrazinju">Ona traži nju</option>
                                    <option value="ontrazinju">On traži nju</option>
                                    <option value="ontrazinjega">On traži njega</option>
                                    <option value="trans">Trans/ CD/ Shemale</option>
                                    <option value="masaze">Masaže</option>
                                    <option value="razno">Razno</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="adsTown">Grad</label>
                                <select id="adsTown" name="adsTown[]" class="form-control">
                                    <option selected disabled>Odaberi grad...</option>
                                    <option value="Beograd">Beograd</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Aleksandrovac">Aleksandrovac</option>
                                    <option value="Aleksinac">Aleksinac</option>
                                    <option value="Alibunar">Alibunar</option>
                                    <option value="Apatin">Apatin</option>
                                    <option value="Aranđelovac">Aranđelovac</option>
                                    <option value="Arilje">Arilje</option>
                                    <option value="Babušnica">Babušnica</option>
                                    <option value="Bač">Bač</option>
                                    <option value="Bačka Palanka">Bačka Palanka</option>
                                    <option value="Bačka Topola">Bačka Topola</option>
                                    <option value="Bački Petrovac">Bački Petrovac</option>
                                    <option value="Bajina Bašta">Bajina Bašta</option>
                                    <option value="Bajmok">Bajmok</option>
                                    <option value="Banatsko Novo Selo">Banatsko Novo Selo</option>
                                    <option value="Batočina">Batočina</option>
                                    <option value="Bečej">Bečej</option>
                                    <option value="Bela Crkva">Bela Crkva</option>
                                    <option value="Bela Palanka">Bela Palanka</option>
                                    <option value="Beočin">Beočin</option>
                                    <option value="Blace">Blace</option>
                                    <option value="Bogatić">Bogatić</option>
                                    <option value="Bojnik">Bojnik</option>
                                    <option value="Boljevac">Boljevac</option>
                                    <option value="Bor">Bor</option>
                                    <option value="Bosilegrad">Bosilegrad</option>
                                    <option value="Brus">Brus</option>
                                    <option value="Bujanovac">Bujanovac</option>
                                    <option value="Čačak">Čačak</option>
                                    <option value="Čajetina">Čajetina</option>
                                    <option value="Ćićevac">Ćićevac</option>
                                    <option value="Čoka">Čoka</option>
                                    <option value="Crna Trava">Crna Trava</option>
                                    <option value="Ćuprija">Ćuprija</option>
                                    <option value="Despotovac">Despotovac</option>
                                    <option value="Dimitrovgrad">Dimitrovgrad</option>
                                    <option value="Doljevac">Doljevac</option>
                                    <option value="Elemir">Elemir</option>
                                    <option value="Gadžin Han">Gadžin Han</option>
                                    <option value="Golubac">Golubac</option>
                                    <option value="Gornji Milanovac">Gornji Milanovac</option>
                                    <option value="Inđija">Inđija</option>
                                    <option value="Irig">Irig</option>
                                    <option value="Ivanjica">Ivanjica</option>
                                    <option value="Jagodina">Jagodina</option>
                                    <option value="Kanjiža">Kanjiža</option>
                                    <option value="Kikinda">Kikinda</option>
                                    <option value="Kladovo">Kladovo</option>
                                    <option value="Knić">Knić</option>
                                    <option value="Knjaževac">Knjaževac</option>
                                    <option value="Koceljeva">Koceljeva</option>
                                    <option value="Kosjerić">Kosjerić</option>
                                    <option value="Kovačevac Prijepolje">Kovačevac Prijepolje</option>
                                    <option value="Kovačica">Kovačica</option>
                                    <option value="Kovin">Kovin</option>
                                    <option value="Kragujevac">Kragujevac</option>
                                    <option value="Kraljevo">Kraljevo</option>
                                    <option value="Krupanj">Krupanj</option>
                                    <option value="Kruševac">Kruševac</option>
                                    <option value="Kučevo">Kučevo</option>
                                    <option value="Kula">Kula</option>
                                    <option value="Kuršumlija">Kuršumlija</option>
                                    <option value="Lajkovac">Lajkovac</option>
                                    <option value="Lapovo">Lapovo</option>
                                    <option value="Lazarevac">Lazarevac</option>
                                    <option value="Lebane">Lebane</option>
                                    <option value="Leskovac">Leskovac</option>
                                    <option value="Ljig">Ljig</option>
                                    <option value="Ljubovija">Ljubovija</option>
                                    <option value="Loznica">Loznica</option>
                                    <option value="Lučani">Lučani</option>
                                    <option value="Majdanpek">Majdanpek</option>
                                    <option value="Mali Iđoš">Mali Iđoš</option>
                                    <option value="Mali Zvornik">Mali Zvornik</option>
                                    <option value="Malo Crniće">Malo Crniće</option>
                                    <option value="Medveđa">Medveđa</option>
                                    <option value="Merošina">Merošina</option>
                                    <option value="Mionica">Mionica</option>
                                    <option value="Mladenovac">Mladenovac</option>
                                    <option value="Negotin">Negotin</option>
                                    <option value="Niš">Niš</option>
                                    <option value="Nova Crnja">Nova Crnja</option>
                                    <option value="Nova Pazova">Nova Pazova</option>
                                    <option value="Nova Varoš">Nova Varoš</option>
                                    <option value="Novi Bečej">Novi Bečej</option>
                                    <option value="Novi Kneževac">Novi Kneževac</option>
                                    <option value="Novi Pazar">Novi Pazar</option>
                                    <option value="Novi Sad">Novi Sad</option>
                                    <option value="Obrenovac">Obrenovac</option>
                                    <option value="Odžaci">Odžaci</option>
                                    <option value="Opovo">Opovo</option>
                                    <option value="Osečina">Osečina</option>
                                    <option value="Ostalo">Ostalo</option>
                                    <option value="Pančevo">Pančevo</option>
                                    <option value="Paraćin">Paraćin</option>
                                    <option value="Pećinci">Pećinci</option>
                                    <option value="Petrovac na Mlavi">Petrovac na Mlavi</option>
                                    <option value="Pirot">Pirot</option>
                                    <option value="Plandište">Plandište</option>
                                    <option value="Požarevac">Požarevac</option>
                                    <option value="Požega">Požega</option>
                                    <option value="Preševo">Preševo</option>
                                    <option value="Priboj">Priboj</option>
                                    <option value="Prijepolje">Prijepolje</option>
                                    <option value="Prokuplje">Prokuplje</option>
                                    <option value="Rača">Rača</option>
                                    <option value="Raška">Raška</option>
                                    <option value="Ražanj">Ražanj</option>
                                    <option value="Rekovac">Rekovac</option>
                                    <option value="Ruma">Ruma</option>
                                    <option value="Šabac">Šabac</option>
                                    <option value="Sečanj">Sečanj</option>
                                    <option value="Senta">Senta</option>
                                    <option value="Šid">Šid</option>
                                    <option value="Sivac">Sivac</option>
                                    <option value="Sjenica">Sjenica</option>
                                    <option value="Smederevo">Smederevo</option>
                                    <option value="Smederevska Palanka">Smederevska Palanka</option>
                                    <option value="Soko Banja">Soko Banja</option>
                                    <option value="Sombor">Sombor</option>
                                    <option value="Srbobran">Srbobran</option>
                                    <option value="Sremska Mitrovica">Sremska Mitrovica</option>
                                    <option value="Sremski Karlovci">Sremski Karlovci</option>
                                    <option value="Stara Pazova">Stara Pazova</option>
                                    <option value="Subotica">Subotica</option>
                                    <option value="Surdulica">Surdulica</option>
                                    <option value="Svilajnac">Svilajnac</option>
                                    <option value="Svrljig">Svrljig</option>
                                    <option value="Temerin">Temerin</option>
                                    <option value="Titel">Titel</option>
                                    <option value="Topola">Topola</option>
                                    <option value="Trgovište">Trgovište</option>
                                    <option value="Trstenik">Trstenik</option>
                                    <option value="Tutin">Tutin</option>
                                    <option value="Ub">Ub</option>
                                    <option value="Užice">Užice</option>
                                    <option value="Valjevo">Valjevo</option>
                                    <option value="Varvarin">Varvarin</option>
                                    <option value="Velika Plana">Velika Plana</option>
                                    <option value="Veliko Gradište">Veliko Gradište</option>
                                    <option value="Vladičin Han">Vladičin Han</option>
                                    <option value="Vladimirci">Vladimirci</option>
                                    <option value="Vlasotince">Vlasotince</option>
                                    <option value="Vranje">Vranje</option>
                                    <option value="Vrbas">Vrbas</option>
                                    <option value="Vrnjačka Banja">Vrnjačka Banja</option>
                                    <option value="Vršac">Vršac</option>
                                    <option value="Žabalj">Žabalj</option>
                                    <option value="Žabari">Žabari</option>
                                    <option value="Žagubica">Žagubica</option>
                                    <option value="Zaječar">Zaječar</option>
                                    <option value="Žitište">Žitište</option>
                                    <option value="Žitorađa">Žitorađa</option>
                                    <option value="Zrenjanin">Zrenjanin</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="adsPlan">Plan</label>
                                <select id="adsPlan" name="adsPlan[]" class="form-control">
                                    <option selected disabled>Odaberi plan...</option>
                                    <option value="besplatan">Besplatan (5 dana)</option>
                                    <option value="basic">Osnovni (7 dana - 350 rsd)</option>
                                    <option value="plus">Premium (10 dana - 390 rsd)</option>
                                    <option value="delux">Delux (14 dana - 440 rsd)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adsImages">Dodajte slike</label>
                            <input type="file" class="form-control-file" id="adsImages" name="adsImages[]" multiple>
                        </div>

                        <div class="form-group">
                            <label for="adsDescription">Opis</label>
                            <textarea class="form-control" id="adsDescription" name="adsDescription"
                                      rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="adsAgree" name="adsAgree" required>
                                <label class="form-check-label" for="adsAgree">
                                    Slažem se sa politikom privatnosti
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="adsSubmit">Pošalji</button>
                    </form>


                </div>
            </div>
        </div>
    </main>
<?php include realpath('src/templates/footers/be-footer.php'); ?>