const square = document.querySelector('#footer');
    square.classList.remove('fade-in-element');

    // Create the observer, same as before:
    const hellew = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                square.setAttribute('class', 'fade-in-element');
                return;
            }
            square.removeAttribute('class');
        });
    });

    hellew.observe(document.querySelector('.list-item-footer'));