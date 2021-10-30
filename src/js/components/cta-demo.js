export const ctaDemo = function() {
    const btnDemo = document.getElementById('btnDemo');
    const emailInput = document.getElementById('demoEmail');
    btnDemo.addEventListener('click', function submit(event){
        event.preventDefault();
        const email = emailInput.value;
        const demoUrl = '/demande-de-demo';
        if(email) {
            let date = new Date();
            date.setTime(date.getTime() + (1*24*60*60*1000));
            const expires = date.toUTCString();
            const cookieEl = document.cookie = `emailInput=${email}; expires=${expires}; path=/`;
            console.log(cookieEl)
            window.location.href = demoUrl + window.location.search; 
        }
    })
}