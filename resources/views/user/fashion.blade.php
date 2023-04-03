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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{  asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">

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

    <div class="wrapper">

        <aside class="main-sidebar sidebar-light-primary elevation-6">
            <div class=" row bg-light">
                <div class="col-6 ">
                    <a href="{{route('user#home')}}" class="text-dark float-right">
                        Home
                    </a>

                </div>
                <div class="col-6">
                    <i class="fa fa-arrow-alt-circle-right "></i>
                    <a href="#">
                        Fashion
                    </a>
                </div>
            </div>

          <div class="sidebar">
            <nav class="mt-2">
              <div class="container">
                <div class="row my-3">
                    <div class="col-6">Filter By</div>
                    <div class="col-6 text-danger">Clear Filter</div>
                </div>
                <label for="">Sorting</label>
                <div class="row my-3">

                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Latest
                            </label>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Popular
                            </label>
                          </div>
                    </div>
                </div>
                <div class="row my-3">
                    <label for="">Item Name</label>
                    <input type="text" class="form-control" placeholder="Input Name">
                </div>
                <label for="">Price Range</label>
                <div class="row my-3">

                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Min">
                    </div>
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Max">
                    </div>
                </div>
                <div class="row my-3">
                    <label for="">Category</label>

                        <select class="form-control statusChange">
                         <option value="">Choose your category</option>
                         @foreach ($categories as $c )
                             <option value="{{ $c->id}}">{{ $c->category}}</option>
                            @endforeach
                        </select>


                </div>
                <div class="row my-3">
                    <label for="">Item Condition</label>
                    <select class="form-control statusChange">
                        <option value="">Choose one</option>
                            <option value="0" @if (request('itemCon') =='0') selected @endif>New with Tag</option>
                            <option value="1"  @if (request('itemCon') =='1') selected @endif>Excellent Uesd Condition</option>
                            <option value="2"  @if (request('itemCon') =='2') selected @endif>Good Used Condition</option>
                            <option value="2"  @if (request('itemCon') =='3') selected @endif>Very Used Condition</option>



                       </select>

                </div>
                <div class="row my-3">
                    <label for="">Type</label>
                    <select class="form-control statusChange">
                        <option value="">Choose one</option>
                        <option value="0" @if (request('itemType') =='0') selected @endif>For Sell</option>
                                    <option value="1"  @if (request('itemType') =='1') selected @endif>For Buy</option>
                                    <option value="2"  @if (request('itemType') =='2') selected @endif>For Exchange</option>
                       </select>
                            {{-- @endforeach --}}
                </div>
                <div class="row my-3 ">
                    <button class="btn btn-primary">Apply Filter</button>
                </div>
              </div>
            </nav>
          </div>
        </aside>

        <div class="content-wrapper bg-white">
          <section class="content">
            <div class="container-fluid">

                <main>
                    <!--  Recent Articles start -->
                    <div class="recent-articles">
                        <div class="container">
                            <div class="recent-wrapper">
                                <!-- section Tittle -->

                               <div class="row mt-2" id="dataList">
                                @foreach ($item as $i)
                                <div class="col-3  py-1 mt-5" >

                                    <a href="{{route('user#viewPage',$i->id)}}">
                            <div class="card shadow-sm rounded-top">

                                    <div class="product-item bg-light mb-4 " id="myForm" >
                                        <div class="product-img position-relative overflow-hidden " >
                                            <img class="img-fluid w-100 rounded-top" src="{{asset('itemPhoto/'.$i['item_photo'])}}" alt=""  style="height: 250px ">
                                        </div>
                                        <div class="text-center py-4">
                                            <a class="h6 text-decoration-none text-truncate" href=""></a>
                                            <h4>{{ $i->item_name}}</h4>
                                            <div class="d-flex align-items-center justify-content-center mt-2">

                                                <h5>{{ $i->price}}</h5>

                                            </div>
                                            <div class="d-flex text-center ">

                                                    <img src="{{asset('itemPhoto/default.png')}}" alt="" style="height: 40px ">
                                                <p>{{ $i->ownerName}}</p>


                                            </div>

                                        </div>
                                    </div>

                            </div>
                        </a>
                                </div>

                                @endforeach
                               </div>
                            </div>
                        </div>
                    </div>
                    <!--Recent Articles End -->

                </main>


            </div>
          </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
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
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('dist/js/demo.js')}}"></script>
<script src="https://www.jqueryscript.net/demo/leaflet-location-picker/"></script>
</body>

</html>
