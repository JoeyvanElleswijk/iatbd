let checkbox_elektronica = document.getElementById("elektronica");
let checkbox_transport = document.getElementById("transport");
let checkbox_fotografie = document.getElementById("fotografie");
let checkbox_dvd = document.getElementById("dvd");
let checkbox_spelcomputer = document.getElementById("spelcomputer");
let checkbox_djapparatuur = document.getElementById("djapparatuur");
let checkbox_bouwapparatuur = document.getElementById("bouwapparatuur");
let checkbox_instrumenten = document.getElementById("instrumenten");
let checkbox_tuinapparatuur = document.getElementById("tuinapparatuur");
let checkbox_boeken = document.getElementById("boeken");
let list_of_product = document.getElementsByTagName("li");

checkbox_elektronica.checked = true;
checkbox_transport.checked = true;
checkbox_fotografie.checked = true;
checkbox_dvd.checked = true;
checkbox_spelcomputer.checked = true;
checkbox_djapparatuur.checked = true;
checkbox_bouwapparatuur.checked = true;
checkbox_instrumenten.checked = true;
checkbox_tuinapparatuur.checked = true;
checkbox_boeken.checked = true;

checkbox_elektronica.addEventListener('change', function(){
    if(checkbox_elektronica.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'elektronica') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'elektronica') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_transport.addEventListener('change', function(){
    if(checkbox_transport.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Transport') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Transport') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_fotografie.addEventListener('change', function(){
    if(checkbox_fotografie.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Video') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Video') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_dvd.addEventListener('change', function(){
    if(checkbox_dvd.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == "Cd's") {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == "Cd's") {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_spelcomputer.addEventListener('change', function(){
    if(checkbox_spelcomputer.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Spelcomputers') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Spelcomputers') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_djapparatuur.addEventListener('change', function(){
    if(checkbox_djapparatuur.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'DJ') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'DJ') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_bouwapparatuur.addEventListener('change', function(){
    if(checkbox_bouwapparatuur.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Bouw') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Bouw') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_instrumenten.addEventListener('change', function(){
    if(checkbox_instrumenten.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Muziek') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Muziek') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_tuinapparatuur.addEventListener('change', function(){
    if(checkbox_tuinapparatuur.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Tuin') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Tuin') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

checkbox_boeken.addEventListener('change', function(){
    if(checkbox_boeken.checked) {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Boeken') {
                list_of_product[i].style.display = '';
            }
        }
    }
    else {
        for(let i = 0; i < list_of_product.length; i++) {
            if (list_of_product[i].dataset.kindOfProduct == 'Boeken') {
                list_of_product[i].style.display = 'none';
            }
        }
    }
});

function productSearch() {
    var input = document.getElementById("js--productSearch");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('gridCard');
  
    for (i = 0; i < nodes.length; i++) {
      if (nodes[i].innerText.toLowerCase().includes(filter)) {
        nodes[i].style.display = "flex";
      } else {
        nodes[i].style.display = "none";
      }
    }
  }

  function search() {
    var input = document.getElementById("js--search");
    var filter = input.value.toLowerCase();
    var nodes = document.getElementsByClassName('category__item');
  
    for (i = 0; i < nodes.length; i++) {
      if (nodes[i].innerText.toLowerCase().includes(filter)) {
        nodes[i].style.display = "block";
      } else {
        nodes[i].style.display = "none";
      }
    }
  }