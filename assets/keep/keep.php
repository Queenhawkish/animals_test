<div class="mb-5" id="cat">
    <label class="form-label">Quelle race de chat est-ce ? <i><?= $error["animalracecat"] ?? "" ?></i></label>
    <select class="form-select text-center mywidth m-auto" name="animalracecat">
        <option selected disabled>Race de chat</option>
        <option value="1" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "1" ? "selected" : "" ?>>Persan</option>
        <option value="2" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "2" ? "selected" : "" ?>>Angora</option>
        <option value="3" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "3" ? "selected" : "" ?>>Européen</option>
        <option value="4" <?= isset($_POST["animalracecat"]) && $_POST["animalracecat"] == "4" ? "selected" : "" ?>>Autres</option>
    </select>
</div>




<div class="mb-5" id="dog">
    <label for="disabledSelect" class="form-label">Quelle race de chien est-ce ? <i><?= $error["animalracedog"] ?? "" ?></i></label>
    <select id="disabledSelect" class="form-select mywidth m-auto text-center" name="animalracedog">
        <option selected disabled>Race de chien</option>
        <option value="5" <?= isset($_POST["animalracedog"]) && $_POST["animalracedog"] == "5" ? "selected" : "" ?>>Golden</option>
        <option value="6" <?= isset($_POST["animalracedog"]) && $_POST["animalracedog"] == "6" ? "selected" : "" ?>>Bulldog</option>
        <option value="7" <?= isset($_POST["animalracedog"]) && $_POST["animalracedog"] == "7" ? "selected" : "" ?>>Chiwawa</option>
        <option value="8" <?= isset($_POST["animalracedog"]) && $_POST["animalracedog"] == "8" ? "selected" : "" ?>>Autres</option>
    </select>
</div>