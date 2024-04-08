@extends('layouts.app')
@section('headLink')
@endsection
@section('content')


@section('headswiper')
<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">

  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(storage/image/shopping1.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Tips, For
                  <br> You
                </p>
                <h1 class="intro-title mb-4 ">
                  <span class="color-c">Always </span> Available
                  <br> For All Your Purchases
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="{{route('login')}}" style="list-style-type: none;"><span class="price-a">CheckIN Now </span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(storage/image/online-shopping.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Tips, For
                  <br> You
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-c">Easy</span> Look Up
                  <br> Online 
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="{{route('login')}}" style="list-style-type: none;"><span class="price-a">CheckIN Now</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(storage/image/payOnline-iphone.jpg)">
    <div class="overlay overlay-a"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="intro-body">
                <p class="intro-title-top">Tips, For 
                  <br> You
                </p>
                <h1 class="intro-title mb-4">
                  <span class="color-c">Easy & Reliable </span> Payment
                  <br> 247
                </h1>
                <p class="intro-subtitle intro-price">
                  <a href="{{route('login')}}" style="list-style-type: none;"><span class="price-a">checkIN Now</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->
@endsection
<!-- ======= Services Section ======= -->
<section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cart"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Shop</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-truck"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Delivery</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cash-coin"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Pay</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
              <div class="card-footer-c">
                <a href="#" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

	<!-- ======= Latest News Section ======= -->
  <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest News</h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.html">All News
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper" id="guestSec">

            
          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section>
    <!-- End Latest News Section -->

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
                <img src="{{URL('storage/image/online-shopping.jpg')}}" alt="{{ $product->product_name}}" class="img-a img-fluid" >
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
                    @auth
                    <div class=" text-center  justifycontent-center"  data-id= "{{Auth::user->id}},{{$product->product_name}},{{$product->price}},{{$product->id}},1">
                        <button class="btn btn-success font-sans" id="addToCart">Add to cart </button>
                    </div>
                    @endauth
                    <div class=" text-center  justifycontent-center" data-id = "null,{{$product->product_name}},{{$product->price}},{{$product->id}},1">
                        <button class="btn btn-success font-sans" id="addToCart" >
                        Add to cart </button>
                    </div>
                    <form id="addCart" action="{{ route('cartproduct',['productid' => $product->id]) }}" method="POST" class="d-none">
                      @csrf
                          
                          <input name='user' value="1" readonly style="visibility:hidden">
                                        
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
    
<script  src="{{URL('storage/js/shop.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

@endsection
