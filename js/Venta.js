var searchBtn = document.getElementById('search-btn'), searchResults = document.getElementById('searchResultsDiv'), 
closeResultsBtn = document.getElementById('closeResultsBtn');

searchBtn.addEventListener('click', function(){
    searchResults.classList.remove('searchResultsHide');
});

closeResultsBtn.addEventListener('click', function(){
    searchResults.classList.add('searchResultsHide');
});


function hola(){
    alert("hola");
}

class Product {
    constructor(id, name, units, total) {
        this.id = id;
        this.name = name;
        this.units = units;
        this.total = total;
    }
}