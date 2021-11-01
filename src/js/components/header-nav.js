export const highlightCurrentNavLink = pageNamescape => {
    const $navLinks = document.querySelectorAll('.navbar-nav .nav-item');

    $navLinks.forEach(el => {
        const active = el.dataset.namespace === pageNamescape.dataset.barbaNamespace;
        // const active = pageNamescape.dataset.barbaNamespace;
        // const dataNamespace = el.dataset.namespace;
        console.log(active)
        if (active) {
            el.classList.add('active')
        } else {
            el.classList.remove('active')
        }
    })
  };