<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Olympiad</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- Animate on scroll library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">

</head>

<body id="page-top">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/logo.png" alt="logo" class="logoQ"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about" style="color : rgb(28,41,79);margin-right: 20px; min-width: 100px; " >{{__('strings.navbar.about')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#faq" style="color: rgb(28,41,79); margin-right: 20px; min-width: 80px;">{{__('strings.navbar.faq')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#speakers" style="color: rgb(28,41,79); margin-right: 20px; min-width: 80px;">{{__('strings.navbar.speakers')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sponsors" style="color: rgb(28,41,79); margin-right: 20px; min-width: 80px;">{{__('strings.navbar.sponsors')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact" style="color: rgb(28,41,79); margin-right: 20px; min-width: 80px;">{{__('strings.navbar.contacts')}}</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown" style="background: #fff; border: 1px solid #f8f8f8; padding: 5px 0; min-width: 50px; margin-right: 20px;">
                            {{ucfirst(app()->getLocale())}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" >
                            <ul class="ct-language__dropdown" style="display: block;">
                                <li><a href="/language/kz" class="lang-en lang-select" data-lang="en" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">Қазақ</a></li>
                                <li><a href="/language/en" class="lang-en lang-select" data-lang="en" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">English</a></li>
                                <li><a href="/language/ru" class="lang-ru lang-select" data-lang="es" style="font-size: 15px; text-transform: uppercase; line-height: 30px; color: #767a89;">Русский</a></li>
                            </ul>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#apply" style="color: #fff; background-color: rgb(233,180,39); border-radius: 30px; margin-right: 20px; min-width: 170px;" >{{__('strings.navbar.apply')}}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/video2.mp4" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">{{__('strings.welcome.header')}}</h1>
{{--                <p class="lead mb-0">For talented pupils</p>--}}
                <p class="text-center mt-3 mb-3">
                    <a href="#headerPopup" id="headerVideoLink" target="_blank" class="popup-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                            <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                        </svg>
                    </a>
                </p>
                <p class="lead mb-0">{{__('strings.welcome.time')}}</p>
                <p class="lead mb-0">{{__('strings.welcome.format')}}</p>
                <p class="text-center mt-2">
                    <a href="#apply" id="headerVideoLink" class="btn btn-outline-warning popup-modal">{{__('strings.welcome.apply')}}</a>
                </p>
                <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" width="854" height="480" src="https://www.youtube.com/embed/qN3OueBm9F4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 style="margin-top: 30px;">{{__('strings.about.about')}}</h2>
                <p class="lead">
                    {{__('strings.about.text')}}
                </p>
                <h2 style="margin-top: 70px; margin-bottom: 70px;">{{__('strings.instruction.stages')}}</h2>
                <div class="" id="stages">
                    <div class="container">
                        <div class="steps-form">
                            <div class="steps-row setup-panel">
                                <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                                    <a href="#step-9" type="button" class="btn btn-indigo btn-circle" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">1</a>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage1')}}</p>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage1_text')}}</p>
                                </div>
                                <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                                    <a href="#step-10" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">2</a>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage2')}}</p>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage2_text')}}</p>
                                </div>
                                <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="500">
                                    <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">3</a>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage3')}}</p>
                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage3_text')}}</p>
                                </div>
{{--                                <div class="steps-step aos-init aos-animate" data-aos="fade-right" data-aos-delay="700">--}}
{{--                                    <a href="#step-11" type="button" class="btn btn-default btn-circle" disabled="disabled" style="background-color: rgb(233,180,39); color:rgb(28,41,79);">4</a>--}}
{{--                                    <p class="steps" style="color: rgb(28,41,79);">{{__('strings.about.stage4')}}</p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <h2 style="margin-top: 70px; margin-bottom: 70px;">{{__('strings.instruction.header')}}</h2>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-block">
                    <span class="fb-icon color-info">
                      <div class="text-light">1</div>
                    </span>
                            <h4 class="title">REGISTRATION:</h4>
                            <p></p>
                            <p>Sing up and fill out the form in our website</p>
                        </div> <!-- /.feature-block -->
                    </div> <!-- /.single-block -->
                    <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-block">
                    <span class="fb-icon color-warning">
                        <div class="text-light">2</div>
                    </span>
                            <h4 class="title">ASSESSMENT: </h4>
                            <p class="text-warning">For professionals:</p>
                            <p>Pass our test to be invited for the interview</p>
                        </div> <!-- /.feature-block -->
                    </div> <!-- /.single-block -->
                    <div class="col-lg-4 col-sm-6 single-block active aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                        <div class="feature-block">
                    <span class="fb-icon color-success">
                        <div class="text-light">3</div>
                    </span>
                            <h4 class="title">PRE-SEASON:</h4>
                            <p class="text-warning">For Beginners:</p>
                            <p>Get through an intensive 3-weeks of coding</p>
                        </div> <!-- /.feature-block -->
                    </div> <!-- /.single-block -->
                </div>

                <h2 style="margin-top: 70px; margin-bottom: 70px;">{{__('strings.prizes.header')}}</h2>
{{--                <div> bla bla</div>--}}
            </div>
        </div>
    </div>
</section>

<section id="apply" class="bg-light">
    <div class="container">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">{{__('strings.application.header')}}</h3>
                                <form action="userInfo/create"  method="post">
                                    @csrf
                                    <div class="form-group">
{{--                                        <label for="inputUsername">Full name</label>--}}
                                        <input type="text"  class="form-control" name="name" placeholder="{{__('strings.application.fullname')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="{{__('strings.application.email')}}" required>
{{--                                        <label for="inputEmail">Email</label>--}}
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" name="phone" class="form-control" placeholder="{{__('strings.application.phone')}}" required >
{{--                                        <label for="inputPhone">Phone number</label>--}}
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="{{__('strings.application.city')}}" required>
{{--                                        <label for="inputCity">City</label>--}}
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="school" class="form-control" placeholder="{{__('strings.application.school')}}" required>
{{--                                        <label for="inputSchool">School</label>--}}
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{__('strings.application.apply')}}</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="container" >
        <h2 style="text-align: center;">{{__('strings.faq.header')}} </h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="row" style="text-align: center;">
                    <div class="col-6">
                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                            <h3 class="panel-title">
                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="" aria-controls="collapse0" style="color: black">
                                    {{__('strings.faq.q1')}}<img src="images/arrow.jpg" style="height:20px; width: 20px; " alt="button">
                                </a>
                            </h3>
                        </div>
                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                            <div class="panel-body px-3 mb-4">
                                <p>{{__('strings.faq.a1')}}</p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="color: black">
                                        {{__('strings.faq.q2')}}<img src="images/arrow.jpg" style="height:20px; width: 20px; " alt="button">
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body px-3 mb-4">
                                    <p>{{__('strings.faq.a2')}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="panel panel-default">
                            <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2" style="color: black">
                                        {{__('strings.faq.q3')}}<img src="images/arrow.jpg" style="height:20px; width: 20px;" alt="button">
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body px-3 mb-4">
                                    <p>{{__('strings.faq.a3')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3" style="color: black">
                                        {{__('strings.faq.q4')}} <img src="images/arrow.jpg" style="height:20px; width: 20px; " alt="button">
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body px-3 mb-4">
                                    <p>{{__('strings.faq.a4')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="speakers" class="bg-light">

    <h2 style="text-align: center; margin-bottom: 50px;">{{__('strings.speakers.header')}} </h2>
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/yernur.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/yernur.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Ернур Рысмагамбетов</h4>
                    <p class="text-center">Председатель Правления <br>АО «Администрация МФЦА»</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/bagdat.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/bagdat.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Багдат Мусин</h4>
                    <p class="text-center">Министр цифрового развития<br> инноваций и аэрокосмической<br> промышленности РК</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/yelmira.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/yelmira.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Эльмира Обри</h4>
                    <p class="text-center">И.О. главного исполнительного <br>директора BCPD Ltd.</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                    <div class="speakers-img">
                        <picture>
{{--                            <source srcset="" type="image/webp">--}}
                            <img src="Speakers/kanat_kozhakhmet.jpg" alt="Avatar" loading="lazy" style="height: 175px; width: 175px; border-radius: 50%">
                        </picture>
                    </div>
                    <h4 class="text-center">Ернур Рысмагамбетов</h4>
                    <p class="text-center">Председатель Правления <br>АО «Администрация МФЦА»</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/kwame.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/kwame.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Кваме Ямгнане</h4>
                    <p class="text-center">Основатель Qwasar<br> Silicon Valley</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/arman.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/arman.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Арман Сулейменов</h4>
                    <p class="text-center">академический эдвайзер <br>школы, основатель, <br>@nfactorial.school</p>
                </div>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                    <div class="speakers-img">
                        <picture>
                            <source srcset="https://qwant.job-fair.kz/landing/img/qwant/kanat.webp" type="image/webp">
                            <img src="https://qwant.job-fair.kz/landing/img/qwant/kanat.png" alt="" loading="lazy" style="height: 175px; width: 175px;">
                        </picture>
                    </div>
                    <h4 class="text-center">Алмас Туякбаев</h4>
                    <p class="text-center">Основатель, <br>генеральный директор UXStone</p>
                </div>










            </div>
        </div>
    </div>
</section>

<section id="organizers">
    <!-- Page Content -->
{{--    <h2><b>Organizers</b></h2>--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-9">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">--}}
{{--                    <div class="speakers-img">--}}
{{--                        <picture>--}}
{{--                            <source srcset="" type="image/webp">--}}
{{--                            <img src="organization_team/aliya_baltavayeva.JPG" alt="" loading="lazy" style="height: 175px; width: 175px;  border-radius: 50%">--}}
{{--                        </picture>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-center">Алия Балтабаева</h4>--}}
{{--                    <p class="text-center">Организатор</p>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">--}}
{{--                    <div class="speakers-img">--}}
{{--                        <picture>--}}
{{--                            <source srcset="" type="image/webp">--}}
{{--                            <img src="organization_team/Beibarysumirbayev.jpeg" alt="" loading="lazy" style="height: 175px; width: 175px;  border-radius: 50%">--}}
{{--                        </picture>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-center">Бейбарыс Умирбаев</h4>--}}
{{--                    <p class="text-center">Организатор</p>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">--}}
{{--                    <div class="speakers-img">--}}
{{--                        <picture>--}}
{{--                            <source srcset="" type="image/webp">--}}
{{--                            <img src="organization_team/MakhabbatUskenbayeva.jpg" alt="" loading="lazy" style="height: 175px; width: 175px;  border-radius: 50%">--}}
{{--                        </picture>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-center">Махаббат Ускенбаева</h4>--}}
{{--                    <p class="text-center">Организатор</p>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-md-3 d-flex flex-column align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">--}}
{{--                    <div class="speakers-img">--}}
{{--                        <picture>--}}
{{--                            <img src="organization_team/MereyMakhanova.jpg" alt="Avatar" loading="lazy" style="height: 175px; width: 175px; border-radius: 50%">--}}
{{--                        </picture>--}}
{{--                    </div>--}}
{{--                    <h4 class="text-center">Мерей Маханова</h4>--}}
{{--                    <p class="text-center">Организатор</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div id="organizers" class="row justify-content-center" style="margin:auto">--}}
{{--        <div class="logoBox col-sm-2">--}}
{{--            <img src="images/sponsorZerde.png" class="logoSponsor" alt="Organizer1">--}}
{{--        </div>--}}
{{--    </div>--}}

    <h2><b>Партнеры и Организаторы</b></h2>
    <div class="row" id="sponsors" style="display: flex; margin:auto; justify-content: center;">
        <div class="logoBox col-sm-2">
            <img src="Logo/QWANT-01.png" class="logoSponsor" alt="Sponsor1">
        </div>

        <div class="logoBox col-sm-2">
            <img src="Logo/BCPD_Primary.png" class="logoSponsor" alt="Sponsor2">
        </div>

        <div class="logoBox col-sm-2">
            <img src="images/sponsorZerde.png" class="logoSponsor" alt="Sponsor3">
        </div>

        <div class="logoBox col-sm-2">
            <img src="Logo/Qwasar-Logo-06.png" class="logoSponsor" alt="Sponsor4">
        </div>
    </div>
    <!-- /.container -->
</section>

<section id="contact" class="bg-dark">
    <div class="container">
        <div class="row text-light">
            <div class="col-lg-6 mx-auto">
                <h2>Контакты</h2>
                <p class="lead">Наш адрес:
                    пр. Мангилик Ел 55/23,
                    Блок C 4.4, BCPD University of the Future
                    Z05T3C9, Нур-Султан,
                    Республика Казахстан
                </p>
            </div>
            <div class="col-lg-6 mx-auto pt-5">
                <ul style="list-style-type:none">
                    <li>Телефон: <a href="tel:+7 776 134 36 48">+7 776 134 36 48</a></li>
                    <li>Email: <a href="mailto:INFO@QWANT.KZ">info@qwant.kz</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5" style="background-color:white;">
    <div class="container">
        <p class="m-0 text-center text-black-50">&copy; 2021 QWANT. All right reserved.</p>
    </div>
    <!-- /.container -->
</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Your application was sent successfully!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your application was sent successfully! Please, check your email on 20 February. We will send you an invitation to olympiad with instruction
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

<!-- Animate on scroll library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Animate on scroll library -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js"></script>

<script>
    AOS.init();
    $(document).ready(function() {
        $('#headerVideoLink').magnificPopup({
            type:'inline',
            midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
    });
</script>

@if(session('success'))
    <!-- Modal -->
    <script>
        $(function() {
            $('#exampleModal').modal('show');
        });
    </script>

    {{--<div class="alert alert-success">--}}
    {{--    {{ session()->get('success') }}--}}
    {{--</div>--}}
@endif

</body>

</html>
