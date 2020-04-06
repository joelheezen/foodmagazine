window.addEventListener("load", init);
const divBody = document.querySelector("#container");
const recipeBody = document.querySelector("#recipe");

function init(){
    loadFood();
}

function loadFood(){
    fetch("webservice/index.php?")
        .then(function(response){
            if(response.status === 200 && response.ok){
                return response.json();
            }
            console.log("oopsie");
        })
        .then(foodLoaded)
        .catch(foodNotLoaded);
}

function foodLoaded(foods){
    divBody.innerHTML = "";
    for(let food of foods) {
        let div = document.createElement("div");
        div.id = 'food' +food.id;
        div.className = 'favor';
        divBody.appendChild(div);
        div.innerHTML = `<h3>${food.name}</h3> <br> <img src="https://source.unsplash.com/1600x900/?${food.name}" style="width:300px;height:200px;" alt="${food.name}"><button onclick= "loadDetails(${food.id})">Show recipe</button><br><button class ="fav" onclick ="clickHandler(${div.id})">favorite</button>`;
    }
    showLoadedFavorites();
}

function loadDetails(id){
    let params = new URLSearchParams();
    params.append('id', id);
    fetch(`webservice/index.php?` + params.toString(),
        {method: 'get',
        })
        .then(function(response ){
            if(response.ok){
                return response.json();
            }
            console.log("oops");
        })
        .then(detailsLoaded)
        .catch(detailsNotLoaded);
}

function detailsLoaded(detail){
    recipeBody.innerHTML = "";
    let div2 = document.createElement('div');
    recipeBody.appendChild(div2);
    div2.innerHTML = `
        <h3>Recipe!</h3>
        <p>${detail.recipe}</p>
        <h3>Tags!</h3>
        <p>${detail.tags}</p>`
}

function foodNotLoaded(){
    console.log("error");
}

function detailsNotLoaded(){
    console.log("details not loaded");
}

function showLoadedFavorites(){
    let currentItems = loadFavorites();
    let favs = document.querySelectorAll(".favor");
    for(let fav of favs) {
        if(currentItems.includes(fav.id)) {
            fav.classList.add("favorite")
        }
    }
}

function clickHandler(e){
    if (e.classList.contains("favor")) {
        toggleFavorite(e)
    }
}

function toggleFavorite(item) {
    let currentItems = loadFavorites();
    let index = currentItems.indexOf(item.id);
    if(index > -1){
        item.classList.remove("favorite");
        currentItems.splice(index, 1)
    } else {
        item.classList.add("favorite");
        currentItems.push(item.id)
    }
    localStorage.setItem('favorites', JSON.stringify(currentItems))
}
function loadFavorites() {
    let favorites = localStorage.getItem('favorites');
    if(favorites) {
        return JSON.parse(favorites)
    } else {
        return []
    }
}