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
var allForm = document.querySelectorAll(".formVehicule")

function checkFiltres(){
    for (let i=1; i<allArticle.length + 1; i++){
        var article = document.querySelector(`.articleVehicule${i}`)
        var forms = document.querySelectorAll(`.formVehicule${i}`)
        var txtPrixHoraire = article.querySelectorAll("section")[1].querySelectorAll("div")[0].querySelector("p").innerHTML
        var prixHoraire = Number(txtPrixHoraire.substring(0, txtPrixHoraire.length - 4))
        var nbSieges = Number(article.querySelectorAll("section")[1].querySelectorAll("div")[1].querySelector("p").innerHTML)
        var typeBoiteVitesse = article.querySelectorAll("section")[1].querySelectorAll("div")[3].querySelector("p").innerHTML.toLowerCase()
        var clim = article.querySelectorAll("section")[1].querySelectorAll("div")[4].querySelector("p").innerHTML.toLowerCase()
        var typeVehicule = article.querySelectorAll("section")[1].querySelectorAll("div")[6].querySelector("p").innerHTML.toLowerCase()

        if ( (document.getElementById("suvCheck").checked & typeVehicule == "suv") |
        (document.getElementById("sportCheck").checked & typeVehicule == "sport") |
        (document.getElementById("luxeCheck").checked & typeVehicule == "luxe") |
        (document.getElementById("coupeCheck").checked & typeVehicule == "coupe") |
        (document.getElementById("cabrioletCheck").checked & typeVehicule == "cabriolet") |
        (document.getElementById("berlineCheck").checked & typeVehicule == "berline") |
        (document.getElementById("4x4Check").checked & typeVehicule == "4x4") |
        (document.getElementById("utilitaireCheck").checked & typeVehicule == "utilitaire") |
        (document.getElementById("breakCheck").checked & typeVehicule == "break")|
        (!document.getElementById("suvCheck").checked & !document.getElementById("sportCheck").checked & !document.getElementById("luxeCheck").checked & !document.getElementById("coupeCheck").checked & !document.getElementById("cabrioletCheck").checked & !document.getElementById("berlineCheck").checked & !document.getElementById("4x4Check").checked & !document.getElementById("utilitaireCheck").checked & !document.getElementById("breakCheck").checked)){
            var filtreType = true
        }
        else{
            var filtreType = false
        }
        if ( Number(document.getElementById("prixMax").value) >= prixHoraire | (document.getElementById("prixMax").value == "")){
            var filtrePrix = true
        }
        else{
            var filtrePrix = false
        }
        if ( Number(document.getElementById("nbSiegeMin").value) <= nbSieges | (document.getElementById("nbSiegeMin").value == "")){
            var filtreSiege = true
        }
        else{
            var filtreSiege = false
        }
        if ( document.getElementById("typeBoiteVitesse").value == typeBoiteVitesse | (document.getElementById("typeBoiteVitesse").value == "")){
            var filtreBoite = true
        }
        else{
            var filtreBoite = false
        }
        if (document.getElementById("clim").value == clim | document.getElementById("clim").value == ""){
            var filtreClim = true
        }
        else{
            var filtreClim = false
        }
        if (filtreType == true & filtrePrix == true & filtreSiege == true & filtreBoite == true & filtreClim==true){
            article.classList.remove("hidden")
            forms.forEach(element => {
                element.classList.remove("hidden")
            });
        }
        else{
            article.classList.add("hidden")
            forms.forEach(element => {
                element.classList.add("hidden")
            });
        }
    }
}


