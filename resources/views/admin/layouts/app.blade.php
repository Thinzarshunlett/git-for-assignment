<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PS_Assignment</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{  asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="hold-transition sidebar-mini ">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
    <ul class="navbar-nav  ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <div >
        <img class="rounded-circle " src="{{asset('itemPhoto/default.png')}}" style="width:40px;" alt="">
      </div> --}}
    </ul>
  </nav>
  <aside class="main-sidebar bg-light sidebar-light-primary elevation-4">
    <a href="#" class="brand-link">

      <h1 class="brand-text text-center font-weight ">Admin Panel </h1>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



          <li class="nav-item text-white">
            <a href="{{ route('admin#item')}}" class="nav-link">
                <i class="fa-solid fa-table-cells-large" ></i>
              <p class="">
                Item
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin#category')}}" class="nav-link">
              <i class="fas fa-list ms-5"></i>
              <p>
                Category
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <form action="{{ route('logout')}}" method="post">

             @csrf
                 <button type="submit" class="btn">
                     <i class="fas fa-sign-out-alt"></i>Logout
                 </button>


            </form>
           </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper bg-white">
    <section class="content">
      <div class="container-fluid">

         @yield('content')

      </div>
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('dist/js/demo.js')}}"></script>
<script src="https://www.jqueryscript.net/demo/leaflet-location-picker/"></script>
</body>
@yield('scriptSource')
</html>

