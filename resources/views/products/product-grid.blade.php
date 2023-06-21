@extends('layouts.main-layout')
@section('page-title', 'Categorias listado')

@section('styles')
    <link rel="stylesheet" href="{{ asset('plugins/nouislider/nouislider.min.css') }}">
@endsection

@section ('content-area')

<div class="breadcrumb-container">
  <div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="#">{{ $genre }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $category }}</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container-fluid mb-3">

  <div class="row gutters-3">
    <div class="col-md-4 col-lg-3">
      <!-- FILTER MODAL -->
      <div class="modal fade modal-content-left modal-shown-static" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document" style="max-width:300px">
          <div class="modal-content">
            <div class="modal-header border-bottom shadow-sm z-index-1">
              <h5 class="modal-title" id="filterModalLabel">Shop Filters</h5>
              <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                <i class="material-icons">close</i>
              </button>
            </div>
      
            <div class="modal-body p-0 scrollbar-width-thin">
      
              <div class="accordion accordion-caret" id="accordionSidebar">				
        
                <div class="card card-style1 border-top">
                  
        <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-brands" aria-expanded="true">
                    GENEROS
                  </a>
        
                  <div id="filter-brands" class="collapse show">
                    <div class="card-body pt-0">
          
                      <span class="input-icon">
                        <i class="material-icons">search</i>
                        <input type="search" class="form-control" id="searchBrand" placeholder="Search brand...">
                      </span>
          @foreach ($genders as $row)  
                      <div id="brandList" class="mt-3 overflow-auto scrollbar-width-thin bg-lights px-1">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="brand-tommy-hilfiger">
                          <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-tommy-hilfiger"> {{ $row->genre }} <small class="text-muted">{{ $row->count }} </small></label>
                        </div>                                           
                      </div>
          @endforeach
          </div>
                  </div>
        
                </div>
                
        <div class="card card-style1 border-top">
                  <div class="card-header no-caret px-5 py-2 text-center bg-white">
                    <button class="btn btn-primary rounded-pill btn-sm btn-block" data-dismiss="modal">APPLY</button>
                  </div>
                </div>
        
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /FILTER MODAL -->		
    </div>
  
    <div class="col-md-8 col-lg-9">
  
      <div class="card card-style1">
        <div class="card-body pb-0 d-block d-md-none">
          <button type="button" data-toggle="modal" data-target="#filterModal" class="btn btn-faded-primary btn-sm has-icon">
            <i class="material-icons mr-2">filter_list</i> Filter
          </button>
        </div>
        <div class="card-body d-flex align-items-center py-2">
          Sort by :
          <select class="custom-select custom-select-sm w-auto ml-1 mr-auto">
            <option>Popularity</option>
            <option>Low - High Price</option>
            <option>High - Low Price</option>
            <option>Average Rating</option>
            <option>A - Z Order</option>
            <option>Z - A Order</option>
          </select>
          <a href="shop-grid.html" data-toggle="tooltip" title="Show Grid" class="btn btn-sm btn-text-primary btn-icon rounded-circle active"><i class="material-icons">apps</i></a>
          <a href="shop-list.html" data-toggle="tooltip" title="Show List" class="btn btn-sm btn-text-primary btn-icon rounded-circle ml-1"><i class="material-icons">list</i></a>
        </div>
      </div>
  
      <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-template-col-xl-4 grid-gap-1 grid-gap-sm-3 mt-3">
        
        @foreach ($products as $row)
        <div class="card card-product card-style1">
          <div class="card-body">
            &nbsp;
            <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
            <a href="{{ route('products.single', ['id' => $row->id]) }}"> <img class="card-img-top" src="{{ asset('img/products/'.$row->isbn.'.jpg') }}" alt="Card image cap"></a>
            <a href="{{ route('products.single', ['id' => $row->id]) }}" class="card-title card-link"> {{ $row->title }}</a>
            &nbsp; 
            <div class="price"><span class="h5">${{ $row->price }}</span></div>
          </div>
          <div class="card-footer">
            &nbsp;
          </div>
        </div>        
        @endforeach

      </div>

      <div class="card card-style1 mt-3">
        <div class="card-body">
          <ul class="pagination pagination-circle justify-content-center mb-0">
    
              {{ $products->links() }}            
         
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@section('scripts')
  <!-- Plugins -->
  <script src="{{ asset('plugins/nouislider/nouislider.min.js') }}"></script>

  <script>
    $(() => {

      // App.atcDemo() // Add to Cart Demo
      // App.atwDemo() // Add to Wishlist Demo
      App.quickviewDemo() // Quick view demo
      App.colorOption()
      App.rating()

      // Filter brand
      document.getElementById('brandList').style.maxHeight = '250px'
      document.getElementById('searchBrand').addEventListener('keyup', function () {
        let value = this.value.toLowerCase()
        $('#brandList .custom-control').filter(function () {
          $(this).toggle($(this).find('label').contents().not($(this).find('label').children()).text().toLowerCase().indexOf(value) > -1)
        })
      })

      // Remove static modal for small devices
      App.resize(() => {
        if (App.smDown()) {
          document.getElementById('filterModal').classList.remove('modal-shown-static')
        } else {
          document.getElementById('filterModal').classList.add('modal-shown-static')
          $('#filterModal').modal('hide')
        }
      })()
      // Make scrollable modal-dialog
      $('#filterModal').on('show.bs.modal', function () {
        $(this).find('.modal-dialog').addClass('modal-dialog-scrollable')
      }).on('hidden.bs.modal', function () {
        $(this).find('.modal-dialog').removeClass('modal-dialog-scrollable')
      })

    })
  </script>

@endsection