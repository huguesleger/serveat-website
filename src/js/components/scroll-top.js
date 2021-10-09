export const scrollToTop = function () {
    const $btnToTop = document.querySelector('.btn-to-top');
    const scrollTrigger = 900;

    function backToTop() {
        const scrollToTop = window.pageYOffset;
        if(scrollToTop > scrollTrigger) {
            $btnToTop.classList.add('show');
        } else {
            $btnToTop.classList.remove('show');
        }
    }
    backToTop();
    if(window.addEventListener('scroll', function(){
        backToTop();
    }));

    $btnToTop.addEventListener('click', function(e){
        e.preventDefault();
        window.scroll({
            top: 0
        });
    });
}