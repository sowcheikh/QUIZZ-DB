var nbRow= 0;
var i = 1;
var j = 1;

    function choixRep() {
        document.getElementById('reponse').innerHTML='';
    }

    function addIput() {
       nbRow++;
      
        var divInputs = document.getElementById("reponse");
        var newInput = document.createElement("div");
        newInput.setAttribute("id", "row_", +nbRow)
        newInput.innerHTML = `
        <div class="form-group">
        <label for="inputEmail3" class="my-1 mr-5">Réponse </label>
        <textarea class="form-control" id="textarea" rows="3"></textarea>
        <span class="form_error"></span><br />
        </div>
        `;

        divInputs.appendChild(newInput);
        console.log('texte');
    }
    function addIputMultiple() {
       nbRow++;
     
        var divInputs = document.getElementById("reponse");
        var newInput = document.createElement("div");
        newInput.setAttribute("id", "row_", +nbRow)
        newInput.setAttribute("class", "form-inline pt-2", +nbRow)
        newInput.innerHTML = `<label for="rep" class="my-1 mr-5">Réponse numéro </label>
        <input type="texte" class="form-control">
        <input class="form-check-input m-3" type="checkbox" value="">
        <button type="button" class="btn btn-danger font-weight-bold" onclick="remove(${nbRow})"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></button>
      <span class="form_error"></span><br /> `;
        divInputs.appendChild(newInput);
        console.log('multiple');
        j++;
    }
  
    function addIputSimple() {
       nbRow++;

        var divInputs = document.getElementById("reponse");
        var newInput = document.createElement("div");
        newInput.setAttribute("id", "row_", +nbRow)
        newInput.setAttribute("class", "form-inline pt-2", +nbRow)
        newInput.innerHTML = `<label for="rep" class="my-1 mr-4">Réponse numéro </label>
        <input type="texte" class="form-control">
        <input class="form-check-input m-3" type="radio" name="radio" value="option1">        
        <button type="button" class="btn btn-danger font-weight-bold" onclick="remove(${nbRow})"><svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg></button>
      <span class="form_error"></span><br /> `;
        divInputs.appendChild(newInput);
        console.log('simple');
        
        i++;
    }
    function remove(n) {
       var target = document.getElementById("row_", n);
       target.remove();
    }
    function add(){
        var type = document.getElementById("typeRep");
        if (type.value == 'multiple') {
            return addIputMultiple();
        } else if (type.value == 'simple') {
            return addIputSimple();
        } else {
            return addIput();
        }  
    }

    //ajax inscription
$(document).ready(function(){
    $("#compte").click(function () {
        $.ajax({
            type: "POST",
            url: "data/data.php",
            data: {
            username: $('#nom').val(),
            login: $('#login').val(),
            password: $('#password').val(),
            password2: $('#password2').val(),
            photo: $('#photo').val()
            },
            dataType: "text",
            success: function (message) {
                console.log('message');
                if (message === 'success') {
                    window.location = 'index.php?page=./src/pages/admin'
                }
                
            }
        })
    })
    })