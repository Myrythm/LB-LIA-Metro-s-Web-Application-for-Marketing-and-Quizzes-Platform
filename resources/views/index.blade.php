<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,  shrink-to-fit=no">
    <title>LB LIA MIM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="{{ asset('js/slider.js') }}" defer></script>
    <link href="{{ asset('css/variable.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Start Navbar -->
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-4 shadow-sm" style="font-family: 'Poppins';" data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-out">
      <div class="container">
          <a style="font-weight: 700; color: #4261db;" class="navbar-brand fs-4" href="#">LB LIA MIM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto text-dark">
  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Program 
                      </a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-item bg-light">
                              <a class="nav-link" href="#GProgram">General Program</a>
                          <li class="dropdown-item bg-light">
                              <a class="nav-link" href="#CProgram">Conversation Program</a>
                          </li>
                          <li class="dropdown-item bg-light">
                              <a class="nav-link" href="#toefl">TOEFL</a>
                          </li>
                          <li class="dropdown-item bg-light">
                              <a class="nav-link" href="#inhouse">In House Training</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#teacher">Our Teachers</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#faq">FAQ</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#kontak">Contact Us</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  
  
  
  
  
  

    <!-- End Navbar -->

    <!-- Start Hero -->
   
    <section id="utama">
      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="font-family: 'Poppins';">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  
          <div class="carousel-inner">
              <div class="carousel-item active c-item">
                  <img src="./img/1.jpeg" class="d-block w-100 c-img" alt="Slide 1">
                  <div class="overlay"></div>
                  <div class="carousel-caption top-0 mt-4 text-center d-flex flex-column align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 class="text-uppercase mb-3 fs-1 mt-5">Lorem ipsum dolor sit.</h2>
                    <div class="row text-center d-flex flex-column align-items-center justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <p class="lead text-capitalize mb-4 fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <button class="btn btn-success px-4 py-2 fs-5 custom-btn" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-whatsapp me-2"></i>Join Now</button>
                        </div>
                    </div>
                </div>
                </div>
  
              <div class="carousel-item c-item">
                  <img src="./img/2.jpeg" class="d-block w-100 c-img" alt="Slide 2">
                  <div class="overlay"></div>
                  <div class="carousel-caption top-0 mt-4 text-start d-flex flex-column align-items-start justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <h2 class="text-uppercase mb-3 fs-1 mt-5">Lorem ipsum dolor sit.</h2>                   
                            <p class="lead text-capitalize mb-4 fs-6 text-start" style="max-width: 60vh;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <button class="btn btn-success px-4 py-2 fs-5 custom-btn" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-whatsapp me-2"></i>Join Now</button>


                        
                </div>
              </div>
  
              <div class="carousel-item c-item">
                <img src="./img/3.jpeg" class="d-block w-100 c-img" alt="Slide 2">
                <div class="overlay"></div>
                <div class="carousel-caption top-0 mt-4 text-end d-flex flex-column align-items-end justify-content-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                  <h2 class="text-uppercase mb-3 fs-1 mt-5">Lorem ipsum dolor sit.</h2>                   
                          <p class="lead text-capitalize mb-4 fs-6 text-end" style="max-width: 60vh;">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                          <button class="btn btn-success px-4 py-2 fs-5 custom-btn" data-bs-toggle="modal" data-bs-target=""><i class="bi bi-whatsapp me-2"></i>Join Now</button>

                      
              </div>
            </div>
          </div>
  
          <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
         
      </div>
  </section>  
    
    
    <!-- End Hero -->

    <!-- Start Section General Program -->

    <section id="GProgram" class="d-flex align-items-center justify-content-center">
      <div class="container text-center py-5">
        <h2 class="fw-bold"  data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out" style="font-family: poppins; color: #4261db;">General Program</h2>
        <p class="fs-6"  data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
          Diverse English programs emphasize skills and cultural awareness for all ages.</p>

        <div class="row justify-content-center align-items-center my-5 cardG-container"  data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <div class="col my-2">
            <div class="body">

              <div class="cardGprogram human-resources">
                   <div class="overlayGprogram"></div>
                <div class="circle">
                   
                  <svg width="66px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><defs><style>.cls-1{fill:#e67244;}.cls-2{fill:#00cf66;}.cls-3{fill:#f9a06f;}.cls-4{fill:#00b157;}.cls-5{fill:#ffd188;}</style></defs><title>Student Female</title><g id="_11_-_20" data-name="11 - 20"><g id="Student_Female" data-name="Student Female"><path class="cls-1" d="M38.781,29.375a12.14,12.14,0,0,1-2.636-6.59l.563-5.074.175-.741a12.752,12.752,0,0,0,.337-2.93A13.028,13.028,0,0,0,24.21,1h-.42A13.028,13.028,0,0,0,11.117,16.971l.175.74.563,5.074a12.14,12.14,0,0,1-2.636,6.59,1,1,0,0,0,.572,1.6l7.266,1.552c.13.033,3.537.049,6.943.049,3.261,0,6.522-.015,6.908-.045v0l7.3-1.56a1,1,0,0,0,.572-1.6Z" id="id_101" style="fill: rgb(86, 138, 220);"></path><path class="cls-2" d="M43.923,41.947l-.77-2.055a9.032,9.032,0,0,0-4.966-5.147l-8.8-3.668A1,1,0,0,0,29,31H19a1,1,0,0,0-.385.077l-8.8,3.668a9.032,9.032,0,0,0-4.966,5.147l-.77,2.055A3,3,0,0,0,6.886,46H41.114a3,3,0,0,0,2.809-4.053Z" id="id_102" style="fill: rgb(59, 108, 183);"></path><path class="cls-3" d="M29,28v4.46a16,16,0,0,1-4.686,11.314L24,44.088h0l-.314-.314A16,16,0,0,1,19,32.46V28Z" id="id_103" style="fill: rgb(106, 142, 204);"></path><path class="cls-4" d="M24,38a13.033,13.033,0,0,1-4.247-.714,16,16,0,0,0,3.933,6.488l.314.314.314-.314a15.987,15.987,0,0,0,3.933-6.49A12.975,12.975,0,0,1,24,38Z" id="id_104" style="fill: rgb(45, 80, 140);"></path><path class="cls-5" d="M34.385,16.783h0A10.509,10.509,0,0,1,29.3,13.117l-1.145-1.526h0a14.109,14.109,0,0,1-7.45,3.9l-7.089,1.289a3.116,3.116,0,0,0,0,6.231,2.921,2.921,0,0,0,.675-.083l.644,2.918a8.343,8.343,0,0,0,3.708,5.244L21.8,33.056a4.118,4.118,0,0,0,4.4,0l3.156-1.963a8.343,8.343,0,0,0,3.708-5.244l.644-2.918a2.921,2.921,0,0,0,.675.083,3.116,3.116,0,0,0,0-6.231Z" id="id_105" style="fill: rgb(175, 206, 255);"></path></g></g></svg>
              
                </div>
                <p class="fs-4 fw-bold mt-3">English For Young Learner</p>
                <p class=" fw-normal">
                  Program ini dirancang khusus untuk siswa SD, mengembangkan kemampuan Bahasa Inggris melalui aktivitas menyenangkan dan pembelajaran yang terstruktur.</p>
                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="./youthL.html">Learn More</a></button>
                
              </div>
              </div>
          </div>
          <div class="col my-2">
            <div class="body">
                <div class="cardGprogram human-resources">
                    <div class="overlayGprogram"></div>
                    <div class="circle">
                      <svg width="66px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><defs><style>.cls-1{fill:#2d4a60;}.cls-2{fill:#00cf66;}.cls-3{fill:#00b157;}.cls-4{fill:#f9a06f;}.cls-5{fill:#ffd188;}</style></defs><title>Student Male</title><g id="_11_-_20" data-name="11 - 20"><g id="Student_Male" data-name="Student Male"><path class="cls-1" d="M36.859,9.126l-.36-.841a7.073,7.073,0,0,0-6.086-4.273,8.7,8.7,0,0,0-7.769-2.036L17.737,3.115a9.045,9.045,0,0,0-6.256,5.22l-.34.791a9.069,9.069,0,0,0-.461,5.727l.72,2.87a1.016,1.016,0,0,0,.169.356L14.2,21.6a1,1,0,0,0,.8.4H34a1,1,0,0,0,.907-.58l1.63-3.52a1.1,1.1,0,0,0,.063-.177l.721-2.872A9.071,9.071,0,0,0,36.859,9.126Z" id="id_106" style="fill: rgb(86, 138, 220);"></path><path class="cls-2" d="M44.435,42.349l-.45-2.023a9.015,9.015,0,0,0-6.138-6.65l-8.553-2.632A1.007,1.007,0,0,0,29,31H19a1.007,1.007,0,0,0-.294.044l-8.553,2.632a9.015,9.015,0,0,0-6.138,6.65l-.45,2.023A3,3,0,0,0,6.493,46H41.507a3,3,0,0,0,2.928-3.651Z" id="id_107" style="fill: rgb(59, 108, 183);"></path><path class="cls-3" d="M29,31h0l1.9,2.532a9.085,9.085,0,0,1,1.546,3.248h0a2,2,0,0,1-1.719,2.473L24,40l-6.726-.747a2,2,0,0,1-1.719-2.473h0A9.085,9.085,0,0,1,17.1,33.532L19,31H29Z" id="id_108" style="fill: rgb(41, 75, 133);"></path><path class="cls-4" d="M19,31h0a11.047,11.047,0,0,0,2.561,7.073l.9,1.083a2,2,0,0,0,3.072,0l.9-1.083A11.047,11.047,0,0,0,29,31h0V26H19Z" id="id_109" style="fill: rgb(148, 176, 224);"></path><path class="cls-5" d="M33.531,17.636,32.308,18.86l-.52-2.077-.166-.685a8.4,8.4,0,0,0-1.152-2.586l-1.278-1.921a15.422,15.422,0,0,1-6.833,2.492l-2.762.3a4.168,4.168,0,0,0-3.313,2.4,4.238,4.238,0,0,0-.249.727l-.343,1.35-1.223-1.224a2.069,2.069,0,0,0-2.532-.364l-.014.009a3.117,3.117,0,0,0,1.692,5.733,2.921,2.921,0,0,0,.675-.083l.644,2.918a8.343,8.343,0,0,0,3.708,5.244L21.8,33.056a4.118,4.118,0,0,0,4.4,0l3.156-1.963a8.343,8.343,0,0,0,3.708-5.244l.644-2.918a2.921,2.921,0,0,0,.675.083,3.117,3.117,0,0,0,1.692-5.733l-.014-.009A2.069,2.069,0,0,0,33.531,17.636Z" id="id_110" style="fill: rgb(175, 206, 255);"></path></g></g></svg>

                    </div>
                    <p class="fs-4 fw-bold mt-3">English For Teens</p>
                    <p class="fw-normal">Program ini dirancang untuk siswa SMP, meningkatkan kemampuan berbahasa Inggris sehari-hari melalui pembelajaran yang mendukung dan interaktif.</p>
                    <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="./youthL.html">Learn More</a></button>
                </div>
            </div>
        </div>
        
        
          <div class="col my-2">
            <div class="body">

              <div class="cardGprogram human-resources">
                   <div class="overlayGprogram"></div>
                <div class="circle">
                   
                  <svg version="1.1" id="Layer_1" width="66px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 319.335 319.335" style="enable-background:new 0 0 319.335 319.335;" xml:space="preserve"> <g> <g> <path style="fill: rgb(86, 138, 220);" d="M303.858,253.887c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548h-58.932c-3.058,6.329,0.714,42.711-23.449,53.548 c-24.157,10.842-80.133,6.655-91.279,44.408c-6.149,20.824-5.857,27.193-7.554,50.26c0,0,76.8,15.187,150.014,15.187 s153.488-15.187,153.488-15.187C309.715,281.074,310.007,274.712,303.858,253.887z" id="id_101"></path>  <path style="fill: rgb(59, 108, 183);" d="M303.858,253.887c-11.151-37.754-67.121-33.566-91.279-44.408 c-24.157-10.842-20.386-47.219-23.449-53.548h-31.206c0,0-0.719,51.024,23.438,61.866s80.133,6.655,91.279,44.408 c5.857,19.83,5.868,26.552,7.324,47.073c19.234-2.816,31.442-5.126,31.442-5.126C309.715,281.074,310.007,274.712,303.858,253.887 z" id="id_102"></path> <g> <polygon style="fill:#C6C5AF;" points="209.381,207.798 176.293,236.492 171.307,205.887 			" id="id_103"></polygon> <polygon style="fill:#C6C5AF;" points="109.419,208.113 143.002,236.492 146.981,205.887 			" id="id_104"></polygon> <polygon style="fill:#C6C5AF;" points="172.19,205.887 146.981,205.887 145.07,212.07 174.146,212.239 			" id="id_105"></polygon> <polygon style="fill:#AAA88F;" points="146.981,205.887 145.07,212.07 146.172,212.789 			" id="id_106"></polygon> <polygon style="fill:#AAA88F;" points="174.146,212.239 171.375,206.112 172.499,213.194 			" id="id_107"></polygon> <path style="fill: rgb(59, 108, 183);" d="M173.617,319.109l0.579-7.987l-6.082-80.51H152.09l-7.099,80.515l0.585,8.066 c4.12,0.084,8.24,0.141,12.354,0.141C163.135,319.335,168.373,319.249,173.617,319.109z" id="id_108"></path> <polygon style="fill: rgb(54, 78, 122);" points="152.152,230.966 168.115,230.607 168.441,235.103 			" id="id_109"></polygon> <polygon style="fill: rgb(46, 83, 153);" points="140.725,208.551 178.44,208.529 176.293,221.4 167.777,230.966 152.152,230.966 142.878,221.4 			" id="id_110"></polygon> <path style="fill: rgb(59, 108, 183);" d="M146.981,205.887l-25.72-13.984c0,0-3.389,4.817-11.843,16.21l31.723,22.853l2.704-14.923 L146.981,205.887z" id="id_111"></path> <path style="fill: rgb(30, 55, 97);" d="M171.307,205.887l25.72-13.984c0,0,3.901,4.502,12.354,15.895l-32.234,23.168l-2.704-14.923 L171.307,205.887z" id="id_112"></path> <path style="fill: rgb(59, 108, 183);" d="M197.027,191.903l-25.72,13.984l1.776,5.772c2.372,2.602,5.109,4.716,8.279,6.138 c2.805,1.259,6.037,2.316,9.578,3.254l18.436-13.248C200.928,196.405,197.027,191.903,197.027,191.903z" id="id_113"></path> </g> <g> <ellipse transform="matrix(-0.177 0.9842 -0.9842 -0.177 386.2379 -85.1184)" style="fill: rgb(59, 89, 140);" cx="228.707" cy="118.927" rx="21.386" ry="11.629" id="id_114"></ellipse> <ellipse transform="matrix(-0.9842 0.177 -0.177 -0.9842 200.5228 219.9815)" style="fill: rgb(59, 89, 140);" cx="90.45" cy="118.935" rx="11.629" ry="21.386" id="id_115"></ellipse> <path style="fill: rgb(175, 206, 255);" d="M223.826,47.734h-64.221H95.418c0,0-35.989,146.614,64.187,160.806 C259.821,194.348,223.826,47.734,223.826,47.734z" id="id_116"></path> <path style="fill: rgb(175, 206, 255);" d="M159.605,208.54c100.216-14.192,64.221-160.806,64.221-160.806h-15.024 c4.114,61.242,9.808,93.774-13.815,129.24C176.27,205.078,159.605,208.54,159.605,208.54z" id="id_117"></path> <path style="fill: rgb(175, 206, 255);" d="M192.851,55.603L90.494,83.734c8.661,3.468,25.574,9.864,61.748,9.707 c20.133-0.09,64.412-6.239,74.203-29.795L192.851,55.603z" id="id_118"></path> <path style="fill: rgb(86, 138, 220);" d="M223.478,34.031c0,0-7.633-27.322-58.027-33.409c-40.244-4.862-72.45,20.532-118.224,14.81  c-0.219,25.377,6.222,54.351,31.419,65.328c-0.247,10.792,0.478,24.866,10.859,36.264c0,0-0.916-18.548,0.956-33.313 c0,0,22.837,5.593,49.04,5.649c27.856,0.056,64.997-4.519,86.951-25.72c0,0,3.294,20.167,3.294,53.385 c0,0,7.509-7.931,8.768-20.026C241.363,69.565,244.027,32.772,223.478,34.031z" id="id_119"></path> </g>  </g>  </g>  <g>   </g>  <g>    </g>   <g> </g><g></g><g></g><g></g><g></g> <g></g><g> </g> <g> </g>  <g>   </g> <g>  </g>  <g>  </g><g> </g> <g></g> </svg>
              
                </div>
                <p class="fs-4 fw-bold mt-3">English For Adults</p>
                <p class=" fw-normal">Program ini dirancang untuk SMA, mahasiswa, dan umum. Meningkatkan kemampuan berkomunikasi dalam bahasa Inggris melalui pembelajaran terstruktur dan komprehensif.</p>
                <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="./youthL.html">Learn More</a></button>
                
                
              </div>
              </div>
          </div>
         
        </div>
      </div>

    </section>

    <!-- End Section General Program -->




    <!-- Start Section Conversation Program -->

    <section id="CProgram">
      <div class="container text-center py-5"  >
        <h2 class="fw-bold" style="font-family: poppins; color: #4261db;" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">Conversation Program</h2>
        <p class="text-center mt-2 text-dark " data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">
            Program Conversation berfokus pada pengembangan keterampilan berbicara dalam bahasa inggris melalui latihan interaktif dan situasional.
        </p>

        <div class="row row-cols-1 row-cols-md-3 g-4 m-4 justify-content-center"  data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
        


          <div class="col" >
            <div class="card shadow-sm" style="border-radius: 15px; border: none;">
              <img src="./img/cStudent.jpg" class="card-img-top card-image" alt="Students Conversation" style=" border-radius: 15px 15px 0px 0px; border: none;">
              <div class="card-body">
                <h5 class="card-title">Students Conversation</h5>
                <p class="card-text">
                  Program Conversation for Students dirancang untuk meningkatkan kemampuan berbicara melalui percakapan interaktif, membantu siswa berkomunikasi dengan percaya diri dalam bahasa Inggris.</p>
                <button type="button" class="btn btn-primary">Learn More</button>
              </div>
            </div>
          </div>
          <div class="col" >
            <div class="card shadow-sm " style="border-radius: 15px; border: none;">
              <img src="./img/cEmployee.jpg" class="card-img-top card-image" alt="Employees Conversation" style=" border-radius: 15px 15px 0px 0px; border: none;">
              <div class="card-body">
                <h5 class="card-title">Business Conversation</h5>
                <p class="card-text"> 
                  Program Conversation for Business dirancang untuk meningkatkan keterampilan komunikasi bisnis melalui latihan interaktif, membentuk strategi komunikasi yang efektif, dan mendukung keberhasilan profesional.</p>
                <button type="button" class="btn btn-primary">Learn More</button>
              </div>
            </div>
          </div>
          
        </div>
        

    </section>

    <!-- End Conservation Program-->


    <!-- Start Section TOEFL Program -->

    <section id="toefl">
      <div class="container py-5"   >
        <h2 class="fw-bold text-center" style="font-family: poppins; color: #4261db;" data-aos-duration="500"data-aos="fade-down" data-aos-easing="ease-in-out">Test of English as a Foreign Language (TOEFL)</h2>
        <p class="text-center mt-2"data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">
          Test of English as a Foreign Language (TOEFL) saat ini banyak digunakan sebagai acuan untuk mengetahui kemampuan bahasa Inggris seseorang
        </p>

        <div class="row row-cols-1 row-cols-md-3 g-4 m-4 justify-content-center"data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out">    
          <div class="col-lg-6">
            <img src="img/book.jpg" alt="book" style="width: 90%; border-radius: 15px;">
        </div>

          <div class="col-lg-6 text-left ">
            <p class="fw-bold fs-5">
              Manfaat
                <ul>  
                    <li>Seringkali menjadi salah satu syarat untuk mencapai kesuksesan baik dalam bidang akademis maupun pekerjaan.</li>
                    <li>Membantu siswa untuk membiasakan diri dengan format tes TOEFL sekaligus meningkatkan skor TOEFL mereka. </li>
                    <li>Mengajarkan berbagai macam tips dan strategi yang diaplikasikan dalam mengerjakan tes TOEFL yang meliputi 3 bagian: Listening Comprehension, Structure and Written Expressions, dan Reading Comprehension.</li>
                </ul>
            </p>
            <p class="fw-bold fs-5">
              Level dan periode belajar
                <ul>  
                    <li>4 tingkat.</li>
                    <li>3 Bulan (22 Sesi)</li>
                    <li>2 Sesi per Minggu; 110 Menit per Sesi</li>
                </ul>
            </p>
            
        </div>

        
          
        </div>
        

    </section>

    <!-- End TOEFL Program-->

    <!-- Start INHouse Program -->

    <section id="inhouse" style=" background-color: #fafafa;">
      <div class="container py-5 text-white" >
        <h2 class="fw-bold text-center" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out"  style="font-family: poppins; color: #4261db;">In House Training</h2>
        <p class="text-center mt-2 text-dark" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">
          Program In House dirancang untuk kebutuhan spesifik perusahaan, menawarkan pelatihan karyawan terkait keterampilan dan peningkatan produktivitas internal secara khusus.
        </p>

        <div class="row row-cols-1 row-cols-md-3 g-4 m-4 justify-content-center inhome mobile-layout" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out">    
          <div class="col-lg-6 text-left text-dark">
            <p class="fw-bold fs-5">
              Deskripsi
                <ul>  
                    <li>Program-program pelatihan Bahasa Inggris untuk perusahaan dengan materi yang dapat disesuaikan dengan kebutuhan client yang sebut dengan English for Specific Purposes (ESP).</li>
                    <li>Dimulai dengan Need Analysis Survey yang akan dilanjutkan dengan pembahasan program yang diusulkan bersama dengan pihak manajemen atau HRD. </li>
                    <li>Laporan pelaksanaan pelatihan secara jelas dan juga individual report para peserta pelatihan.</li>
                </ul>
            </p>
            <p class="fw-bold fs-5">
              Program 
                <ul>  
                    <li>Conversation in English</li>
                    <li>Business Conversation</li>
                    <li>English for Academic Purposes</li>
                    <li>LIA Preparation Course for TOEIC® Test</li>
                    <li>Effective Presentation</li>
                    <li>Report Writing</li>
                    <li>Communicative Grammar</li>
                    <li>Dan lain-lain</li>
                </ul>
            </p>
            
        </div>

        <div class="col-lg-6">
          <img class="mobile-image" src="img/inhome.jpg" alt="book" style="border-radius: 15px;">
      </div>
          
        </div>
        

    </section>

    <!-- End Inhouse Program-->



    <!-- Start Teacher Page -->

    <section id="teacher">
      <div class="container text-center py-5" >
        <h2 class="fw-bold"  data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out" style="font-family: poppins; color: #4261db;">Our Teachers</h2>
       
            <div class="bungkus py-5 text-light fs-5" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out" >
              <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left text-dark"></i>
                <ul class="carousel-t">
                  <li class="card-t">
                    <div class="img"><img src="./img/1.jpeg" alt="img" draggable="false"></div>
                    <h2>Lorem, ipsum dolor.</h2>                    
                  </li>
                  <li class="card-t">
                    <div class="img"><img src="./img/2.jpeg" alt="img" draggable="false"></div>
                    <h2>Joenas Brauers</h2>
                  </li>
                  <li class="card-t">
                    <div class="img"><img src="./img/3.jpeg" alt="img" draggable="false"></div>
                    <h2>Lariach French</h2>
                  </li>
                  <li class="card-t">
                    <div class="img"><img src="./img/4.jpeg" alt="img" draggable="false"></div>
                    <h2>James Khosravi</h2>
                  </li>
                  <li class="card-t">
                    <div class="img"><img src="./img/5.jpeg" alt="img" draggable="false"></div>
                    <h2>Kristina Zasiadko</h2>
                  </li>
                 
                </ul>
                <i id="right" class="fa-solid fa-angle-right text-dark"></i>
             

          </div>
        </div>
          
        </div>
        

    </section>


    <!-- End Teaher Page -->

    <!-- Start FAQ -->

    <section id="faq" style=" background-color: #fafafa;">
      <div class="container py-5 text-white" >
        <h2 class="fw-bold text-center" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out"  style="font-family: poppins; color: #4261db;">Frequently Asked Questions</h2>
        <p class="text-center mt-2 text-dark" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">
          Berikut merupakan beberapa pertanyaan yang sering ditanyakan
        </p>

        <div class="accordion accordion-flush m-4 mt-5" id="accordionFlushExample" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <div class="accordion-item mb-1">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <i class="bi bi-question-circle-fill me-2"></i>Pertanyaan 1
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti maxime, illo, libero ut sit dignissimos asperiores harum animi quisquam tempora aliquid expedita? Nobis, aliquam molestiae.</div>
            </div>
          </div>
          <div class="accordion-item mb-1">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                <i class="bi bi-question-circle-fill me-2"></i>Pertanyaan 2
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores natus reprehenderit quasi impedit vitae, voluptatem id sunt voluptatibus quidem at, aperiam cupiditate quos. Quos, eligendi.</div>
            </div>
          </div>
          <div class="accordion-item mb-1">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                <i class="bi bi-question-circle-fill me-2"></i>Pertanyaan 3
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus non debitis minima. Facilis maxime est, velit ab, magnam blanditiis cum non voluptatibus facere commodi explicabo?</div>
            </div>
          </div>
          <div class="accordion-item mb-1">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                <i class="bi bi-question-circle-fill me-2"></i>Pertanyaan 4
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus non debitis minima. Facilis maxime est, velit ab, magnam blanditiis cum non voluptatibus facere commodi explicabo?</div>
            </div>
          </div>
          <div class="accordion-item mb-1">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                <i class="bi bi-question-circle-fill me-2"></i>Pertanyaan 5
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus non debitis minima. Facilis maxime est, velit ab, magnam blanditiis cum non voluptatibus facere commodi explicabo?</div>
            </div>
          </div>
        </div>      

    </section>
    <!-- End FAQ -->

    <!-- Start Contact -->
    <section id="kontak" class="contact">
      <div class="container py-5 text-white">
        <h2 class="fw-bold text-center" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out" style="font-family: poppins; color: #4261db;">Contact Us</h2>
        <p class="text-center mt-2 text-dark" data-aos="fade-down" data-aos-duration="500" data-aos-easing="ease-in-out">
          Hubungi kami untuk pertanyaan atau bantuan apa pun. Kami hadir untuk memberikan dukungan yang Anda butuhkan. Jangan ragu untuk menghubungi kami melalui informasi di bawah ini.
        </p>
    
        <div class="row justify-content-center m-4 mt-5" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-easing="ease-in-out">
          <div class="col-md-6 text-dark">
            
                <div class="info">
                  <h3>Get in touch</h3>
                  <p>LB LIA MIM</p>
    
                  <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h4>Location:</h4>
                      <p>METRO INDAH MALL Blok A8 & B8, SOEKARNO HATTA, BANDUNG</p>
                    </div>
                  </div><!-- End Info Item -->
    
                  <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h4>Email:</h4>
                      <p>info@example.com</p>
                    </div>
                  </div><!-- End Info Item -->
    
                  <div class="info-item d-flex">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                      <h4>Call:</h4>
                      <p>Information : 0857-4517-0052  </p>
                      <p>Registration : 0857-4517-0301</p>           
                        
                    </div>
                  </div><!-- End Info Item -->
                </div>
              </div>
          
          <div class="col-md-6">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5812775444874!2d107.65701407499671!3d-6.940541493059503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81a3612045d%3A0x17c71882b5d8c75b!2sLBPP%20Lia%20Metro!5e0!3m2!1sid!2sid!4v1701018045886!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->
          </div>
    
           
        </div>
      </div>
    </section>
    
    <!-- End Contact -->

    <!-- Start Footer -->
   
      <!-- Footer -->
      <footer
              class="text-center text-lg-start text-white"
              style="background-color: #4261db;"
              >
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Program</h6>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#GProgram">General Program</a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#CProgram">Conversation Program</a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#toefl">TOEFL</a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#Inhouse">In House Training</a>
                </p>
              </div>
              <!-- Grid column -->
    
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">General</h6>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#">English For Young Learner</a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#">English For Teens </a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="">English For Adults</a>
                </p>
                
              </div>
              <!-- Grid column -->
    
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Conversation</h6>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#">For Students</a>
                </p>
                <p>
                  <a class="text-white link-offset-2 link-offset-3-hover link-underline-light link-underline-opacity-0 link-underline-opacity-75-hover" href="#">For Business</a>
                </p>
               
              </div>
    
              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none" />
    
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i> MIM Blok A8 & B8, Bandung</p>
                <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> Information : 0857-4517-0052</p>
                <p><i class="fas fa-phone mr-3"></i> Registration : 0857-4517-0301</p>
              </div>
              <!-- Grid column -->
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
    
          <hr class="my-3">
    
          <!-- Section: Copyright -->
          <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
              <div class="col-md-12 col-lg-12 text-center">
                <div class="p-3">
                  © 2023 Copyright: LB LIA MIM
                </div>
              </div>
            </div>
          </section>
        </div>
      </footer>
 


    <!-- End Footer -->

    <!-- Bootstrap CSS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



<!-- AOS Library -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!--  AOS Initialization Script -->
<script>
  AOS.init();
</script>

<script>
  $(document).ready(function () {
      $(".navbar-toggler").click(function () {
          $("body").toggleClass("menu-active");
      });
  });
</script>



</body>

</html>
