@extends('fn.layouts.app') @section('head-meta')

<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- CSS Files -->
<link href="{{ asset('/frontend/assets/css/material-kit.css?v=2.0.5')}}" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('/frontend/assets/demo/demo.css')}}" rel="stylesheet" /> 
@endsection 

@section('title') 
  Beranda 
@endsection 

@section('nav')

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg bg-primary" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">

            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{{ asset('/UploadedFile/icon/logox.png') }}" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                        {{-- <i class="fa fa-home"></i>  --}}
                        BERANDA
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link btn btn-primary btn-round zein-red" data-toggle="dropdown">
                    PRODUK DAN JASA
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ route('bus.index') }}" class="dropdown-item">
                            <i class="material-icons">layers</i> BUS
                        </a>
                        <a href="" class="dropdown-item">
                            <i class="material-icons">layers</i> TRAVEL
                        </a>
                        <a href="" class="dropdown-item">
                            <i class="material-icons">layers</i> KAPAL
                        </a>
                        <a href="" class="dropdown-item">
                                <i class="material-icons">layers</i> KARGO
                        </a>
                        <a href="" class="dropdown-item">
                                <i class="material-icons">layers</i> PESAWAT
                        </a>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link btn btn-primary btn-round" data-toggle="dropdown">
                      INFORMASI
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="" class="dropdown-item">
                                    {{-- <i class="material-icons">layers</i> --}}
                                    CARA PEMESANAN
                                </a>
                        <a href="" class="dropdown-item"> METODE PEMBAYARAN
                                </a>
                        <a href="" class="dropdown-item">FAQ
                                </a>
                        <a href="" class="dropdown-item">SYARAT DAN KETENTUAN
                                </a>
                        <a href="" class="dropdown-item"> KEBIJAKAN PRIVASI
                                </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                            KONFIRMASI
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                            TENTANG KAMI
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                            HUBUNGI KAMI
                        </a>
                </li>
                <li class="nav-item">
                <a class="nav-link btn btn-primary btn-round" rel="tooltip" title="" data-placement="bottom" href="{{ route('log.logout') }}" target="_blank" data-original-title="Follow us on Twitter">
                            LOGOUT
                        </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
@endsection 

@section('banner')
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1>AntarLintas</h1>
                    <h3>Cari dan pesan tiket Bus, Travel, Kapal disini! !</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('slider')
<div class="section" id="carousel">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto">
                <!-- Carousel Card -->
                <div class="card card-raised card-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('/UploadedFile/images/1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/UploadedFile/images/2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/UploadedFile/images/3.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('/UploadedFile/images/4.jpg') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                    <span class="sr-only">Previous</span>
                  </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                    <span class="sr-only">Next</span>
                  </a>
                    </div>
                </div>
                <!-- End Carousel Card -->
            </div>
        </div>
    </div>
</div>
<!--         end carousel -->
@endsection 

