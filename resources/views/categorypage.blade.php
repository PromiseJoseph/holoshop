@extends('layouts.app')
@section('headItem')
<title>Holoshop</title>
@endsection
@section('content')
<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $setCategory }}</h1>
              <span class="color-text-a"></span> <!-- current Category -->
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('index.auth')}}">Category</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  {{$setCategory}}
                </li> <!-- current Category -->
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

     <!-- ======= Product  ======= -->
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

    @foreach($categoryItems as $categoryItem)
          <div class="col-md-4">
            <div class="card-box-a card-shadow rounded">
              <div class="img-box-a">
                <img src="{{URL('storage/image/online-shopping.jpg')}}" alt="{{ $categoryItem->product_name}}" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h4 class="card-title-a">
                      <a href="#">{{$categoryItem->product_name}}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{$categoryItem->price}}</span>
                    </div>
                    <a href="{{route('productsingle', [ 'id' => $categoryItem->id])}}" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a bg-success mb-0">
                    <div class=" text-center  justifycontent-center">
                        <button class="btn btn-success font-sans">Add to cart </button>
                    </div>
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
          @if($categoryItems->total() > 15)
            @if ($categoryItems->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                 <a class="page-link"  tabindex="-1">
                     <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
            @else
                <li>
                    <a href="{{ $categoryItems->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="page-link" >
                      <span class="bi bi-chevron-left"></span>
                    </a>
                </li>
            @endif
            @endif

                @for( $page=1; $page<=$categoryItems->lastPage(); $page++)
                
                @if ($page === $categoryItems->currentPage())

                  <li class="active page-item" aria-current="page">
                    <span class="page-link" >{{ $page }}</span>
                  </li>

                @elseif($page === 1)

                <li class="page-item">
                    <a class="page-link" href="{{$categoryItems->path()}}">{{$page}}</a>
                  </li>

                @else

                  <li class="page-item">
                    <a class="page-link" href="{{$categoryItems->path()}}?page={{$page}}">{{$page}}</a>
                  </li>

                @endif

                @endfor
        

                   {{-- Next Page Link --}}
               @if($categoryItems->total() > 15)
                @if ($categoryItems->hasMorePages())

                <li class="page-item next">
                    <a href="{{ $categoryItems->nextPageUrl() }}" rel="next"  class="page-link" aria-label="@lang('pagination.next')">
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
          @endif
  
              </ul>

              <div class="text-end">
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    @if ($categoryItems->firstItem())
                        <span class="font-medium">{{ $categoryItems->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $categoryItems->lastItem() }}</span>
                    @else
                        {{ $categoryItems->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $categoryItems->total() }}</span>
                    {!! __('results') !!}
                </p>
              </div>
              <!-- ====== end of pagination section ====== -->
            </nav>
          </div>
        </div>
    </section><!-- End Product -->
    </div>
@endsection