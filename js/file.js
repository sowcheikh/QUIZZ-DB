// GET DOM elements
const form = document.getElementById('form');
const username = document.getElementById('nom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');


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

function checkPasswordsMatch(input1, input2) {
    if (input1.value !== input2.value) {
        showError(input2, 'Password do not match !')
    }
}


//Events
form.addEventListener('submit', (e)=>{
    e.preventDefault();
    // check if fields are not empty
    checkRequired([username, login, password, password2 ])
    // check if fields are correct
    checkLegth(username, 3, 15);
    checkLegth(password, 6, 30);
    // check if password is match
    checkPasswordsMatch(password, password2)
})
