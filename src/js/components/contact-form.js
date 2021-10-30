export const contactForm = function() {
    const form = document.querySelectorAll('.wrap-form-contact input, .wrap-form-contact textarea, .wrap-form-contact select');
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
            }
        })
    });

}