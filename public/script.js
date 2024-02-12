var openBurger = document.getElementById("openBurger")
var closeBurger = document.getElementById("closeBurger")
var menu = document.getElementById("menu")

closeBurger.addEventListener("click", function(){
    menu.classList.add("ferme")
})

openBurger.addEventListener("click", function(){
    menu.classList.remove("ferme")
})