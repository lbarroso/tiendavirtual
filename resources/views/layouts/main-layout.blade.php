<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">	
  <!-- Font & Icon -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('img/favicon/touch-icon-iphone.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/touch-icon-ipad.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/touch-icon-iphone-retina.png') }}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{ asset('img/favicon/touch-icon-ipad-retina.png') }}">

  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('plugins/swiper/swiper.min.css') }}">

  <!-- Main style -->
  <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">

  <title> @yield('page-title') </title>

  @yield('styles')

</head>

<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="container-fluid d-flex align-items-center">

      <nav class="nav mr-1 d-none d-md-flex">
        <a class="nav-link nav-link-sm has-icon bg-white pl-0" href="tel:9516503271"><i class="material-icons mr-1">phone</i> +52 951 650 3271</a>
        <a class="nav-link nav-link-sm has-icon bg-white" href="mailto:libreriacaleidoscopio@gmail.com"><i class="material-icons mr-1">mail_outline</i> libreriacaleidoscopio@gmail.com </a>
      </nav>

      <nav class="nav nav-circle d-none d-sm-flex">
        <a class="nav-link nav-link-sm nav-icon p-0" href="https://www.facebook.com/caleidoscopiolibreriaoficial"><i class="custom-icon" data-icon="facebook" data-size="17x17"></i></a>        
        <a class="nav-link nav-link-sm nav-icon p-0" href="https://www.instagram.com/caleidoscopiolibreriaoficial/"><i class="custom-icon" data-icon="instagram" data-size="17x17"></i></a>
      </nav>
      
      
      <nav class="nav nav-gap-x-1 ml-auto mr-1">
        <div class="nav-item nav-pills dropdown">
        </div>
        <div class="nav-item nav-pills dropdown">
        </div>
      </nav>      
     <a href="https://api.whatsapp.com/send?phone=529516503271&text=Hola%20lo%20contacto%20desde%20su%20sitio%20Web%20Quisiera%20más%20información">
      <button type="button"  class="btn btn-faded-primary has-icon btn-sm">
        <i class="fa fa-whatsapp"></i> &nbsp; WhatsApp
      </button>
     </a>
     
    </div>
  </div>
  <!-- /TOP BAR -->

  <!-- HEADER -->
  <header>
    <div class="container-fluid">
      <nav class="nav nav-circle d-flex d-lg-none">
        <a href="#menuModal" data-toggle="modal" class="nav-link nav-icon"><i class="material-icons">menu</i></a>
      </nav>
      <nav class="nav ml-3 ml-lg-0">
        <a href="index.html" class="nav-link has-icon p-0 bg-white">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" height="40">
        </a>
      </nav>

      <nav class="nav nav-main nav-gap-x-1 nav-pills ml-3 d-none d-lg-flex">
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret forwardable active" href="index.html" id="homeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Inicio
          </a>
        </div>
		
        <div class="nav-item dropdown dropdown-hover dropdown-mega">
          <a class="nav-link dropdown-toggle no-caret" href="#" id="megaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Anuncio
          </a>
          <div class="dropdown-menu" aria-labelledby="megaDropdown">
            <div class="row">
              <div class="col-lg-3">
                <div class="list-group list-group-flush list-group-no-border list-group-sm">
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong> CALEIDOSCOPIO </strong></a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"> Solicita personal </a>
                    <a> ¡UNETE AL EQUIPO! </a>
                    <a> ¡envia tu currículum!</a>
                    <a>&nbsp;</a>
                    <a>libreriacaleidoscopio@gmail.com</a>
                    <a>&nbsp;</a>
                    <a>&nbsp;</a>
                    <a>&nbsp;</a>
                    <a>&nbsp;</a>                
                </div>
              </div>

              <div class="col-lg-3 border-left">
                <div class="img img-zoom-in w-100 h-100">
                  <div data-cover="{{ asset('img/categories/solicitud.jpg') }}"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show flex-column text-white">
                    <h4 class="card-title text-center"> Anuncio </h4>
                    <h6>más información</h6>
                    <a href="shop-grid.html" class="btn btn-primary rounded-pill"> contactanos</a>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
        
        <a class="nav-item nav-link" href="components.html">
          Contacto
        </a>
      </nav>
	  
      <nav class="nav nav-circle nav-gap-x-1 ml-auto">
        <a class="nav-link nav-icon" data-toggle="modal" href="#searchModal">
          <i class="material-icons">search</i>
        </a>		
      </nav>

    </div>
  </header>
  <!-- /HEADER -->

  
 @yield('content-area')

  <!-- FOOTER -->

    <div class="footer">
      <div class="container-fluid">
        <div class="d-grid grid-template-col-sm-2 grid-template-col-lg-4">
          <div class="px-3 text-center">
  
              <img src="{{ asset('img/logo.png') }}" class="">
            
          </div>
          <div>
            <h5> Servicio al cliente</h5>
            <div class="list-group list-group-flush list-group-no-border list-group-sm">
              <a href="javascript:void(0)" class="list-group-item list-group-item-action">Enviar whatsApp</a>
              <a href="javascript:void(0)" class="list-group-item list-group-item-action">Enviar correo</a>
              <a href="faq.html" class="list-group-item list-group-item-action">Preguntas</a>
            </div>
          </div>
          <div>
            <h5>Paginas</h5>
            <div class="list-group list-group-flush list-group-no-border list-group-sm">
              <a href="about.html" class="list-group-item list-group-item-action"> Conocenos </a>
              <a href="javascript:void(0)" class="list-group-item list-group-item-action"> Contacto</a>
              <a href="javascript:void(0)" class="list-group-item list-group-item-action">Facturación</a>
             
  
            </div>
          </div>
          <div>
            <h5> Facturación </h5>
  
            <a href="javascript:void(0)" class="download-app">
              <div class="media">
                <img src="{{ asset('img/app/windows.svg') }}" alt="facturacion" height="30">
                <div class="media-body">
                  <small> Genera tu </small>
                  <h5>  factura en línea</h5>
                </div>
              </div>
            </a>          
  
          </div>
        </div>
      </div>
    </div>
  

  <div class="copyright">Caleidoscopio Libreria Oaxaca Centro, Mexico, 68000 <br> Lunes a Domingo de 10 am a 8 pm</div>
  <!-- /FOOTER -->


  <!-- MENU MODAL -->
  <div class="modal fade modal-content-left" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header align-items-center border-bottom shadow-sm z-index-1">
          <a href="#"><img src="{{ asset('img/logo.png') }}" alt="Logo" height="40"></a>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body px-0 scrollbar-width-thin">
          <ul class="menu" id="menu">
            <li class="no-sub"><a href="index.html"><i class="material-icons">home</i> Home</a></li>
            <li class="no-sub mm-active"><a href="index2.html"><i class="material-icons">home_work</i> Home layout 2</a></li>
            <li class="no-sub"><a href="index3.html"><i class="material-icons">phonelink</i> Electronics Store</a></li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">shopping_cart</i> Shop</a>
              <ul>
                <li><a href="shop-categories.html">Shop Categories</a></li>
                <li><a href="shop-grid.html">Shop Grid</a></li>
                <li><a href="shop-list.html">Shop List</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li>
                  <a href="#" class="has-arrow">Checkout</a>
                  <ul>
                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                    <li><a href="checkout-payment.html">Checkout Payment</a></li>
                    <li><a href="checkout-review.html">Checkout Review</a></li>
                    <li><a href="checkout-complete.html">Checkout Complete</a></li>
                  </ul>
                </li>
                <li><a href="shop-single.html">Single Product</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">person</i> Account</a>
              <ul>
                <li><a href="account-signin.html">Sign In / Sign Up</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-order-detail.html">Order Detail</a></li>
                <li><a href="account-wishlist.html" class="has-badge">Wishlist <span class="badge badge-primary badge-pill">3</span></a></li>
                <li><a href="account-address.html">Address</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">rss_feed</i> Blog</a>
              <ul>
                <li><a href="blog-grid.html">Post Grid</a></li>
                <li><a href="blog-list.html">Post List</a></li>
                <li><a href="blog-single.html">Single Post</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">file_copy</i> Pages</a>
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="compare.html">Compare</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="404.html">404 Not Found</a></li>
              </ul>
            </li>
            <li class="no-sub"><a href="components.html"><i class="material-icons">check_box_outline_blank</i> Components</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /MENU MODAL -->

  <!-- SEARCH MODAL -->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-1 p-lg-3">
          <form>
            <div class="input-group input-group-lg input-group-search">
              <div class="input-group-prepend">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="button" data-dismiss="modal">
                  <i class="material-icons">chevron_left</i>
                </button>
              </div>
              <input type="search" class="form-control form-control-lg border-0 shadow-none mx-1 px-0 px-lg-3" id="searchInput" placeholder="Search..." required>
              <div class="input-group-append">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="submit">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /SEARCH MODAL -->

  <!-- Main script -->
  <script src="{{ asset('js/script.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('plugins/swiper/swiper.min.js') }}"></script>

  @yield('scripts')  


  <!-- Application script -->
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script>
    $(() => {

      // App.atcDemo() // Add to Cart Demo
      // App.atwDemo() // Add to Wishlist Demo
      App.homeSlider('#homeSlider')
      App.dealSlider2('#dealSlider2')
      App.brandSlider('#brandSlider')
      App.colorOption()
        /*
        // example countdown, 6 hours from now for flash deals
        var countdown = new Date()
        countdown.setHours(countdown.getHours() + 6)
        $('#flash-deals-countdown').countdown(countdown, function (e) {
        $(this).text(e.strftime('%H:%M:%S'))
        })
        */
    })
  </script>

</body>

</html>
