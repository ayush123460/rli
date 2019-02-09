function toggleMenu() {
    var x = document.getElementsByClassName('mob');
    x[0].classList.toggle('active');
    x = document.getElementsByClassName('mobile');
    x[0].classList.toggle('active');
    document.getElementsByTagName("body")[0].classList.toggle('overflow');
}