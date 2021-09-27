const main = document.querySelector('.container');
document.getElementById("categories").style.display = "none"

const scrollEvent = () => {

    if (main.scrollTop > 1000) {
        document.getElementById("categories").style.display = "block"
    } else {
        document.getElementById("categories").style.display = "none"
    }
}

main.addEventListener('scroll', scrollEvent);
