document.querySelector('#boton').addEventListener('click', traerDatos);

document.getElementById("btnwinter").addEventListener("mouseover", mouseOver);
document.getElementById("btnwinter").addEventListener("mouseout", mouseOut);


function desaparecer() {
    var x = document.getElementById("grilla");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function mouseOver() {
  document.getElementById("maintitle").style.color = "#D81313";
}

function mouseOut() {
  document.getElementById("maintitle").style.color = "black";
}

function traerDatos() {

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'js/products.json', true);
    xhttp.send();
    xhttp.onreadystatechange = function() {

        if(this.readyState == 4 && this.status == 200) {

            let datos = JSON.parse(this.responseText).products;
           
            let res = document.querySelector('#grilla');
            

            for (let item of datos) {
                
                res.innerHTML += `

                <div class="col-md-4 themed-grid-col mb-4 px-1">
                    <img class="img-fluid w-100" src="${document.body.clientWidth>767?item.imageSrc:item.imageSrcMobile}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text mb-2">${item.name}</p>
                        
                        <div id="price"class="d-inline-block card-text text-gray-price text-decoration-line-through">
                        ${item.listPrice}
                        </div>
                        <div class="d-md-inline-block card-text-price">
                        ${item.bestPrice}
                        </div>
                        <div class="card-text text-red-lyracons">Hasta <strong class="font-weight-bold">${item.fees} Cuotas</strong></div>
                    </div>
                 </div>

                 `

            }
            
        }

    }

}