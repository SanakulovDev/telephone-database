<?php
use  kv4nt\owlcarousel\OwlCarouselWidget;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
    <div class="boxed-page">
        <nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <span class="lnr lnr-moon"></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav-header">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="  #home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#who-we-are">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>     
        <div class="jumbotron d-flex align-items-center" style="background-image: url(template/img/hero-2.jpg)">
          <div class="container text-center">
            <h1 class="display-2 mb-4">Nabiyev Faxriddin Portfolio</h1>
            <p>
              Mening shaxsiy portfolio saytimga xush kelibsiz!!
          </p>
      </div>
  </div>      
  <section id="gtco-who-we-are" class="bg-white">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap">
                <h2 class="section-title">Eng oson yo'li <br/>
                onlayn veb-saytlar yaratish uchun</h2>
                <p class="section-sub-title">Portfolio saytda siz telefonlar qisqacha ma'lumotlar olishingiz mumkin!.</p>
            </div>
            
            <div class="row text-center">
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="template/icons/animat-checkmark.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4">Oddiy va toza</h5>
                    <p>Doimo ishingizni toza va oddiy tarzda bajaring!</p>
                    <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                </div>
                <!-- /.col-md-4 col-sm-6  -->
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="template/icons/animat-customize.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4">Moslashtirish oson</h5>
                    <p>O'zingizni bir nechta qurilmalaringizda sinab ko'ring!   </p>
                    <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                </div>
                <!-- /.col-md-4 col-sm-6  -->
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="template/icons/animat-responsive.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4">To'liq javob beruvchi</h5>
                    <p>Istalgan qurilma uchun tushadi va uning talablariga javob beradi!s</p>
                    <p><a class="btn btn-link" href="#" role="button">View details</a></p>
                </div>
                <!-- /.col-md-4 col-sm-6  -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</section>      <!-- Counter Section -->
<section id="gtco-counter" class="overlay bg-fixed">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <!-- Counter Item -->
                <div class="col-md-3 col-sm-6 counter-item">
                    <i class="lnr lnr-users"></i>
                    <span class="number" data-from="0" data-to="34" data-refresh-interval="100">14</span>
                    <h4>Clients</h4>
                </div>
                <!-- End of Counter Item -->
                <!-- Counter Item -->
                <div class="col-md-3 col-sm-6 counter-item">
                    <i class="lnr lnr-briefcase"></i>
                    <span class="number" data-from="0" data-to="32" data-refresh-interval="100">32</span>
                    <h4>Projects</h4>
                </div>
                <!-- End of Counter Item -->
                <!-- Counter Item -->
                <div class="col-md-3 col-sm-6 counter-item">
                    <i class="lnr lnr-heart"></i>
                    <span class="number" data-from="0" data-to="38" data-refresh-interval="100">38</span>
                    <h4>Positive Feedbacks</h4>
                </div>
                <!-- End of Counter Item -->
                <!-- Counter Item -->
                <div class="col-md-3 col-sm-6 counter-item">
                    <i class="lnr lnr-rocket"></i>
                    <span class="number" data-from="0" data-to="29" data-refresh-interval="100">29</span>
                    <h4>Website Launch</h4>
                </div>
                <!-- End of Counter Item -->
            </div>
        </div>
    </div>
</section>
<!-- End of Counter Section -->     <!-- Features Section-->
<section id="gtco-features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title">
                    Siz xohlagan barcha ehtiyojlar
                </h2>

            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Features Holder-->
                <div class="col-md-12 features-holder">
                    <div class="row">
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-cog fs-40"></i>
                            </div>
                            <h4>Moslashtirish oson</h4>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-frame-contract fs-40"></i>
                            </div>
                            <h4>Mukammal piksel</h4>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-bubble fs-40"></i>
                            </div>
                            <h4>To'liq qo'llab-quvvatlash</h4>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-magic-wand fs-40"></i>
                            </div>
                            <h4>Toza dizayn</h4>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-clock fs-40"></i>
                            </div>
                            <h4>Vaqtinchalik loyiha</h4>
                        </div>
                        <!-- End of Feature Item -->
                        <!-- Features Item -->
                        <div class="col-md-4 col-sm-6 feature-item item mb-3 text-center">
                            <div class="my-4">
                                <i class="lnr lnr-thumbs-up fs-40"></i>
                            </div>
                            <h4>SASS bilan qurilgan</h4>
                        </div>
                        <!-- End of Feature Item -->
                    </div>
                </div>
                <!-- End of Features Holder-->
            </div>
        </div>
    </div>
