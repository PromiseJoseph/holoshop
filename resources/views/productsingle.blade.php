@extends('layouts.app')
@section('headItem')
<title>Holoshop</title>
@endsection
@section('content')

 <!-- ======= Intro Single ======= -->
 <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$productsingle->product_name}}</h1>
              <span class="color-text-a">Chicago, IL 606543</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="property-grid.html">Product</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                {{$productsingle->product_name}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    
    <!-- ======= Product Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="{{URL('storage/image/online-shopping.jpg')}}" alt="" class="single_image">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{URL('storage/image/online-shopping.jpg')}}" alt="" class="single_image">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">$</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">{{$productsingle->price}}</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Current Status</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Quantity added:</strong>
                        <span id="cart_quantity" class=""><b> 1</b></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span class=""><strong>Instock</strong></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Product Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                       {{$productsingle->description}}
                  </p>
                  <p class="description color-text-a no-margin">
                       {{$productsingle->additional}}
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Add Item</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <div class="d-flex fs-5 text-center m-auto">
                    <div class="flex-item ">
                      <div class="flex mt-4">
                          <button class="flex-item fs-4 p-3 btn btn-outline-primary " id="inc_cart_qty"> + </button>
                          Qty 
                          <button class="flex-item fs-4 p-3  btn btn-outline-primary" id="dec_cart_qty"> - </button>
                          <strong id="cart_quantity" style="margin-left:7rem; border:1px solid black; padding:20px; border-radius:4px;"class="bg-outline-secondary"> 1 </strong>                      
                      </div>
                          <a href="#" class="btn btn-outline-success family-sans fs-5 mt-3">Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Ubication</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              </div>
              <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                <img src="assets/img/plan2.jpg" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="assets/img/agent-4.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">Anabella Geller</h4>
                  <p class="color-text-a">
                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                    dui. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim.
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone:</strong>
                      <span class="color-text-a">(222) 4568932</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Mobile:</strong>
                      <span class="color-text-a">777 287 378 737</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">annabella@example.com</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Skype:</strong>
                      <span class="color-text-a">Annabela.ge</span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <div class="property-contact">
                  <form class="form-a">
                    <div class="row">
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-1">
                        <div class="form-group">
                          <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-a">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Product Single-->
    <script  src="{{URL('storage/js/cart_qty.js')}}"></script>


@endsection
