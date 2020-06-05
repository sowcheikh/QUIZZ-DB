<div class="container">
    <div class="row">
        <div class="col">
        <form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Question</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group form-inline">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" for="number">Nombre de points</label>
    <input type="number" class="form-control mr-2" id="number" placeholder="Nombre de points">
</div>
<div class="form-group form-inline">
    <label class="my-1 mr-2" for="inlineFormCustomSelectPref" for="number">Type de réponses</label>
    <select class="custom-select">
    <option selected>Choisir votre type de réponse</option>
    <option value="texte">Texte</option>
    <option value="simple">Simple</option>
    <option value="multiple">Multiple</option>
    </select>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-info font-weight-bold">+</button>
    </div>
</div>
<div class="form-group form-inline" id="reponse">
</div>
<div class="row">
    <div class="col">
    <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
    </div>
</div>
</form>
        </div>
    </div>
</div>