export const demoForm = function() {
    const form = document.querySelectorAll('.wrap-form-demo input, .wrap-form-demo textarea, .wrap-form-demo select');
    const phone = document.querySelector('.wrap-form-demo .wrap-phone input');
    const phoneError = document.querySelector('.wrap-form-demo .wrap-phone');
    const phoneId = phone.getAttribute('id');
    const errorLabel = document.createElement('label');
    errorLabel.setAttribute('id', phoneId + '-error');
    errorLabel.setAttribute('for',phoneId );
    errorLabel.classList.add('wpforms-error');
    errorLabel.style.display = "none";
    phoneError.appendChild(errorLabel);
    form.forEach(el=> {
        el.addEventListener('focus', function(){
            el.parentNode.classList.add('active');
            el.parentNode.firstChild.classList.add('active');

        });
        
        el.addEventListener('blur', function(){
            el.parentNode.classList.remove('active');
            el.parentNode.firstChild.classList.remove('active');
            if(el.value.length > 0) {
                el.parentNode.firstChild.classList.add('active');
                const phoneno = /^\d{10}$/;
                const phoneValue = phone.value;
                const matchPhone = phoneValue.match(phoneno);
                if(matchPhone || phoneValue.length == 0) {
                    return true;
                } else {
                    phone.classList.add('wpforms-error');
                    errorLabel.style.display = "block";
                    errorLabel.innerHTML = "Veuillez saisir un téléphone valide. (sans espace)";
                    return false;
                }
            }
        })
    });

}