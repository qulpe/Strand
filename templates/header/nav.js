var displayerMenu = document.getElementById('menu-mobile')

displayerMenu.style.display = 'none'

let toggle = false;

function displayMenu() {
    if (!toggle) {
        displayerMenu.setAttribute('class', 'show')
        document.querySelector('#trig').setAttribute('class', 'first')
        document.querySelector('#trigon').setAttribute('class', 'second')
        document.querySelector('#trigor').setAttribute('class', 'third')
    } else {
        displayerMenu.setAttribute('class', 'unshow')
        document.querySelector('#trig').classList.remove('first')
        document.querySelector('#trigon').classList.remove('second')
        document.querySelector('#trigor').classList.remove('third')
    }
    toggle = !toggle;
}

displayerMenu.addEventListener('click', function() {
    displayerMenu.removeEventListener('click',
        displayMenu,
        false
    )
    
});
