<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>User Home Page</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ticker-style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <style>
        .carousel-item {
  height: 50vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    </style>

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

   <div class="container-fluid">
    <div class="my-4 bg-light col-2 rounded">
        <a href="{{route('user#home')}}" class="text-dark "> Home</a>
        <i class="fa fa-arrow-alt-circle-right " ></i>
        <a href="{{route('user#fashion')}}" class="text-dark">Fashion</a>
        <i class="fa fa-arrow-alt-circle-right " ></i>
        <a href="#" class="text-primary">{{ $item->item_name}}</a>
    </div>

    <!-- Navigation -->


  <header>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active text-center" >
            <img class="" src="{{asset('itemPhoto/'.$item['item_photo'])}}" style="width:50%;" alt="">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="carousel-item text-center" >
            <img src="{{asset('itemPhoto/default.png')}}" alt="" style="width:50%;">
          <div class="carousel-caption">

          </div>
        </div>
        <div class="carousel-item text-center" >
            <img src="{{asset('iuls143a.png')}}" alt=""  style="width:50%;">
          <div class="carousel-caption">

          </div>
        </div>
      </div>

    </div>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-6">
            <div class="container">
                <h4>{{ $item->item_name}}</h4>
                <p class="text-primary mt-2 ">{{ $item->price}}</p>
                <div class="row">
                    <div class="col-2 ">
                        <label for="">Type</label>
                        <p class="bg-danger rounded text-center text-dark" >{{ $item->item_con}}</p>
                    </div>
                    <div class="col-2 ">
                        <label for="">Condition</label>
                        <p class="bg-primary  rounded text-center text-dark">{{ $item->item_type}}</p>
                    </div>
                    <div class="col-2 ">
                        <label for="">Status</label>
                        <p class="bg-warning  rounded text-center text-dark">{{ $item->status}}</p>
                    </div>
                </div>
                <div class="">
                    <h5>Hight Information</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quo delectus iusto, maxime cupiditate quam aperiam, nam veritatis aliquid tempora enim autem esse, consectetur placeat odio amet dolore quas quidem?</p>
                </div>
                <div class="">
                    <h5>Product Description</h5>
                    <p>{{ $item->description}}</p>
                </div>

            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <div class="">
                    <h5>Owner Information</h5>
                    <div class="card">
                        <div class="card-body">
                           <div class="">
                            <i class="fa fa-phone"></i>   Contact Number
                           </div>
                            {{ $item->contNo}}
                        </div>

                    </div>
                    <div class="card bg-light mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('itemPhoto/default.png')}}" style="width: 70%" alt="">
                                </div>
                                <div class="col-4">
                                    {{ $item->ownerName}}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <h5><i class="fa-solid fa-location-dot"></i>  Location</h5>
                        {{ $item->address}}
                    </div>

                    </div>


                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

   </div>



    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('assets/js/gijgo.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{asset('assets/js/jquery.ticker.js')}}"></script>
    <script src="{{asset('assets/js/site.js')}}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{asset('assets/s/jquery.scrollUp.min.js')}}j"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('assets/js/contact.js')}}"></script>
    <script src="{{asset('assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/mail-script.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
