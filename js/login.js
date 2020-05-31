// GET DOM elements
const form = document.getElementById('form');
const login = document.getElementById('login');
const password = document.getElementById('password');


// Functions
function checkRequired(inputArray) {
    inputArray.forEach(input => {
        if (input.value.trim()=== '') {
            showError(input, `${getFieldName(input)} is required !`);
        } else{
            showSucces(input);
        }
    });
}

function showError(input, message){
    const formControl = input.parentElement;
    formControl.className = 'form-group error';
    // message d'erreur
    const small = formControl.querySelector('small');
    small.innerText = message;

}

function showSucces(input){
    const formControl = input.parentElement;
    formControl.className = 'form-group success';
}

function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function checkLegth(input, min, max) {
    if (input.value.length<min) {
        showError(input, `${getFieldName(input)} must be at least ${min} characters !`)
    } else if (input.value.length>max) {
        showError(input, `${getFieldName(input)} must be less than ${max} characters !`)
    } else {
        showSucces(input);
    }
}


//Events
form.addEventListener('submit', (e)=>{
    const inputs = document.getElementsByTagName("input");
    var error = false;
    // check if fields are not empty
    checkRequired([login, password ])
    // check if fields are correct
    checkLegth(login, 3, 15);
    checkLegth(password, 6, 30);
    for (input of inputs) {
       
            if (!input.value) {
                error = true;
            }
        }

    if (error) {
        e.preventDefault();
        return false;
    }
    
})
