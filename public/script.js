var openBurger = document.getElementById("openBurger")
var closeBurger = document.getElementById("closeBurger")
var menu = document.getElementById("menu")


closeBurger.addEventListener("click", function(){
    menu.classList.add("fermeburger")
})

openBurger.addEventListener("click", function(){
    menu.classList.remove("fermeburger")
})

var allArticleVehicules = document.querySelectorAll(".articleVehicule")
var allArticleAgences = document.querySelectorAll(".articleAgence")
var allForm = document.querySelectorAll(".formVehicule")
var url = window.location.href
var filtres = document.getElementById("filtresContainer")
var closefiltres = document.getElementById("closefiltre")
var openfiltres = document.getElementById("openfiltre")

if(closefiltres != null || openfiltres != null){
    closefiltres.addEventListener("click", function(){
        filtres.classList.add("fermefiltre")
        closefiltres.classList.add("hidden")
        openfiltres.classList.remove("hidden")
    })
    openfiltres.addEventListener("click", function(){
        filtres.classList.remove("fermefiltre")
        closefiltres.classList.remove("hidden")
        openfiltres.classList.add("hidden")
    })
}


if (url.substring(23, 32) == "vehicules"){
    checkFiltresVehicules()
}

if (url.substring(23, 30) == "agences"){
    checkFiltresAgences()
}


function checkFiltresVehicules(){

    for (let i=1; i<allArticleVehicules.length + 1; i++){
        var article = document.querySelector(`.articleVehicule${i}`)
        var forms = document.querySelectorAll(`.formVehicule${i}`)
        var txtPrixHoraire = article.querySelectorAll("section")[1].querySelectorAll("div")[0].querySelector("p").innerHTML
        var prixHoraire = Number(txtPrixHoraire.substring(0, txtPrixHoraire.length - 4))
        var nbSieges = Number(article.querySelectorAll("section")[1].querySelectorAll("div")[1].querySelector("p").innerHTML)
        var typeBoiteVitesse = article.querySelectorAll("section")[1].querySelectorAll("div")[3].querySelector("p").innerHTML.toLowerCase()
        var clim = article.querySelectorAll("section")[1].querySelectorAll("div")[4].querySelector("p").innerHTML.toLowerCase()
        var typeVehicule = article.querySelectorAll("section")[1].querySelectorAll("div")[6].querySelector("p").innerHTML.toLowerCase()
        var filtreType = true

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

function checkFiltresAgences(){
    for (let i=1; i<allArticleAgences.length + 1; i++){
        var article = document.querySelector(`.articleAgence${i}`)
        var recherche = document.querySelector(".rechercheAgence").value
        var ville = article.querySelectorAll("div")[0].querySelector("p").innerHTML.substring(25)
        var codePostal = article.querySelectorAll("div")[1].querySelector("p").innerHTML.substring(30)
        var region = article.querySelectorAll("div")[2].querySelector("p").innerHTML.substring(26)
        var filtreRegion = true;
        var filtreRecherche = true;
        
        if ((document.getElementById("hdfCheck").checked & region == "Hauts-de-France") |
        (document.getElementById("norCheck").checked & region == "Normandie") |
        (document.getElementById("idfCheck").checked & region == "Îles-de-france") |
        (document.getElementById("gesCheck").checked & region == "Grand Est") |
        (document.getElementById("breCheck").checked & region == "Bretagne") |
        (document.getElementById("pdlCheck").checked & region == "Pays de la Loire") |
        (document.getElementById("cvlCheck").checked & region == "Centre-Val de Loire") |
        (document.getElementById("bfcCheck").checked & region == "Bourgogne-Franche-Comté") |
        (document.getElementById("naqCheck").checked & region == "Nouvelle-Aquitaine") |
        (document.getElementById("araCheck").checked & region == "Auvergne-Rhône-Alpes") |
        (document.getElementById("occCheck").checked & region == "Occitanie") |
        (document.getElementById("pacCheck").checked & region == "Provence-Alpes-Côte d'Azur") |
        (document.getElementById("corCheck").checked & region == "Corse") |
        (document.getElementById("gufCheck").checked & region == "Guyane Française") |
        (document.getElementById("reuCheck").checked & region == "Réunion") |
        (document.getElementById("glpCheck").checked & region == "Guadeloupe") |
        (document.getElementById("mtqCheck").checked & region == "Martinique") |
        (document.getElementById("mytCheck").checked & region == "Mayotte") |
        (!document.getElementById("hdfCheck").checked & !document.getElementById("norCheck").checked & !document.getElementById("idfCheck").checked & !document.getElementById("gesCheck").checked & !document.getElementById("breCheck").checked & !document.getElementById("pdlCheck").checked & !document.getElementById("cvlCheck").checked & !document.getElementById("bfcCheck").checked & !document.getElementById("naqCheck").checked & !document.getElementById("araCheck").checked & !document.getElementById("occCheck").checked & !document.getElementById("pacCheck").checked & !document.getElementById("corCheck").checked & !document.getElementById("gufCheck").checked & !document.getElementById("reuCheck").checked & !document.getElementById("glpCheck").checked & !document.getElementById("mtqCheck").checked & !document.getElementById("mytCheck").checked)){
            filtreRegion = true
        }
        else{
            filtreRegion = false
        }
        if (ville.includes(recherche) | ville.toLowerCase().includes(recherche) | codePostal.includes(recherche)){
            filtreRecherche = true
        }
        else{
            filtreRecherche = false
        }
        if (filtreRegion == true && filtreRecherche == true){
            article.classList.remove("hidden")
        }
        else{
            article.classList.add("hidden")
        }
    }
}

document.getElementById('locationForm').addEventListener('submit', function(event) {
    const input = document.getElementById('dateLocation');
    const date = new Date(input.value);
    const hours = date.getHours();
    if (hours < 8 || hours > 19) {
        alert("Please select a time between 08:00 and 19:00.");
        event.preventDefault();
    }
});


