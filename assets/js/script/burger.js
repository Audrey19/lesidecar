var hamburger = document.querySelector(".hamburger");
var navigation = document.querySelector("#menu_container_responsive");
    
hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    navigation.classList.toggle("is-active");
});