@extends('layouts.main-layout')
@section ('page-title', 'Catalogo productos')

@section ('content-area')
  
  <div class="container-fluid mt-3">
    <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-gap-1 grid-gap-sm-3">

      <!-- HOME SLIDER -->
      <div class="swiper-container grid-column-start-1 grid-column-end-3 grid-row-start-1 grid-row-end-3" id="homeSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-cover="{{ asset('img/slider/1.jpg') }}" data-height="220px 320px 350px 470px 420px">
            <div class="overlay-content overlay-show align-items-end text-white">
              <div class="text-center">
                <h1 class="animated font-weight-bold" data-animate="fadeDown">Identidad Zapoteca <br/> gastronomía de oaxaca </h1>
                <a href="shop-grid.html" class="btn btn-faded-primary rounded-pill animated mt-4" data-animate="fadeUp">ver más</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-cover="{{ asset('img/slider/2.jpg') }}" data-height="220px 320px 350px 470px 420px">
            <div class="overlay-content overlay-show align-items-start text-white">
              <div class="text-center">
                <h2 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">Artesanias</h2>
                <h1 class="animated font-weight-bold" data-animate="fadeDown"> Dibujo del natural </h1>
                <a href="shop-grid.html" class="btn btn-warning rounded-pill animated mt-4" data-animate="fadeUp">ver más</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-cover="{{ asset('img/slider/3.jpg') }}" data-height="220px 320px 350px 470px 420px">
            <div class="overlay-content overlay-show align-items-end text-white">
              <div class="text-center">
                <h2 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">Infantiles</h2>
                <h1 class="animated font-weight-bold" data-animate="fadeDown"> Dibujando y coloreando  </h1>
                <a href="shop-grid.html" class="btn btn-faded-primary rounded-pill animated mt-4" data-animate="fadeUp">ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev autohide"><i class="material-icons">chevron_left</i></div>
        <div class="swiper-button-next autohide"><i class="material-icons">chevron_right</i></div>
      </div>
      <!-- /HOME SLIDER -->

      <!-- TOP CATEGORIES 1 -->
      <div class="card card-style1 overflow-hidden">
        <div class="d-grid grid-template-row-2 grid-template-row-md-none grid-template-col-md-2">
          <div data-cover="{{ asset('img/categories/infantil.jpg') }}" class="order-md-2"></div>
          <div class="text-center p-3 order-md-1">
            <h3>Infantil</h3>
            <p class="text-center d-none d-md-block"> Conozca nuestra area Infantil</p>
            <a href="shop-grid.html" class="btn btn-outline-primary rounded-pill stretched-link">Ver más</a>
          </div>
        </div>
      </div>
      <div class="card card-style1 overflow-hidden">
        <div class="d-grid grid-template-row-2 grid-template-row-md-none grid-template-col-md-2">
          <div data-cover="{{ asset('img/categories/vasos.jpg') }}" class="order-md-2"></div>
          <div class="text-center p-3 order-md-1">
            <h3>Artesanias</h3>
            <p class="text-center d-none d-md-block"> Contamos con una variedad de productos</p>
            <a href="shop-grid.html" class="btn btn-outline-danger rounded-pill stretched-link"> Ver más</a>
          </div>
        </div>
      </div>
      <!-- /TOP CATEGORIES 1 -->

    </div>

    <!-- SERVICES BLOCK -->
    <div class="d-grid grid-template-col-sm-2 grid-template-col-xl-4 column-gap-3 row-gap-4 mt-5 mb-5">
      <div class="media">
        <button class="btn btn-icon btn-lg rounded-circle btn-faded-primary active" type="button">
          <i class="material-icons">local_shipping</i>
        </button>
        <div class="media-body ml-3">
          <h6> PUNTO DE VENTA</h6>
          <span class="text-secondary font-condensed">C. Porfirio Díaz # Oaxaca, Mexico</span>
        </div>
      </div>
      <div class="media">
        <button class="btn btn-icon btn-lg rounded-circle btn-faded-primary active" type="button">
          <i class="material-icons">security</i>
        </button>
        <div class="media-body ml-3">
          <h6>METODOS DE PAGO</h6>
          <span class="text-secondary font-condensed">Efectivo, tarjetas de crédito o débito  </span>
        </div>
      </div>
      <div class="media">
        <button class="btn btn-icon btn-lg rounded-circle btn-faded-primary active" type="button">
          <i class="material-icons">paypal</i>
        </button>
        <div class="media-body ml-3">
          <h6> PAGA EN LÍNEA</h6>
          <span class="text-secondary font-condensed"> 100% Seguro vía PayPal</span>
        </div>
      </div>
      <div class="media">
        <a href="https://api.whatsapp.com/send?phone=529516503271&text=Hola%20lo%20contacto%20desde%20su%20sitio%20Web%20Quisiera%20más%20información">  
        <button class="btn btn-icon btn-lg rounded-circle btn-faded-primary active" type="button">
          <i class="material-icons">phone</i>
        </button>
        </a>
        <div class="media-body ml-3">
          <h6>WHATSAPP</h6>
          <span class="text-secondary font-condensed"> +52 951 650 3271</span>
        </div>
      </div>
    </div>
    <!-- /SERVICES BLOCK -->

    <!-- DISCOVER -->
    <h4 class="mt-4 text-center">Categorias</h4>
    <div class="d-grid grid-template-col-2 grid-template-col-lg-4 grid-gap-1 grid-gap-sm-3 mt-3">
    @foreach ($genders as $row)    
      <div class="img img-zoom-in">
        <div data-cover="{{ asset('img/discover/boton-lobito-verde.png') }}" data-height="125px 130px 150px 120px 150px"></div>
        <div class="overlay overlay-show bg-dark"></div>
        <div class="overlay-content overlay-show">
          <a href="shop-grid.html" class="card-link h3 text-white font-condensed stretched-link text-center px-3"> {{ $row->genre }}</a>
        </div>
      </div>
    @endforeach  
    </div>
    <div class="text-right mt-3">
      <a href="shop-categories.html" class="btn btn-light rounded-pill has-icon">Todos <i class="material-icons">arrow_right</i></a>
    </div>
    <!-- /DISCOVER -->


    <!-- FLASH DEALS -->
    <div class="card card-style1 mt-5">
      <div class="card-body">
        <h5 class="card-title">
          <i class="material-icons align-bottom text-warning">flash_on</i>
          NOVEDADES
          <span class="text-danger" id="flash-deals-countdown"></span>
        </h5>
        <div class="swiper-container" id="dealSlider2">
				  
          <div class="swiper-wrapper">
			@foreach ($news as $row)
            <div class="swiper-slide card card-product">
              <div class="card-body">
                &nbsp;
                <a href="shop-single.html"><img class="card-img-top" src="{{ asset('img/products/'.$row->isbn.'.jpg') }}" alt="{{ $row->title }}"></a>
                <a href="shop-single.html" class="card-title card-link"> {{ $row->title }} </a>
                <span class="badge badge-warning">5% </span>
                <div class="price">
                  <span class="h4">$ {{ $row->price }}</span>
                  <span class="h5 del">$ {{ $row->price }} </span>
                </div>
              </div>
              <div class="card-footer">
                &nbsp;
              </div>
            </div>	
			@endforeach 	
          </div>
		  
          <div class="swiper-button-prev"><i class="material-icons">chevron_left</i></div>
          <div class="swiper-button-next"><i class="material-icons">chevron_right</i></div>
        </div>
      </div>
    </div>
    <!-- /FLASH DEALS -->

    <!-- BRANDS SLIDER -->
    <h4 class="mt-4 text-center">Autores</h4>
    <div class="card mt-3 border-0">
      <div class="card-body pb-0">
        <div class="swiper-container" id="brandSlider">
          <div class="swiper-wrapper pb-5">
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand1" class="card-img-top">
              </a>
            </div>
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand2" class="card-img-top">
              </a>
            </div>
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand3" class="card-img-top">
              </a>
            </div>
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand4" class="card-img-top">
              </a>
            </div>
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand5" class="card-img-top">
              </a>
            </div>
            <div class="swiper-slide card p-3">
              <a href="shop-grid.html" class="stretched-link">
                <img src="{{ asset('img/brands/boton-lobito-verde.png') }}" alt="brand1" class="card-img-top">
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <!-- /BRANDS SLIDER -->


    <!-- BEST SELLERS & TOP CATEGORIES 2 -->
    <div class="d-grid grid-template-col-2 grid-template-col-lg-5 grid-template-col-xl-4 grid-gap-2 grid-gap-xl-3 mt-4 mb-3">
	
      <div class="card card-style1 grid-column-start-1 grid-column-end-3 grid-column-end-sm-2 grid-column-end-lg-3 grid-column-end-xl-2">
        <div class="card-body">
		
          <h5 class="card-title">Más vendidos</h5>
		  
          <ul class="list-group list-group-flush list-group-sms">
			@foreach ($sellers as $row)
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html">
                  <img src="{{ asset('img/products/'.$row->isbn.'.jpg') }}" width="75" alt="{{ $row->title }}">
                </a>
                <div class="media-body ml-3">
                  <a href="shop-single.html" class="card-link text-secondary">{{ $row->title }}</a>
                  <div class="price"><span>$ {{ $row->price }}</span></div>
                </div>
              </div>
            </li>
			@endforeach
          </ul>
		  
        </div>
      </div>
	  
      <div class="card card-style1">
        <a href="shop-grid.html" class="card-link">
          <img class="card-img-top" src="{{ asset('img/categories/libros.jpg') }}" alt="Men">
          <div class="card-body bg-primary-faded text-primary">
            <h5 class="mb-0"> LIBROS </h5>
          </div>
        </a>
        <div class="list-group list-group-sms list-group-no-border list-group-flush">
          <a href="shop-grid.html" class="list-group-item list-group-item-action"> CUENTO INFANTIL ILUSTRADO </a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action"> LITERATURA MEXICANA</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action"> HISTORIA DE MÉXICO </a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action"> LITERATURA JUEVENIL </a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">Mas &raquo;</a>
        </div>
      </div>
      <div class="card card-style1">
        <a href="shop-grid.html" class="card-link">
          <img class="card-img-top" src="{{ asset('img/categories/artesanias.jpg') }}" alt="Women">
          <div class="card-body bg-danger-faded text-danger">
            <h5 class="mb-0"> ARTESANIAS </h5>
          </div>
        </a>
        <div class="list-group list-group-sms list-group-no-border list-group-flush">
          <a href="shop-grid.html" class="list-group-item list-group-item-action">TEXTIL</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">JOYERIA PLATA</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">CERAMICA</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">PLAYERAS</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">Mas &raquo;</a>
        </div>
      </div>
      <div class="card card-style1 grid-column-start-1 grid-column-end-3 grid-column-start-sm-2 grid-column-end-sm-3
      grid-column-start-lg-5 grid-column-end-lg-6 grid-column-start-xl-4 grid-column-end-xl-5">
        <a href="shop-grid.html" class="card-link">
          <img class="card-img-top" src="{{ asset('img/categories/obra.jpg') }}" alt="Kids">
          <div class="card-body bg-success-faded text-success">
            <h5 class="mb-0"> OBRA GRAFICA </h5>
          </div>
        </a>
        <div class="list-group list-group-sms list-group-no-border list-group-flush">
          <a href="shop-grid.html" class="list-group-item list-group-item-action">LITOGRAFIA</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">OBRAS GRAFICAS</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">LITOGRAFIAS</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">SERIGRAFIA</a>
          <a href="shop-grid.html" class="list-group-item list-group-item-action">Mas &raquo;</a>
        </div>
      </div>
    </div>
    <!-- /BEST SELLERS & TOP CATEGORIES 2 -->


  </div>

@endsection