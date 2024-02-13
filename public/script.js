var openBurger = document.getElementById("openBurger")
var closeBurger = document.getElementById("closeBurger")
var menu = document.getElementById("menu")

closeBurger.addEventListener("click", function(){
    menu.classList.add("ferme")
})

openBurger.addEventListener("click", function(){
    menu.classList.remove("ferme")
})

var allArticle = document.querySelectorAll(".articleVehicule")


for (let i=1; i<allArticle.length + 1; i++){
    var longueur = document.querySelector(`.articleVehicule${i}`).offsetWidth
    var forms = document.querySelectorAll(`.formVehicule${i}`)
    forms.forEach(element => {
        element.setAttribute("style", `width: ${longueur}px;`)
    });
}