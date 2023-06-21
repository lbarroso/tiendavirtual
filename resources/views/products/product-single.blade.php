@extends('layouts.main-layout')
@section('page-title', 'Producto detalle')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/photoswipe/photoswipe.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/photoswipe/photoswipe-default-skin/default-skin.min.css') }}">
@endsection


@section ('content-area')

<div class="breadcrumb-container">

    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $product->genre }}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $product->category }}</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid mb-3">

    <div class="card card-style1">
	
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="swiper-gallery">
                <div class="swiper-gallery-carousel">
                  <div class="swiper-container" id="mainSlider">
                    <div class="swiper-wrapper">
                      <img src="{{ asset('img/products/'.$product->isbn.'.jpg') }}" data-large="{{ asset('img/products/'.$product->isbn.'.jpg') }}" alt="Product" class="swiper-slide">
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev autohide"><i class="material-icons">chevron_left</i></div>
                    <div class="swiper-button-next autohide"><i class="material-icons">chevron_right</i></div>
                    &nbsp;
                  </div>
                </div>
                <div class="swiper-gallery-thumb">
                  <div class="swiper-container" id="thumbSlider">
                    <div class="swiper-wrapper">
                      <img src="{{ asset('img/products/'.$product->isbn.'.jpg') }}" alt="Product" class="swiper-slide img-thumbnail">
                    </div>
                    <div class="swiper-button-prev swiper-button-prev-sm vertical"><i class="material-icons">keyboard_arrow_up</i></div>
                    <div class="swiper-button-next swiper-button-next-sm vertical"><i class="material-icons">keyboard_arrow_down</i></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 pt-3 pt-md-0">
              <h4 class="card-title font-weight-normal mb-3">{{ $product->title }}</h4>
              <h6 class="mb-3"> <a href="javascript:void(0)">{{ $product->isbn }}</a></h6>
              <h3 class="price mb-3">              
                <span>${{ $product->price }}</span>
              </h3>
              <form>
                <div class="form-group">
                  <label class="font-weight-bold d-block">Categoria</label>
                  <div class="btn-group btn-group-sm btn-group-toggle btn-group-circle" data-toggle="buttons">
                      {{ $product->category }}
                  </div>
                </div>
                <div class="form-group">
                  <label class="font-weight-bold d-block">Genero</label>
                  <div class="custom-color custom-color-lg">
                    <div class="color-item">
                      {{ $product->genre }}
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6 col-sm-4 col-md-5 col-lg-4">
                    <label class="d-block font-weight-bold">Cantidad</label>
                    <div class="custom-spinner">
                      <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">remove</i></button>
                      <input type="number" class="form-control" value="1" min="1" max="1">
                      <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">add</i></button>
                    </div>
                  </div>
                  <div class="form-group col-6 col-sm-8 col-md-7 col-lg-8 d-flex align-items-end">
                    <a href="https://api.whatsapp.com/send?phone=529516503271&text=Hola%20lo%20contacto%20desde%20su%20sitio%20Web%20requier0%20información%20de%20:{{ $product->title }}%20clave: {{ $product->isbn }}">
                      <button class="btn rounded-pill btn-primary btn-block atc-demo" type="button" data-title="{{ $product->title }}"> Preguntar por este producto </button>
                    </a>
                  </div>
                </div>
              </form>
              <hr>
              <div class="d-flex align-items-center">
                  &nbsp;
              </div>
            </div>
          </div>
        </div>
        
        <nav class="nav nav-tabs justify-content-center border-bottom mt-3">
          <a class="nav-item nav-link has-icon active" href="#description-content" data-toggle="tab"><i class="material-icons mr-1">list</i>Description</a>          
        </nav>
        <div class="tab-content pt-4">
          <div class="tab-pane fade show active" id="description-content">
            <p> {{ html_entity_decode($product->description) }} </p>          
          </div>          
          <div class="tab-pane fade " id="review-content">
            <div class="row gutters-3 justify-content-center">		  
              &nbsp;
            </div>
          </div>		
        </div>
        
      </div>

    <!-- RELATED PRODUCTS -->
    <h4 class="text-center mt-4">Productos relacionados</h4>
    <div class="d-grid grid-template-col-2 grid-template-col-md-4 grid-gap-1 grid-gap-sm-3 my-3">
	  @foreach ($related as $row)	
      <div class="card card-product card-style1">
        <div class="card-body">
          &nbsp;
          <a href="{{ route('products.single', ['id' => $row->id]) }}"><img class="card-img-top" src="{{ asset('img/products/'.$row->isbn.'.jpg') }}" alt="{{ $row->title }}"></a>
          <a href="{{ route('products.single', ['id' => $row->id]) }}" class="card-title card-link">{{ $row->title }}</a>
          &nbsp;
          <div class="price"><span class="h5">${{ $row->price }}</span></div>
        </div>
        <div class="card-footer">
          &nbsp;
        </div>
      </div>
	  @endforeach
	</div>
    <!-- /RELATED PRODUCTS -->

  </div>

  @endsection

  @section('scripts')

  <!-- Plugins -->
  <script src="{{ asset('plugins/photoswipe/photoswipe.min.js') }}"></script>
  <script src="{{ asset('plugins/photoswipe/photoswipe-ui-default.min.js') }}"></script>
  
  <!-- Application script -->

  <script>
  $(() => {

    // App.atcDemo() // Add to Cart Demo
    // App.atwDemo() // Add to Wishlist Demo
    // App.colorOption()
    App.rating()

    // Main Slider
    const mainSlider = new Swiper('#mainSlider', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: () => {
          setTimeout(() => {
            // document.querySelector('#thumbSlider .swiper-slide:first-child').classList.add('active')
          }, 100)
        }
      }
    })

    // Thumbnail slider
    const thumbSlider = new Swiper('#thumbSlider', {
      direction: 'vertical',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      spaceBetween: 5,
      slidesPerView: 4,
      breakpoints: {
        991: { // lg
          slidesPerView: 3,
        },
        1199: { // xl
          slidesPerView: 4
        }
      }
    })

    App.resize(() => {
      if (App.mdDown()) {
        thumbSlider.changeDirection('horizontal')
        document.querySelector('#thumbSlider .swiper-button-prev').classList.remove('vertical')
        document.querySelector('#thumbSlider .swiper-button-next').classList.remove('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev i').innerText = 'keyboard_arrow_left'
        document.querySelector('#thumbSlider .swiper-button-next i').innerText = 'keyboard_arrow_right'
      } else {
        thumbSlider.changeDirection('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev').classList.add('vertical')
        document.querySelector('#thumbSlider .swiper-button-next').classList.add('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev i').innerText = 'keyboard_arrow_up'
        document.querySelector('#thumbSlider .swiper-button-next i').innerText = 'keyboard_arrow_down'
      }
    })()

    // Hide navigation when thumb items less than 5
    if (document.querySelectorAll('#thumbSlider .swiper-slide').length < 5) {
      for (const el of document.querySelectorAll('#thumbSlider .swiper-button-next, #thumbSlider .swiper-button-prev')) {
        el.remove()
      }
    }

    // Update thumb slider active
    mainSlider.on('slideChange', function () {
      thumbSlider.slideTo(mainSlider.activeIndex)
      for (const el of document.querySelectorAll('#thumbSlider .swiper-slide')) {
        el.classList.remove('active')
      }
      document.querySelector(`#thumbSlider .swiper-slide:nth-child(${mainSlider.activeIndex + 1})`).classList.add('active')
    })

    // Update main slider active
    for (const el of document.querySelectorAll('#thumbSlider .swiper-slide')) {
      el.addEventListener('click', () => {
        mainSlider.slideTo(Array.prototype.indexOf.call(el.parentElement.children, el))
      })
    }

    // Photoswipe
    const openPhotoSwipe = (items, activeIndex) => {
      activeIndex = typeof activeIndex !== 'undefined' ? activeIndex : 0
      const pswpElement = document.querySelector('.pswp')
      const options = {
        index: activeIndex
      }
      const gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options)
      gallery.init()
    }
    let items = []
    for (const el of document.querySelectorAll('.swiper-gallery-carousel img')) {
      // Collect items
      items.push({
        src: el.getAttribute('data-large'),
        w: 1395,
        h: 1500
      })
      // Open on click
      el.addEventListener('click', () => {
        openPhotoSwipe(items, Array.prototype.indexOf.call(el.parentElement.children, el))
      })
    }

  })
  </script>

@endsection