</section>
<!-- End of Features Section-->     
<section id="gtco-section-featurettes" class="featurettes bg-white">

    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Section Title -->
                    <div class="title-wrap">
                        <h2 class="section-title">
                            Yangi <b> ijtimoiy tarmoqlar,</b> <br/>
                            boshqasidan farq qiladi
                        </h2>
                        <p class="section-sub-title">
                            Har bir lahzani suratga oling va uni barcha do'stlaringizga ulashing
                        </p>
                    </div>
                    <!-- End of Section Title -->

                    <div class="featurettes-wrap text-left mb-4">

                        <div class="row featurettes-item">

                            <div class="col-md-4 offset-md-2 col-sm-6">
                                <div class="my-5">
                                    <span class="lnr lnr-camera fs-40 color-primary"></span>
                                </div>
                                <h4 class="mb-4">Har bir lahzani suratga oling va uni barcha do'stlaringizga ulashing</h4>  
                            </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                            <div class="col-md-4 offset-md-right-2 col-sm-6">
                                <img class="my-5" src="template/img/app-profile-mockup.png" alt="">
                            </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                        </div><!--/ .featurettes-item -->

                    </div><!--/ .featurettes-wrap -->

                    <div class="featurettes-wrap text-left">

                        <div class="row featurettes-item">

                            <div class="col-md-4 offset-md-2 col-sm-6">
                                <img class="my-4" src="template/img/app-chat-mockup.png" alt="">
                            </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                            <div class="col-md-4 offset-md-right-2 col-sm-6 mb-5">
                                <div class="my-4">
                                    <span class="lnr lnr-bubble fs-40 color-primary"></span>
                                </div>
                                <h4 class="mb-4">Do'stingizga shaxsiy xabarlar yuboring yoki chat guruhini yarating</h4>
                            </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                        </div><!--/ .featurettes-item -->

                    </div><!--/ .featurettes-wrap -->

                    <div class="featurettes-wrap text-left">

                        <div class="row featurettes-item">

                            <div class="col-md-4 offset-md-2 col-sm-6 offset-sm-0">
                                <h4 class="mb-4">Ilg'or ijtimoiy tajribangiz uchun ilovamizga qo'shilishga tayyormisiz?</h4>
                                
                            </div><!--/ .col-md-4.col-md-offset-2.col-sm-6 -->

                            <div class="col-md-4 offset-md-right-2 col-sm-6 text-center">
                                <a href="#0"><img class="btn-img my-4" src="template/img/appstore-btn.png" alt=""></a>
                                <a href="#0"><img class="btn-img" src="template/img/playstore-btn.png" alt=""></a>
                            </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                        </div><!--/ .featurettes-item -->

                    </div><!--/ .featurettes-wrap -->

                </div><!--/ .col-md-12 -->

            </div><!--/ .row -->
        </div>
    </div><!--/ .container -->

</section>      <!-- Blog Section -->
<section id="gtco-blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5">
                <h2 class="section-title">So'nggi <b>yangiliklar</b></h2>
            </div>
            <div class="row ">


                <!-- Blog Item -->
                <div class="col-md-4  blog-item-wrapper">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="single.html"><img class="img-fluid img-thumbnail" src="template/img/huawei.jfif" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-tag">
                                <a href="#"><h6><small>CODE</small></h6></a>
                            </div>
                            <div class="blog-title">
                                <a href="single.html"><h4>Huawei Y7 2019</h4></a>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-author">
                                <p>by Faxriddin</p>
                            </div>
                            <div class="blog-share-wrapper">
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Blog Item -->
                <!-- Blog Item -->
                <div class="col-md-4  blog-item-wrapper">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#"><img class="img-fluid img-thumbnail" src="template/img/iphone.jpeg" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-tag">
                                <a href="#"><h6><small>CODE</small></h6></a>
                            </div>
                            <div class="blog-title">
                                <a href="#"><h4 class="text-capitalize">Iphone 13 pro max</h4></a>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-author">
                                <p>by Faxriddin</p>
                            </div>
                            <div class="blog-share-wrapper">
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Blog Item -->
                <!-- Blog Item -->
                <div class="col-md-4  blog-item-wrapper">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#"><img class="img-fluid img-thumbnail" src="template/img/redminote9pro.png" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-tag">
                                <a href="#"><h6><small>CODE</small></h6></a>
                            </div>
                            <div class="blog-title">
                                <a href="#"><h4>Redmi  note 9 pro </h4></a>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum dolor sit amet con sectetur adipiscing elit sed do eiu smod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="blog-author">
                                <p>by Faxriddin</p>
                            </div>
                            <div class="blog-share-wrapper">
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-facebook-square"></i>
                                </a>
                                <a class="blog-share" href="google.com">
                                    <i class="fab fa-twitter-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 

                <!-- End of Blog Item -->
                
                <!-- The slideshow/carousel -->
                
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>
<!-- End of Blog Section -->        <!-- Portfolio Section -->

<!-- End of Portfolio Section -->       
     <!-- Client Section -->
<section id="gtco-client" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title">
                    Biz bilan <b>ishlashni</b> yaxshi ko'radiganlar
                </h2>
            </div>
            <!-- End of Section Title -->
            <div class="row ">
                <div class="col-md-2">
                    <!-- Client Item -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-1.png" alt=" ">
                    </div>
                    <!-- End of Client Item  -->
                </div>
                <div class="col-md-2">
                    <!-- Client Item -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-2.png" alt=" ">
                    </div>
                    <!-- End of Client Item -->
                </div>
                <div class="col-md-2">
                    <!-- Client Item  -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-3.png" alt=" ">
                    </div>
                    <!-- End of Client Item -->
                </div>
                <div class="col-md-2">
                    <!-- Client Item  -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-4.png" alt=" ">
                    </div>
                    <!-- End of Client Item  -->
                </div>
                <div class="col-md-2">
                    <!-- Client Item  -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-5.png" alt=" ">
                    </div>
                    <!-- End of Client Item  -->
                </div>
                <div class="col-md-2">
                    <!-- Client Item  -->
                    <div class="client-item">
                        <img class="img-responsive" src="template/img/client-6.png" alt=" ">
                    </div>
                    <!-- End of Client Item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Client Section -->        
</div>
</body>

