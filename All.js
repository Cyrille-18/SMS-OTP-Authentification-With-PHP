/* Creation de compte */
document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("SignupForm");
    var createAccountBtn = document.getElementById("Createsubmit");
    var PasswordInput = document.getElementById("password");
    var confirmPasswordInput = document.getElementById("passwordconfirm");
    var Errorpassword = document.getElementById("Errorpassword");

    function validatePassword() {
        if (PasswordInput.value !== confirmPasswordInput.value) {
            Errorpassword.textContent = "Les mots de passe ne correspondent pas";
           // createAccountBtn.disabled = true;
        } else {
            Errorpassword.textContent = "";
           // createAccountBtn.disabled = false;
        }
    }
    function soumission(event) {
        if (PasswordInput.value !== confirmPasswordInput.value) {
            event.preventDefault();
            Errorpassword.textContent = "Les mots de passe ne correspondent pas";
        }
    }

    PasswordInput.addEventListener("input", validatePassword);
    confirmPasswordInput.addEventListener("input", validatePassword);
    form.addEventListener("submit", soumission);
});

/* Code de vérification */

const  inputs = document.querySelectorAll('.otp-card-inputs input')
const button = document.querySelector('.otp-card button')

inputs.forEach(input =>{
    let lastInputSatus = 0
    input.onkeyup =(e) => {
        const currentElement = e.target
        const nextElement = input.nextElementSibling
        const prevElement = input.previousElementSibling

        if (prevElement && e.keyCode === 8){
            if(lastInputSatus === 1){
                prevElement.value = ""
                prevElement.focus()
            }
            button.setAttribute('disabled',true)
            lastInputSatus = 1
        }else{
            const reg = /^[0-9]+$/
            if (!reg.test(currentElement.value)){
                currentElement.value = currentElement.value.replace(/\D/g,'')
            }else if (currentElement.value){
                if (nextElement){
                    nextElement.focus()
                }else{
                    button.removeAttribute('disabled')
                    lastInputSatus = 0
                }
            }
        }
    }
})
