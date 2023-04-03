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

    <header>
        <!-- Header Start -->
        <div class="row">
            <div class="col-12">
                <img  class="img-fluid " src="{{asset('iuls143a.png')}}" style="height: 35vh;
                width:100%;"   alt="Responsive image"/>
            </div>
        </div>
        <div class="header-area">
            <div class="main-header">
                <div class="container-fluid">

                    <div class="row mt-2">
                        <div class="col-6 offset-3">
                            <form action=" " method="get">
                                @csrf
                                <div class="d-flex ">
                                   <input type="text" name="key" class="form-control" placeholder="Search..." value="{{ request('key')}}">
                                   <select name="orderStatus" class="custom-select"  id="findStatus" col-5>
                                    <option value="">Category</option>
                                    @foreach ($categories as $c )
                                    <option value="{{ $c->id}}">{{ $c->category}}</option>

                                    @endforeach
                                </select>
                                <button class="btn-sm bg-dark text-white" type="submit">
                                    Search
                                </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




                    <div class="container">
                        <div class="row mt-3">
                            <div class="col-12">
                                <h4>
                                    What are you looking for?
                                </h4>
                            </div>
                        </div>

                        <div class="row align-items-center my-3 mx-2">
                            <div class="col-2">
                               <a href="">
                                <div class="card  bg-light border-info ">
                                    <div class="card-body   text-center">
                                        <i class="fa-solid fa-computer" style="color: #2a6ee5; "></i><br>
                                        <span  class="text-dark">Computer</span>
                                    </div>
                                   </div>
                               </a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                    <div class="card mx-2 bg-light border-info">
                                        <div class="card-body  text-center">
                                            <i class="fa-solid fa-mobile-screen-button" style="color: #3e81f4;" style="color: #3e81f4;"></i><br>
                                            <span  class="text-dark">Phone</span>
                                        </div>
                                       </div>
                                   </a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                <div class="card mx-2 bg-light border-info">
                                    <div class="card-body  text-center">
                                        <i class="fa-solid fa-house " style="color: #3e81f4;"></i><br>
                                        <span  class="text-dark">Property</span>
                                    </div>
                                   </div>
                               </a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                <div class="card mx-2 bg-light border-info">
                                    <div class="card-body  text-center">
                                        <i class="fa-solid fa-music " style="color: #3e81f4;"></i><br>
                                        <span  class="text-dark">Music</span>
                                    </div>
                                   </div>
                               </a>
                            </div>
                            <div class="col-2">
                                <a href="{{route('user#fashion')}}">
                                <div class="card mx-2 bg-light border-info">
                                    <div class="card-body  text-center">
                                        <i class="fa-solid fa-shirt " style="color: #3e81f4;"></i><br>
                                        <span  class="text-dark">Fashion</span>
                                    </div>
                                   </div>
                               </a>
                            </div>
                            <div class="col-2">
                                <a href="">
                                <div class="card mx-2 bg-light border-info">
                                    <div class="card-body  text-center">
                                        <i class="fa-solid fa-screwdriver-wrench " style="color: #3e81f4;"></i><br>
                                        <span  class="text-dark">Service</span>
                                    </div>
                                   </div>
                               </a>
                            </div>
                    </div>
                </div>

        </div>
        <!-- Header End -->
    </header>

    <main>
        <!--  Recent Articles start -->
        <div class="recent-articles">
            <div class="container">
                <div class="recent-wrapper">
                    <!-- section Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle mb-30">
                                <h3 class="text-dark">Recent Items</h3>
                            </div>
                        </div>
                    </div>
                   <div class="row" id="dataList">
                    @foreach ($item as $i)
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-1 shadow-sm " >
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
</body>

</html>
<script>

$(document).ready(function(){
 $('#findStatus').change(function(){
    $status = $('#findStatus').val();
    console.log($status);
    $.ajax({
                    type : 'get' ,
                    url : '/user/ajax/status' ,
                    data : $status ,
                    dataType : 'json' ,
                    success :function(response){
                        console.log(response);
                    }

                })

                // window.location.href = "/order/list";

 })
})

</script>

