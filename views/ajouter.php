<?php include "components/header.php"?>
<?php include "components/navbar.php"?>

<h1 class="text-center m-5">Formulaire d'ajout</h1>

<?php if ($showForm) { ?>
    <div class="container mycontain">
        <form class="text-center" action="" method="POST" novalidate>
            <fieldset class="m-5">



                <div class="mb-5">
                    <label for="disabledTextInput" class="form-label">Veuillez indiquer le nom de l'animal : <i><?= $error["name"] ?? "" ?></i> </label>
                    <input type="text" id="disabledTextInput" class="form-control mywidth m-auto text-center" name="name" value="<?= htmlspecialchars($_POST["name"] ?? "") ?>">
                </div>



                <div class="mb-5">
                    <label class="form-label">Quel type d'animal est-ce ? <i><?= $error["animaltype"] ?? "" ?></i></label>
                    <select class="form-select text-center mywidth m-auto" id="type" name="animaltype">
                        <option selected disabled>Type d'animal</option>
                        <?php foreach (Type::getAllTypes() as $type) { ?>
                            <option value="<?= $type["id"] ?>" <?= isset($_POST["animaltype"]) && $_POST["animaltype"] == $type["id"] ? "selected" : "" ?>><?= $type["type"] ?></option>
                        <?php } ?>
                    </select>
                </div>



                
                <div class="mb-5" style="display: <?= $showRace ? "block" : "none" ?>;">
                    <label class="form-label">Quelle race de chat est-ce ? <i><?= $error["animalracecat"] ?? "" ?></i></label>
                    <select class="form-select text-center mywidth m-auto" name="animalracecat">
                        <option selected disabled>Race de chat</option>
                        <option value="1" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "1" ? "selected" : "" ?>>Persan</option>
                        <option value="2" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "2" ? "selected" : "" ?>>Angora</option>
                        <option value="3" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "3" ? "selected" : "" ?>>Européen</option>
                        <option value="4" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "4" ? "selected" : "" ?>>Autres</option>
                    </select>
                </div>



                



                <div class="checkbox mb-5">
                    <p>Quel est le sexe de l'animal ? <i><?= $error["sex"] ?? "" ?></i></p>
                    <?php foreach (Sexe::getAllSexes() as $sexe) { ?>
                    <div class="form-check">
                        <input class="form-check-input mb-3" type="radio" name="sex" id="flexRadioDefault1" value=<?= $sexe["id"] ?> <?= isset($_POST["sex"]) && $_POST["sex"] == $sexe["id"] ? "checked" : "" ?>>
                        <label class="form-check-label ms-3" for="flexRadioDefault1">
                            <?= $sexe["sex"] ?>
                        </label>
                    </div>
                    <?php } ?>
                </div>



                <div class="mb-5">
                    <label for="arrivaldate" class="form-label">Veuillez indiquer la date d'arrivée de l'animal : <i><?= $error["animalarrival"] ?? "" ?></i></label>
                    <input type="date" id="arrivaldate" class="form-control text-center date m-auto" name="animalarrival" value="<?= $_POST["animalarrival"] ?? "" ?>">
                </div>



                <div class="mb-5 d-flex justify-content-center flex-column">
                    <label for="disabledTextInput" class="form-label d-flex m-auto">Veuillez indiquer le poids de l'animal : <i><?= $error["weight"] ?? "" ?></i></label>
                    <input type="number" step="0.01" id="disabledTextInput" class="form-control weight d-flex m-auto" name="weight" value="<?= $_POST["weight"] ?? "" ?>">
                </div>



                <div class="checkbox mb-5">
                    <p>L'animal est-il tatoué ? <i><?= $error["tatoo"] ?? "" ?></i></p>
                    <div class="form-check">
                        <input class="form-check-input mb-3" type="radio" name="tatoo" id="flexRadioDefault1" value="1" <?= isset($_POST["tatoo"]) && $_POST["tatoo"] == "1" ? "checked" : "" ?>>
                        <label class="form-check-label ms-3" for="flexRadioDefault1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input mb-3" type="radio" name="tatoo" id="flexRadioDefault2" value="0" <?= isset($_POST["tatoo"]) && $_POST["tatoo"] == "0" ? "checked" : "" ?>>
                        <label class="form-check-label ms-3" for="flexRadioDefault2">
                            Non
                        </label>
                    </div>
                </div>



                <div class="checkbox mb-5">
                    <p>Veuillez définir la couleur de l'animal : <i><?= $error["color"] ?? "" ?></i></p>
                    <?php foreach (Color::getAllColors() as $color) { ?>
                        <div class="form-check">

                            <input class="form-check-input mb-3" type="radio" name="color" value=<?= $color["id"] ?> <?= isset($_POST["color"]) && $_POST["color"] == $color["id_color"] ? "checked" : "" ?>>
                            <label class="form-check-label ms-3">
                                <?= $color["color"] ?>
                            </label>

                        </div>
                    <?php } ?>
                </div>



                <div class="checkbox mb-5">
                    <p>L'animal est-il pucé : <i><?= $error["chip"] ?? "" ?></i></p>
                    <div class="form-check">
                        <input class="form-check-input mb-3" type="radio" name="chip" id="flexRadioDefault1" value="1" <?= isset($_POST["chip"]) && $_POST["chip"] == "1" ? "checked" : "" ?>>
                        <label class="form-check-label ms-3" for="flexRadioDefault1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input mb-3" type="radio" name="chip" id="flexRadioDefault2" value="0" <?= isset($_POST["chip"]) && $_POST["chip"] == "0" ? "checked" : "" ?>>
                        <label class="form-check-label ms-3" for="flexRadioDefault2">
                            Non
                        </label>
                    </div>
                </div>



                <div class="mb-5 justify-content-center">
                    <div class="form-check cgu m-auto">
                        <input class="form-check-input" type="checkbox" name="cgu">
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            Veuillez accepter les CGU <i><?= $error["cgu"] ?? "" ?></i>
                        </label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary ">Envoyer</button>



            </fieldset>



        <?php } else { ?>

            <div class="alert alert-success" role="alert">
                <?= $message ?>
            </div>

        <?php } ?>



        </form>




    </div>
    <?php include "components/footer.php"?>