@section('content')
<div class="main main-raised">
    <div class="section section-basic">

        <div class="container">
            <!--                 images -->
            <div id="images">
                <div class="title">
                    <h5>Anda bisa pesan tiket s/d 45 hari sebelum keberangkatan</h5>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="#"><img src="{{ asset('/UploadedFile/icon/logobus.png') }}" alt="Rounded Image" class="img-raised rounded img-fluid"></a>
                      <h2>Bus</h2>
                      <a href="#" style="color: #f01006;">Baca Selengkapnya</a>
                    </div>
                    <div class="col-sm-2 ml-auto">
                        <a href="#"><img src="{{ asset('/UploadedFile/icon/logotravel.png') }}" alt="Circle Image" class="img-raised rounded img-fluid"></a>
                      <h2>Travel</h2>
                      <a href="#" style="color: #f01006;">Baca Selengkapnya</a>
                      </div>
                    <div class="col-sm-2 ml-auto">
                        <a href="#"><img src="{{ asset('/UploadedFile/icon/logokapal.png') }}" alt="Raised Image" class="img-raised rounded img-fluid"></a>
                      <h2>Kapal</h2>
                      <a href="#" style="color: #f01006;">Baca Selengkapnya</a>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-sm-2">
                      <img src="{{ asset('/UploadedFile/icon/logocargo.png') }}" alt="Rounded Image" class="img-raised rounded img-fluid">
                      <h2>Kargo</h2>
                      <a href="#" style="color: #f01006;">Comming Soon</a>
                      </div>
                    <div class="col-sm-2 ml-auto">
                      <img src="{{ asset('/UploadedFile/icon/logopesawat.png') }}" alt="Circle Image" class="img-raised rounded img-fluid">
                      <h2>Pesawat</h2>
                      <a href="#" style="color: #f01006;">Comming Soon</a>
                      </div>
                    <div class="col-sm-2 ml-auto">
                        <img src="{{ asset('/UploadedFile/icon/logoppob.png') }}" alt="Raised Image" class="img-raised rounded img-fluid">
                        <h2>PPOB</h2>
                        <a href="#" style="color: #f01006;">Comming Soon</a>
                      </div>
                </div>
            </div>
            <!--                 end images	             -->
            <br><br><br><br><br>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                        <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                          <!--
                                              color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                          -->
                          <li class="nav-item">
                            <a class="nav-link " href="#dashboard-2" role="tab" data-toggle="tab">
                            <img src="{{ asset('/UploadedFile/icon/1.png') }}" />
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-8">
                        <div class="tab-content">
                          <div class="tab-pane active" id="dashboard-2">
                            <p><b>Kerjasama</b></p> ResmiAntarLintas melakukan kerjasama resmi dengan ratusan operator maupun agen perwakilan dan edukasi semua crew operator di lapangan.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-6 col-md-12">
                  <div class="row">
                    <div class="col-md-3">
                      <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                        <!--
                                            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                        -->
                        <li class="nav-item">
                          <a class="nav-link " href="#dashboard-2" role="tab" data-toggle="tab">
                              <img src="{{ asset('/UploadedFile/icon/2.png') }}" />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content">
                            <div class="tab-pane active" id="dashboard-2">
                              <p><b>Pilihan Tujuan Terbanyak</b></p> 130 kota keberangkatan dan 287 kota tujuan dan lebih 1400+ rute perjalanan ke seluruh Indonesia. 
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-lg-6 col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                            <!--
                                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                            -->
                            <li class="nav-item">
                              <a class="nav-link " href="#dashboard-2" role="tab" data-toggle="tab">
                                  <img src="{{ asset('/UploadedFile/icon/3.png') }}" />
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content">
                                <div class="tab-pane active" id="dashboard-2">
                                  <p><b>Transaksi Aman Dan Terpercaya</b></p> Pilihan pembayaran transaksi yang beragam dengan tingkat keamanan yang terjamin sesuai dengan standard perbankan.
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                        <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                          <!--
                                              color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                          -->
                          <li class="nav-item">
                            <a class="nav-link" href="#dashboard-2" role="tab" data-toggle="tab">
                                <img src="{{ asset('/UploadedFile/icon/4.png') }}" />
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-8">
                          <div class="tab-content">
                              <div class="tab-pane active" id="dashboard-2">
                                <p><b>Harga Resmi dan Terbaik</b></p> Harga tiket yang tercantum di Antarlintas adalah harga resmi dan harga yang terbaik dan bersaing. 
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              <br>
              <br>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                          <div class="col-md-3">
                            <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                              <!--
                                                  color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                              -->
                              <li class="nav-item">
                                <a class="nav-link" href="#dashboard-2" role="tab" data-toggle="tab">
                                    <img src="{{ asset('/UploadedFile/icon/5.png') }}" />
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="col-md-8">
                            <div class="tab-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="dashboard-2">
                                      <p><b>Valid E-ticket</b></p> Tiket yang diterbitkan merupakan e-ticket valid dan dapat dipertanggung jawabkan sehingga Anda naik bus tanpa kendala.
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                            <!--
                                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                            -->
                            <li class="nav-item">
                              <a class="nav-link" href="#dashboard-2" role="tab" data-toggle="tab">
                                  <img src="{{ asset('/UploadedFile/icon/6.png') }}" />
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="dashboard-2">
                                      <p><b>Valid E-ticket</b></p> Customer Care kami melayani anda melalui LiveChat dan Call Center demi kepuasan pelanggan. 
                                    </div>
                                  </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</div>
@endsection 

@section('footer')
<footer class="footer" data-background-color="black">
    <div class="container">
        <div class="sharing-area text-center">
          
            <button id="googlePlus" class="btn btn-raised btn-google-plus sharrre">
                <i class="fa fa-blog"></i> Blog
              </button>
            <button id="twitter" class="btn btn-raised btn-twitter sharrre">
              <i class="fa fa-twitter"></i> Tweet
            </button>
            <button id="facebook" class="btn btn-raised btn-facebook sharrre">
              <i class="fa fa-facebook-square"></i> Facebook
            </button>
            <a id="github" href="https://github.com/creativetimofficial/material-kit" target="_blank" class="btn btn-raised btn-github">
              <i class="fa fa-instagram"></i> Instagram
            </a>
          </div>
        <div class="copyright float-right">2019 @Daron Labs
      </div>

    </div>

</footer>
@endsection 

@section('jQuery')
<script src="{{ asset('/frontend/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/frontend/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('/frontend/assets/js/core/bootstrap-material-design.min.js')}} " type="text/javascript"></script>
<script src="{{ asset('/frontend/assets/js/plugins/moment.min.js')}} "></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset('/frontend/assets/js/plugins/bootstrap-datetimepicker.js')}} " type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('/frontend/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="{{ asset('/frontend/assets/css/material-kit.css?v=2.0.5')}} https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('/frontend/assets/css/material-kit.css?v=2.0.5')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();
        
            // Sliders Init
            materialKit.initSliders();
        });


        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
</script>
@endsection