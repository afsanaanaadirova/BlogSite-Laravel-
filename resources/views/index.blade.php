<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/isotope-docs.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Document</title>
    <style>
        .section-first{
    width: 100%;
        }
        .section-first:before {
            content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(88 88 88 / 58%);
}
    </style>
</head>
<body>
    <div class="loading" id="loading" style="">
        <div class="loader-line"></div>
        <div class="load-text">
            <p>Daim İnkişafa Doğru… </p>
        </div>
    </div>
    <section class="section-first">
        <video class="main-video" controls autoplay muted loop="" muted="" playsinline="">
            <source src="{{ asset('assets/videoplayback.mp4') }}" type="video/mp4">
            <source src="{{ asset('assets/videoplayback.mp4') }}" type="video/ogg">
            Your browser does not support the video tag.
          </video>
	</section>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <section class="wrapper">
                    {{-- <div class="logo_box logo">
                        <a class="navbar-brand" href="https://www.stp.az/"> 
                            <img src="https://www.stp.az/assets/images/logo3.png" id="logo3" style="transform: rotate(0deg);">
                             <img src="https://www.stp.az/assets/images/logo2.png" id="logo2" style="transform: rotate(360deg);"> 
                             <img src="https://www.stp.az/assets/images/logo1.png" id="logo1" style="transform: rotate(0deg);"> 
                             <img src="https://www.stp.az/assets/images/logo4.png" id="logo4"> </a>
                             <!--<a href='https://www.stp.az/' class='logo rel_left top_middle'>
                                <img src='https://www.stp.az/assets/images/new_logo.png' alt='Logo' height='57' class='rel_left' />
                            </a>-->
                        </div> --}}
                    <a class="navbar-brand" href="{{ route('IndexPage') }}"><img src="{{ asset('images/STP LOGO-05.png') }}" alt=""></a>
                    <button type="button" class="burger" id="burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </button>
                    <div class="menu" id="menu">
                        <ul class="navbar-nav mr-auto menu-inner">
                            <li class="nav-item menu-item dropdownitem">
                                <a class="nav-link menu-link dropdown-link" href="#">
                                  Şirkətimiz
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                  </svg>
                                </a>
                                <div class="dropdown-menu">
                                    @foreach ($companies as $company)
                                        <a class="dropdown-item" href="{{ route('CompanyDetailsPage', $company->id) }}">{{ $company->name }}</a> 
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item menu-item">
                                <a class="nav-link menu-link" href="{{ route('ProjectsPage') }}">Lahiyələrimiz</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a class="nav-link menu-link" href="{{ route('BlogsPage') }}">Faydalı yazılar</a>
                            </li>
                            <li class="nav-item menu-item dropdownitem">
                                    <a class="nav-link menu-link dropdown-link" href="">
                                      Əlaqə
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li  class="dropdown-item"><a href="{{ route('ContactPage') }}">Əlaqə</a></li>
                                            <li class="dropdown-item"><a href="https://www.stp.az/" target="_blank" >stp.az</a></li>
                                            <li class="dropdown-item"><a href="https://internstp.com/" target="_blank">internstp</a></li>
                                            <li class="dropdown-item"><a href="" target="_blank">vakansiyastp</a></li>
                                        </ul>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Axtarış" />
                            <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                        </div>
                        <span class="close" onclick="searchToggle(this, event);">
                        </span>
                    </div> --}}
                </section>
            </div>
        </nav>
        <div class="header-main container-fluid">
            <div class="header-main--left ">
                <h3>STP <span>İnkişaf</span> Platforması</h3>
                <p>Regionun qeyri-neft sektorunun ən iri sənaye istehsalçısı olan STP şirkətlər qrupunun İnkişaf Platforması</p>
            </div>
            <div class="header-main--right">
                <img src="images/d0d7fe_c35c746c6cc74b5a965d2ab5eb039dc2_mv2.gif" alt="">
            </div>
        </div>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <script  src="{{ asset('assets/js/isotope-docs.min.js') }}"></script>
    <script  src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script  src="{{ asset('assets/js/index.js') }}"></script>
    <script>
    function logoAnim(){	AnimateRotate("#logo1",0,-130,800,0);	AnimateRotate("#logo2",0,180,800,0);	AnimateRotate("#logo3",0,90,800,0);	AnimateRotate("#logo1",-130,0,800,800);	AnimateRotate("#logo2",180,360,800,800);	AnimateRotate("#logo3",90,0,800,800);
    }
    function AnimateRotate(em, start, finish, myduration, delay) { var elem = $(em); $({deg: start}).delay(delay).animate({deg: finish}, { duration: myduration, step: function(now) { elem.css({ transform: 'rotate(' + now + 'deg)' }); } });
    }
    $(document).ready(function() { $('.logo_box a').stop().hover(function() { $(window).unbind('logoAnim'); logoAnim(); }, function() { $(window).unbind('logoAnim'); }); $('input[type=email], .email').on('change', function(){ var bu=$(this); checkEmail(bu); }); $('.langBar').hover( function(){ $('.langList').stop().slideDown(500) }, function(){ $('.langList').stop().slideUp(500)} ); $('.tel, input[type=tel]').mask('(999) 999-99-99'); $('.check_form').submit(function(){ var curr_form=$(this), error=false, first_input=null; curr_form.find('.required').each(function(){ var bu=$(this), val=bu.val(); if($.trim(val)=='' || val==0){ error=true; bu.parents('.input_box').addClass('error').removeClass('verify'); bu.addClass('must_fill').removeClass('req_input_filled'); if(!first_input){ first_input=bu; } }else{ bu.parents('.input_box').removeClass('error').addClass('verify'); bu.removeClass('must_fill').addClass('req_input_filled'); } bu.change(function(){ var new_val=bu.val(); if($.trim(new_val) =='' || new_val==0){ bu.parents('.input_box').addClass('error').removeClass('verify'); bu.addClass('must_fill').removeClass('req_input_filled'); }else{ bu.parents('.input_box').removeClass('error').addClass('verify'); bu.removeClass('must_fill').addClass('req_input_filled'); } }); }); if(!error){ var agree_checkbox=$('#agree_rules'); if(Boolean(curr_form.find(agree_checkbox).length) && !agree_checkbox.prop('checked') ){ alert_fun('Qaydalar ilə razı olduğunuzu bildirin.', 'error'); return false; } if(curr_form.find('.g-recaptcha').length > 0){ if (Boolean(grecaptcha.getResponse().length)){ return true; } else { alert_fun('Formu doğrulayın', 'error'); return false; } } return true; }else { alert_fun('Vacib xanaları doldurun', 'error'); return false; } return false; });
    });</script>
</body>

</html>