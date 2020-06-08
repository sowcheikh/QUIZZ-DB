<div class="container">
    <div class="row">
        <div class="col shadow-sm bg-light rounded overflow-auto" style="height: 400px;">
        <form action="" method="post" id="form">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Question</label>
    <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
    <span class="form_error"></span><br />
  </div>
  <div class="form-group form-inline">
    <label class="my-1 mr-2" for="number">Nombre de points</label>
    <input type="number" class="form-control mr-2" id="number" placeholder="Nombre de points">
    <span class="form_error"></span><br />
</div>
<div class="form-group form-inline">
    <label class="my-1 mr-2" for="number">Type de réponses</label>
    <select class="custom-select" id="typeRep" onChange="choixRep()">
    <option value="">Choisir votre type de réponse</option>
    <option value="texte">Texte</option>
    <option value="simple">Simple</option>
    <option value="multiple">Multiple</option>
    </select>
    <span class="form_error"></span><br />
    <div class="col-auto my-1">
      <button type="button" class="btn btn-info font-weight-bold" onclick="add()">+</button>
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
<script src="public/js/question.js"></script>
<script>
     //validation question

     $(document).ready(function() {
        function check_form(id_input,regex,msg_vide,erreur) {
            valid = true;
            if ($("#"+id_input).length === 0)
                return false;
            if($("#"+id_input).val() === "") {
                $("#"+id_input).next(".form_error").fadeIn().text(msg_vide);
                valid = false;
            }
            else if(!$("#"+id_input).val().match(regex)) {
                valid = false;
                $("#"+id_input).next(".form_error").fadeIn().text(erreur);
            }
            else
                $("#"+id_input).next(".form_error").fadeOut();
            return valid;
        }   
     
        $("#form").submit(function(event) {
            var res = check_form("typeRep", /^[A-Za-z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]{3,}/,"Champ vide", "choisir un type, type de réponse");
            res = check_form("number", /^[1-9]$/i,"Champ vide", "nombre doit supérieur ou égale à 1 !") && res;
            res = check_form("textarea", /./ ,"Champ vide", "") && res;
            return res;
        });
    });
</script>