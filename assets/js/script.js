//animation off preloader
$(document).ready(function(){
    $('.preloader').delay('6000').fadeOut();
});

//add active class in navbar
navbar = document.querySelectorAll(".navlink");
navbar.forEach(element => {
    element.addEventListener("click",function(){
        navbar.forEach(nav=>nav.classList.remove("active"))
        this.classList.add("active")
    })
});