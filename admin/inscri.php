<form method="POST" action="ajoutani.php">
  <input class="form-control" type="text" name="nom" placeholder="Votre nom" aria-label="default input example" required>

  <input class="form-control" type="text" name="espece" placeholder="espece" aria-label="default input example" required>

  <input class="form-control" type="text" name="race" placeholder="race" aria-label="default input example" required>

  <input class="form-control" type="text" name="age" placeholder="age" aria-label="default input example" required>
  <input class="form-control" type="text" name="sexe" placeholder="sexe" aria-label="default input example" required>
  <input class="form-control" type="text" name="desc" placeholder="desc" aria-label="default input example" required>
  <input class="form-control" type="text" name="image"e placeholder="image" aria-label="default input example" required>
  Aime-t-il les enfants ?
  <div class="form-check">
    <input class="form-check-input" type="radio" name="enfant" id="flexRadioDefault1" value="1" required>
    <label class="form-check-label" for="flexRadioDefault1">
      oui
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="enfant" id="flexRadioDefault2" value="0" required>
    <label class="form-check-label" for="flexRadioDefault2">
      non
    </label>
  </div>

  <input class="form-control" type="text" name="dateacceuil" placeholder="dateacceuil" aria-label="default input example" required>

  <input class="form-control" type="text" name="dateadoption" placeholder="dateadoption" aria-label="default input example" required>

  <input type="submit" value="J'ajoute">

</form>
