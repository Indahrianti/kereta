<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pemesanan Tiket Kereta Api</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('frontend/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
      <!-- <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}"> -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('frontend/images/th.jpg')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">                              
                                    @auth
                                        <li class="active"> <a href="#">Home</a> </li>
                                    @else
                                        <li class="active"> <a href="{{url('login')}}">Login</a></li>
                                        <li class="active"> <a href="{{url('login')}}">Register</a></li>
                                    @endauth
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div class="banner-main">
            <img src="{{asset('frontend/images/kereta.jpg')}}" alt="#" style="width: 100%" style=" height:100%"/>
            <div class="container">
               <div class="text-bg">
                  <h1>Pemesanan<br><strong class="red">Tiket Kereta Api</strong></h1>
                  <div class="container">

                  <form Action="{{ route('penumpang.store')}}" method="POST">
                    @csrf
                        <div class="row">
                           <div class="col-md-9">
                                <div class="row">

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <label>Detail Pesan</label>
                                        <select name="id_pesan" class="form-control">
                                        @foreach ($pesan as $data)
                                            <option value="{{$data->id }}">{{$data->keretas->nama_KA}} - {{$data->keretas->asal}}
                                             - {{$data->keretas->tujuan}} - Rp.{{$data->keretas->harga}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <label>Nama Penumpang</label>
                                        <input  type="text" name="nm_penumpang" class="form-control" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <label>No Telepon</label>
                                        <input type="text" class="form-control" name="no_telp" min="12" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                        <label>No ktp</label>
                                        <input type="text" class="form-control" name="no_ktp" required>
                                    </div>
                                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                       <button type="reset" class="btn btn-warning">Reset</button>
                                       <button type="submit" class="btn btn-primary">Tambah</button>
                                   </div>
                                   </div>
                                   </div>
                                   </div>
                                </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  
               </div>
            </div>
         </div>
         
            
         </div>
      </div>
      <!-- end about -->
      <!-- traveling -->
     
      <!-- end traveling -->
      <!--London -->
      <div class="London">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  
               </div>
            </div>
         </div>
         
      </div>
      <!-- end London -->
      <!--Tours -->
     
      <!-- end Amazing -->
      <!-- our blog -->
      <!-- end our blog -->
      <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2022 All Right Reserved By Indah Rianti</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('frontend/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('frontend/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
     
   </body>
</html>