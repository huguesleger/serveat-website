export const switchPricing = function() {
    const $switch = document.querySelector('.switch-pricing input');
    $switch.addEventListener('change', function(){
        const $priceMonth = document.querySelector('.pricing-price.price-month');
        const $priceYear = document.querySelector('.pricing-price.price-year');

        if($switch.checked) {
            $priceMonth.classList.add('hide');
            $priceYear.classList.add('show');
        } else {
            $priceMonth.classList.remove('hide');
            $priceYear.classList.remove('show');
        }
    });
}