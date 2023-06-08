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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Single Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Version 1</li>
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
                    <img src="../../img/products/1_medium.jpg" data-large="../../img/products/1_large.jpg" alt="Product" class="swiper-slide">
                    <img src="../../img/products/1_medium_yellow.jpg" data-large="../../img/products/1_large_yellow.jpg" alt="Product" class="swiper-slide">
                    <img src="../../img/products/1_medium_red.jpg" data-large="../../img/products/1_large_red.jpg" alt="Product" class="swiper-slide">
                    <img src="../../img/products/1_medium_maroon.jpg" data-large="../../img/products/1_large_maroon.jpg" alt="Product" class="swiper-slide">
                    <img src="../../img/products/1_medium_charcoal.jpg" data-large="../../img/products/1_large_charcoal.jpg" alt="Product" class="swiper-slide">
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev autohide"><i class="material-icons">chevron_left</i></div>
                  <div class="swiper-button-next autohide"><i class="material-icons">chevron_right</i></div>
                  <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt"></button>
                </div>
              </div>
              <div class="swiper-gallery-thumb">
                <div class="swiper-container" id="thumbSlider">
                  <div class="swiper-wrapper">
                    <img src="../../img/products/1_small.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="../../img/products/1_small_yellow.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="../../img/products/1_small_red.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="../../img/products/1_small_maroon.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="../../img/products/1_small_charcoal.jpg" alt="Product" class="swiper-slide img-thumbnail">
                  </div>
                  <div class="swiper-button-prev swiper-button-prev-sm vertical"><i class="material-icons">keyboard_arrow_up</i></div>
                  <div class="swiper-button-next swiper-button-next-sm vertical"><i class="material-icons">keyboard_arrow_down</i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-3 pt-md-0">
            <h4 class="card-title font-weight-normal mb-3">Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt</h4>
            <h6 class="mb-3"><span class="rating" data-value="4.5"></span> <a href="javascript:void(0)">2 reviews</a></h6>
            <h3 class="price mb-3">
              <span class="del">$140.00</span>
              <span >$120.00</span>
            </h3>
            <form>
              <div class="form-group">
                <label class="font-weight-bold d-block">Size</label>
                <div class="btn-group btn-group-sm btn-group-toggle btn-group-circle" data-toggle="buttons">
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Small">
                    <input type="radio" name="productSize">S
                  </label>
                  <label class="btn btn-outline-secondary active" data-toggle="tooltip" title="Medium">
                    <input type="radio" name="productSize" checked>M
                  </label>
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Large">
                    <input type="radio" name="productSize">L
                  </label>
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Extra Large">
                    <input type="radio" name="productSize">XL
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="font-weight-bold d-block">Color</label>
                <div class="custom-color custom-color-lg">
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-1" class="custom-control-input" checked>
                    <label for="colorOption-1" class="rounded-circle" style="background-color:#314e76"></label>
                  </div>
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-2" class="custom-control-input">
                    <label for="colorOption-2" class="rounded-circle" style="background-color:#fcab28"></label>
                  </div>
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-3" class="custom-control-input">
                    <label for="colorOption-3" class="rounded-circle" style="background-color:#db4524"></label>
                  </div>
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-4" class="custom-control-input">
                    <label for="colorOption-4" class="rounded-circle" style="background-color:#793a41"></label>
                  </div>
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-5" class="custom-control-input">
                    <label for="colorOption-5" class="rounded-circle" style="background-color:#605f63"></label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6 col-sm-4 col-md-5 col-lg-4">
                  <label class="d-block font-weight-bold">Quantity</label>
                  <div class="custom-spinner">
                    <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">remove</i></button>
                    <input type="number" class="form-control" value="1" min="1" max="999">
                    <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">add</i></button>
                  </div>
                </div>
                <div class="form-group col-6 col-sm-8 col-md-7 col-lg-8 d-flex align-items-end">
                  <button class="btn rounded-pill btn-primary btn-block atc-demo" type="button" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt">Add to Cart</button>
                </div>
              </div>
            </form>
            <hr>
            <div class="d-flex align-items-center">
              <span class="text-muted">Share</span>
              <button class="btn btn-icon btn-faded-primary btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Facebook">
                <i class="custom-icon" data-icon="facebook" data-size="17x17"></i>
              </button>
              <button class="btn btn-icon btn-faded-info btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Twitter">
                <i class="custom-icon" data-icon="twitter" data-size="17x17"></i>
              </button>
              <button class="btn btn-icon btn-faded-danger btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Google">
                <i class="custom-icon" data-icon="gplus" data-size="17x17"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav nav-tabs justify-content-center border-bottom mt-3">
        <a class="nav-item nav-link has-icon active" href="#description-content" data-toggle="tab"><i class="material-icons mr-1">list</i>Description</a>
        <a class="nav-item nav-link has-icon" href="#review-content" data-toggle="tab"><i class="material-icons mr-1">star_border</i>Reviews (2)</a>
      </nav>
      <div class="tab-content pt-4">
        <div class="tab-pane fade show active" id="description-content">
          <p>HanesBrands is a socially responsible manufacturer and marketer of leading everyday basic apparel under some of the world's strongest apparel brands in the Americas, Europe and Asia, as well as in Australia and South Africa.</p>
          <p>Now this medium weight 7.8-o fleece sweatshirt is even better, because it is made with up to 5 percent polyester created from recycled plastic.</p>
          <ul>
            <li>50% Cotton, 50% Polyester</li>
            <li>Imported</li>
            <li>shirts closure</li>
            <li>Machine Wash</li>
            <li>Soft, durable fleece with double-needle cover-seamed neck and armholes stays strong when you work or play hard</li>
            <li>Machine wash it again and again without hesitation because it's pill-resistant</li>
            <li>Ribbed waistband and cuffs</li>
          </ul>
        </div>
        <div class="tab-pane fade " id="review-content">
          <div class="row gutters-3 justify-content-center">
            <div class="col-11 col-sm-6 col-md-4 col-lg-3">
              <h5 class="d-flex align-items-center font-condensed">
                Overall Rating: 4.5
                <span class="rating ml-1" data-value="4.5"></span>
              </h5>
              <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="5"></span> <span>21</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="4"></span> <span>5</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="3"></span> <span>2</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="2"></span> <span>1</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="0"></span></a>
              </div>
              <div class="text-center mt-1">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#reviewModal">Write a review</button>
              </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-5 mt-md-0">
              <div class="media">
                <a href="javascript:void(0)"><img src="../../img/user/user1.svg" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <h6>Terrific Shirt, Exactly What I Wanted.</h6>
                  <p class="d-flex flex-wrap align-items-center">
                    <span class="rating mr-2" data-value="5"></span>
                    <a href="javascript:void(0)" class="mr-2">Alan Lewis</a>
                    <span class="text-muted font-size-sm">3 days ago</span>
                  </p>
                  <p>The Hanes sweatshirt was precisely what I wanted except for the color which is better than what I thought I was getting. This order went perfectly, so much so that another two are being shipped to me right now. It is way too early to say anything about durability; but otherwise, there is no way this order could have gone any better than it did. If you are interested in a pretty traditional long-sleeve sweatshirt, you would do well to give this one serious consideration.</p>
                  <hr>
                </div>
              </div>
              <div class="media">
                <a href="javascript:void(0)"><img src="../../img/user/user2.svg" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <h6>Very comfortable.</h6>
                  <p class="d-flex flex-wrap align-items-center">
                    <span class="rating mr-2" data-value="4"></span>
                    <a href="javascript:void(0)" class="mr-2">Amy</a>
                    <span class="text-muted font-size-sm">5 days ago</span>
                  </p>
                  <p>Fits slightly larger than expected, but gets longer, not just wider. (For reference, I am female, 5'8'', 170lbs, and this sweatshirt fits around my 36J chest with room to spare, coming to rest at about crotch level)</p>
                  <hr>
                </div>
              </div>
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><span class="page-link has-icon"><i class="material-icons">chevron_left</i></span></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item active"><span class="page-link">2</span></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RELATED PRODUCTS -->
    <h4 class="text-center mt-4">Related Products</h4>
    <div class="d-grid grid-template-col-2 grid-template-col-md-4 grid-gap-1 grid-gap-sm-3 my-3">
      <div class="card card-product card-style1">
        <div class="card-body">
          <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
          <a href="shop-single.html"><img class="card-img-top" src="../../img/products/1_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">Hanes Hooded Sweatshirt</a>
          <span class="badge badge-success">New arrival</span>
          <div class="price"><span class="h5">$18.56</span></div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
        </div>
      </div>
      <div class="card card-product card-style1">
        <div class="card-body">
          <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
          <a href="shop-single.html"><img class="card-img-top" src="../../img/products/2_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">The Flash Logo T-Shirt</a>
          <div class="price">
            <span class="h5">$16.64</span>
          </div>
          <div class="custom-color custom-color-lg">
            <div class="color-item">
              <input type="radio" name="productColor1" value="../../img/products/2_small.jpg" id="productColor1-1" class="custom-control-input" checked>
              <label for="productColor1-1" class="rounded-circle" style="background-color:#f2c43a"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor1" value="../../img/products/2_small_black.jpg" id="productColor1-2" class="custom-control-input">
              <label for="productColor1-2" class="rounded-circle" style="background-color:#23232b"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor1" value="../../img/products/2_small_red.jpg" id="productColor1-3" class="custom-control-input">
              <label for="productColor1-3" class="rounded-circle" style="background-color:#eb0015"></label>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
        </div>
      </div>
      <div class="card card-product card-style1">
        <div class="card-body">
          <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
          <a href="shop-single.html"><img class="card-img-top" src="../../img/products/3_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">Open Front Cropped Cardigans</a>
          <span class="badge badge-warning">20% OFF</span>
          <div class="price">
            <span class="h5 del">$19.00</span>
            <span class="h5">$15.20</span>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
        </div>
      </div>
      <div class="card card-product card-style1">
        <div class="card-body">
          <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
          <a href="shop-single.html"><img class="card-img-top" src="../../img/products/4_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">Cotton Fleece Long Hoodie</a>
          <div class="price">
            <span class="h5 del">$98.90</span>
            <span class="h5">$85.00</span>
          </div>
          <div class="custom-color custom-color-lg">
            <div class="color-item">
              <input type="radio" name="productColor2" value="../../img/products/4_small.jpg" id="productColor2-1" class="custom-control-input" checked>
              <label for="productColor2-1" class="rounded-circle" style="background-color:#625e39"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor2" value="../../img/products/4_small_blue.jpg" id="productColor2-2" class="custom-control-input">
              <label for="productColor2-2" class="rounded-circle" style="background-color:#2e4797"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor2" value="../../img/products/4_small_maroon.jpg" id="productColor2-3" class="custom-control-input">
              <label for="productColor2-3" class="rounded-circle" style="background-color:#791949"></label>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
        </div>
      </div>
    </div>
    <!-- /RELATED PRODUCTS -->
  </div>

  @endsection

  @section('scripts')

  <!-- Plugins -->
  <script src="{{ asset('plugins/photoswipe/photoswipe.min.js') }}"></script>
  <script src="{{ asset('plugins/photoswipe/photoswipe-ui-default.min.js') }}"></script>
  
  <!-- Application script -->
  <script src="../js/app.min.js"></script>
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
            document.querySelector('#thumbSlider .swiper-slide:first-child').classList.add('active')
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