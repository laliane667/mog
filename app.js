const menu = document.querySelector('#mobile-menu');
const menuLink = document.querySelector('.navbar__menu');

menu.addEventListener('click', function(){
    menu.classList.toggle('is-active');
    menuLink.classList.toggle('active');
});

window.addEventListener("scroll", function(event){
    var scroll = this.scrollY;
    var rescaleScroll = scroll * 100 / 400;
    if(scroll > 400){
        rescaleScroll = 100;
    }
    rescaleScroll /= 100;
    document.getElementById("mog3d").style.opacity = rescaleScroll;
    document.getElementsByClassName("navbar").style.opacity = rescaleScroll;

});