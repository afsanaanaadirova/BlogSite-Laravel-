<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/isotope-docs.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/lightslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightgallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lg-zoom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css">
    <link rel="stylesheet" href="{{ asset('assets/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightgallery-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="loading" id="loading" >
        <div class="loader-line"></div>
        <div class="load-text">
            <p>Daim İnkişafa Doğru… </p>
        </div>
    </div>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <section class="wrapper">
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
                                <a class="nav-link menu-link dropdown-link navbarlink" href="#">
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
                            <li class="nav-item menu-item active ">
                                <a class="nav-link menu-link navbarlink" href="{{ route('ProjectsPage') }}">Lahiyələrimiz</a>
                            </li>
                            <li class="nav-item menu-item">
                                <a class="nav-link menu-link navbarlink" href="{{ route('BlogsPage') }}">Faydalı yazılar</a>
                            </li>
                            <li class="nav-item menu-item dropdownitem">
                                    <a class="nav-link menu-link dropdown-link navbarlink" href="">
                                      Əlaqə
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li  class="dropdown-item"><a href="{{ route('ContactPage') }}">Əlaqə</a></li>
                                        </ul>
                                        <span class="dropdown-item--link" href="#">Digər Protallar</span>
                                        <ul>
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
        <svg xmlns="http://www.w3.org/2000/svg" class="wave-svg" style="position: absolute;top: -1px;z-index: -1;" viewBox="0 0 1440 320">
            <text x="240" y="59" fill="#000" style="font-size: 68px;z-index: 0;position: absolute; opacity: 0.1;">STP İnkişaf Platforması</text>
            <path fill="#f2f2f2a8" fill-opacity="1" d="M0,128L15,154.7C30,181,60,235,90,256C120,277,150,267,180,224C210,181,240,107,270,101.3C300,96,330,160,360,202.7C390,245,420,267,450,240C480,213,510,139,540,122.7C570,107,600,149,630,160C660,171,690,149,720,154.7C750,160,780,192,810,202.7C840,213,870,203,900,213.3C930,224,960,256,990,229.3C1020,203,1050,117,1080,96C1110,75,1140,117,1170,112C1200,107,1230,53,1260,26.7C1290,0,1320,0,1350,5.3C1380,11,1410,21,1425,26.7L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
        </svg>
    </header>
    @yield('content')
    <footer class="container-fluid" id="contact">
        <div class="footer">
            <div class="col-lg-4 footer-social">
                <div class="footer-social--link">
                    <ul>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                            </a>
                        </li>
                        <li>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                              </svg></a>
                        </li>
                        <li>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                              </svg></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 footer-contact">
                <div class="info">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                        <p>Sumqayıt,Azərbaycan H.Z. Tağıyev qəs.</p>
                    </div>
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                      </svg>
                        <p>info@stp.az</p>
                    </div>
                    <div> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                        <p>*0990</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/js/lightgallery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <script src="{{ asset('assets/js/lightgallery.umd.js') }}"></script>
    <script src="{{ asset('assets/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lg-thumbnail.umd.js') }}"></script>
    <script src="{{ asset('assets/js/lg-zoom.umd.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/js/jquery.justifiedGallery.js"></script>
    <script src="{{ asset('assets/js/isotope-docs.min.js') }}"></script>
    <script  src="{{ asset('assets/js/details.js') }}"></script>
    <script  src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script  src="{{ asset('assets/js/isotope-docs.min.js') }}"></script>
    <script  src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script  src="{{ asset('assets/js/index.js') }}"></script>


 
</body>

</html>