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
            <div id="product_api"></div>
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
    