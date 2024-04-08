@extends('layouts.app')
@section('headItem')
<title>Holoshop</title>

<style>
  body{
   min-width: 768px;
   min-height: 728px;
  }
</style>
@endsection
@section('content')

<!-- userView -->
<!-- ======= Intro Single ======= -->

<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Products</h1>
              <span class="color-text-a">Grid Properties</span> <!-- current category -->
            </div>
          </div>
        
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('index.auth')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li> <!-- current category -->
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= product ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
             <!-- ======= session flash ======= -->
          <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
          </div>
                 <!-- ======= End of session flash ======= -->
          </div> 
   @foreach($products as $product)
          <div class="col-md-4" >
            <div class="card-box-a card-shadow rounded">
              <div class="img-box-a">
                <img src="{{URL('storage/image/online-shopping.jpg')}}" alt="{{ $product->product_name}}" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h4 class="card-title-a">
                      <a id="product_name">{{$product->product_name}}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a" id="product_price">{{$product->price}}</span>
                    </div>
                    <a href="{{route('productsingle', [ 'id' => $product->id])}}" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a bg-success mb-0">
                    <div class=" text-center  justifycontent-center" data-id= "{{Auth::user()->id}},{{$product->product_name}},{{$product->price}},{{$product->id}},1">
                        <button class="btn btn-success font-sans" id="addToCart">
                           Add to cart </button>
                    </div>
                    <form id="addCart" action="{{ route('cartproduct',['productid' => $product->id]) }}" method="POST" class="d-none">
                      @csrf
                          <input name="product" value="{{$product->id}}" readonly style="visibility:hidden">
                          <input name="product" value="{{$product->id}}" readonly style="visibility:hidden">
                          <input name='quantity' value="1" readonly style="visibility:hidden">
                          <input name="user" value="{{Auth::user()->id}}"  readonly style="visibility:hidden" >        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    @endforeach    
        </div>
       
        <div class="row">
         
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                
                <!-- ===== pagination section ====== -->  
            @if ($products->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                 <a class="page-link"  tabindex="-1">
                     <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
            @else
                <li>
                    <a href="{{ $products->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="page-link" >
                      <span class="bi bi-chevron-left"></span>
                    </a>
                </li>
            @endif

                @for( $page=1; $page<=$products->lastPage(); $page++)
                
                @if ($page === $products->currentPage())

                  <li class="active page-item" aria-current="page">
                    <span class="page-link" >{{ $page }}</span>
                  </li>

                @elseif($page === 1)

                <li class="page-item">
                    <a class="page-link" href="{{$products->path()}}">{{$page}}</a>
                  </li>

                @else

                  <li class="page-item">
                    <a class="page-link" href="{{$products->path()}}?page={{$page}}">{{$page}}</a>
                  </li>

                @endif

                @endfor

                   {{-- Next Page Link --}}
                @if ($products->hasMorePages())

                <li class="page-item next">
                    <a href="{{ $products->nextPageUrl() }}" rel="next"  class="page-link" aria-label="@lang('pagination.next')">
                     <span class="bi bi-chevron-right"></span>
                    </a>
                </li>

            @else

                <li class="disabled page-item next" aria-disabled="true" aria-label="@lang('pagination.next')">
                  <a class="page-link" >
                    <span class="bi bi-chevron-right" aria-hidden="true"></span>
                  </a>
                </li>

            @endif
  
              </ul>

              <div class="text-end">
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    @if ($products->firstItem())
                        <span class="font-medium">{{ $products->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $products->lastItem() }}</span>
                    @else
                        {{ $products->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $products->total() }}</span>
                    {!! __('results') !!}
                </p>
              </div>
              <!-- ====== end of pagination section ====== -->
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Product-->
    
     
<!-- userView -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
@endsection