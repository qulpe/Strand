const cat = document.querySelector('#categories')
cat.removeAttribute('class');

const kontakt = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            cat.setAttribute('class', 'hide');
            return;
        }
        cat.removeAttribute('class');
    });
});

kontakt.observe(document.querySelector('#footer-title'))