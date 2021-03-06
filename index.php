<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LYRACONS | E-Commerce</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="p-3 col-12 text-white text-center bg-black fs-7 d-inline-block"><strong>¡Aprovecha la promo!</strong>
        <div class="d-md-inline-block">
          Comprá hasta 12
          cuotas sin interés</div>
      </div>
    </div>
  </div>

  <div class="container-fluid border-bottom d-none d-sm-block d-sm-none d-md-block">
    <!-- Menu Escritorio -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo lyracons.svg" class="img-fluid" alt="Responsive image"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="submenunav">
            <li class="nav-item">
              <a class="nav-link" href="#">SHOP</a>
              <ul>
                <li><a href="">PANTALONES</a></li>
                <li><a href="">REMERA</a></li>
                <li><a href="">CAMPERAS</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="btnwinter">REAL WINTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COMPLEMENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">EDITORIALES</a>
            </li>

          </ul>
          <div class="d-sm-none d-md-block">
            <ul class="navbar-nav align-items-center fs-7 mb-2 mb-lg-0 ">
              <li class="nav-item">
                <input type="text" class="bg-search" placeholder="BUSCAR">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="desaparecer()">INGRESAR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">CARRITO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="img/carrito.svg" class="img-fluid" alt="Responsive image"></a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- Menu Mobile -->
  <div class="container-fluid border-bottom">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-light text-black p-4">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">SHOP</a></li>
          <li class="nav-item"><a class="nav-link" href="#" id="btnwinter">REAL WINTER</a> </li>
          <li class="nav-item "><a class="nav-link" href="#">COMPLEMETOS</a> </li>
          <li class="nav-item "><a class="nav-link" href="#">EDITORIALES</a> </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-light bg-white text-black d-xl-none d-lg-none d-xl-block d-md-none d-lg-block">
      <div class="container-fluid">
        <div class="row align-items-center w-100">
          <div class="col text-start">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src="img/search.svg">
          </div>
          <div class="text-center col-5">
            <img src="img/logo lyracons.svg">
          </div>
          <div class="text-end col">
            <img src="img/carrito.svg">
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="container-fluid border-bottom">
    <div class="row text-black p-3">
      <div class="col-12 text-left fs-7 fa-1x"><img src="img/simbolo-mayorque.svg"> Invierno 2020</div>
      <div class="col-12 text-left fs-3 p-2 text-center-responsive" id="maintitle">Título de categoría</div>
    </div>
  </div>

  <div class="container-fluid d-xl-none d-lg-none d-xl-block d-md-none d-lg-block">
    <div class="row text-center">
      <div class="col-xs-6 col-6 border border-dark p-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">FILTRÁ
        POR +
      </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Filtrá por:</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
              <div class="border-bottom">
                <p>Talle:</p>
                <div class="row">
                  <div class="circulo_select m-2 col-3">35</div>
                  <div class="circulo m-2 col-3">36</div>
                  <div class="circulo m-2 col-3">37</div>
                  <div class="circulo m-2 col-3">38</div>
                  <div class="circulo m-2 col-3">39</div>
                  <div class="circulo m-2 col-3">40</div>
                  <div class="circulo m-2 col-3">41</div>
                  <div class="circulo m-2 col-3">42</div>
                  <div class="circulo m-2 col-3">43</div>
                </div>
                <br>
              </div>
              <br>
              <div class="border-bottom">
                <p>Color: Animal print negro</p>
                <div class="row mb-3">
                  <div class="rectangulo_select mx-2 col-4"></div>
                  <div class="rectangulo mx-2 col-4"></div>
                  <div class="rectangulo mx-2 col-4"></div>
                </div>
              </div>
              <br>
              <div>
                <p>Precio: </p>
                <div class="row mb-2">
                  <div class="d-inline"><i
                      class="fa fa-check text-white bg-black p-2 m-1 border border-dark rounded-circle"
                      aria-hidden="true"></i> $2.000 - $3.000</div>
                  <div class="d-inline"><i class="fa fa-check text-white border border-dark p-2 m-1 rounded-circle"
                      aria-hidden="true"></i> $3.000 - $4.000</div>
                </div>
              </div>
              <div class="d-flex">
                <button type="button" class="btn btn-outline-dark p-3 mt-2 border-btn">Aplicar</button>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-xs-6 col-6 border p-4 border-dark ">ORDENAR POR <img src="img/flecha.svg"></div>
    </div>
  </div>

  <div class="row mb-3 border-bottom">

    <!-- FILTRAR DESKTOP -->
    <div class="col-md-3 themed-grid-cold-none p-3" id="filtro-desktop">
      <label class="mb-2 px-3 fw-bold">FILTRAR POR:</label>

      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
              aria-controls="panelsStayOpen-collapseOne">
              Talle
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body text-gray-filter">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  35
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  36
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault1">
                  37
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault2">
                  38
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class="form-check-label" for="flexRadioDefault1">
                  39
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class="form-check-label" for="flexRadioDefault2">
                  40
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                <label class="form-check-label" for="flexRadioDefault1">
                  41
                </label>
              </div>

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTwo">
              Color
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body text-gray-filter">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Blanco
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Amarillo
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault1">
                  Hueso
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault2">
                  Marrón
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                <label class="form-check-label" for="flexRadioDefault1">
                  Negro
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                <label class="form-check-label" for="flexRadioDefault2">
                  Nude
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                <label class="form-check-label" for="flexRadioDefault1">
                  Plata
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                <label class="form-check-label" for="flexRadioDefault1">
                  Rojo
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                <label class="form-check-label" for="flexRadioDefault1">
                  Suela
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                <label class="form-check-label" for="flexRadioDefault1">
                  Visión
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseThree">
              Precio
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body text-gray-filter ">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                <label class="form-check-label" for="flexRadioDefault1">
                  $2.000 - $3.000
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                <label class="form-check-label" for="flexRadioDefault1">
                  $3.000 - $4.000
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFour">
              Temporada
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFour">
            <div class="accordion-body">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum quia repudiandae quod impedit culpa at
              quam voluptate doloremque facere quae quidem, velit odit, accusantium aspernatur totam atque quasi
              consequuntur doloribus!
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFive">
              Material
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFive">
            <div class="accordion-body">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga modi molestiae voluptates incidunt eveniet
              doloremque nisi facere ullam neque doloribus alias, temporibus nostrum rerum illum soluta laboriosam
              officia assumenda adipisci.
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-9 themed-grid-col p-3">
      <div class="row mb-2 fle-1 px-1">
        <div class="col-md-6 themed-grid-col text-gray-content d-none d-sm-block d-sm-none d-md-block">6 PRODUCTOS</div>
        <div class="col-md-6 themed-grid-col text-gray-content text-end  d-none d-sm-block d-sm-none d-md-block">ORDENAR
          POR: Relevancia
          <img src="img/down-arrow.png">
        </div>
      </div>

      <div
        class="col-md-12 px-3 pb-3 themed-grid-col fs-7 text-gray-content d-xl-none d-lg-none d-xl-block d-md-none d-lg-block">
        6 PRODUCTOS</div>

      <div class="container">
        <div class="row" id="grilla">
          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray-50.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <p class="card-text-price">$5.899,00</p>
            </div>
          </div>

          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray-nuevo.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <div class="d-inline-block card-text text-gray-price text-decoration-line-through">
                $3.299,00
              </div>
              <div class="d-md-inline-block card-text-price">
                $2.299,00
              </div>
              <div class="card-text text-red-lyracons">Hasta <strong class="font-weight-bold">12 Cuotas</strong></div>
            </div>
          </div>

          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <p class="card-text-price">$2.299,00</p>
            </div>
          </div>

          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <div class="d-inline-block card-text text-gray-price text-decoration-line-through">
                $3.299,00
              </div>
              <div class="d-md-inline-block card-text-price">
                $2.299,00
              </div>
              <div class="card-text text-red-lyracons">Hasta <strong class="font-weight-bold">12 Cuotas</strong></div>
            </div>
          </div>

          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <div class="d-inline-block card-text text-gray-price text-decoration-line-through">
                $3.299,00
              </div>
              <div class="d-md-inline-block card-text-price">
                $2.299,00
              </div>
              <div class="card-text text-red-lyracons">Hasta <strong class="font-weight-bold">12 Cuotas</strong></div>
            </div>
          </div>

          <div class="col-md-4 themed-grid-col mb-4 px-1">
            <img class="img-fluid w-100" src="img/img-grid-gray.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mb-2">Lorem ipsum dolor sit amet</p>
              <div class="d-inline-block card-text text-gray-price text-decoration-line-through">
                $3.299,00
              </div>
              <div class="d-md-inline-block card-text-price">
                $2.299,00
              </div>
              <div class="card-text text-red-lyracons">Hasta <strong class="font-weight-bold">12 Cuotas</strong></div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center p-2">
        <button type="button" id="boton" class="btn btn-dark fs-7 px-4">Ver más productos</button>

      </div>

    </div>



  </div>
  </div>

  <div class="container-fluid mb-4">
    <div class="row text-center">
      <div class="col-md-12">
        <ul class="flh-1 fle-1">
          <li>CAMBIOS Y DEVOLUCIONES</li>
          <li>ENVÍOS</li>
          <li>MEDIOS DE PAGO</li>
          <li>PREGUNTAS FRECUENTES</li>
          <li>MAYORISTA</li>
        </ul>
      </div>
      <div class="col-md-12">

        <p class="card-text"></p>
        <div class="form-row d-flex justify-content-center">
          <div class="form-group col-md-3 p-3">
            <h5 class="card-title fw-bold">NEWS</h5>
            <label class="mb-2">Suscribite y entérate de las promos!</label>
            <input type="mail" class="form-control" placeholder="Escribí tu email">
          </div>
        </div>
        <button type="submit" class="btn btn-dark px-3 fs-7">SUSCRIBITE</button>
      </div>
    </div>
  </div>

  <script src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>