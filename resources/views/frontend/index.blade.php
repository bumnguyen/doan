<!DOCTYPE html>
<html lang="en">

<head>
  <title>Frontend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
  <link href="{{asset('frontend/css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
 


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html">Gymer</a></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#classes-section" class="nav-link">Classes</a></li>
                <li><a href="#schedule-section" class="nav-link">Schedule</a></li>
                <li><a href="#trainer-section" class="nav-link">Trainer</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block">
                <li class="cta"><a href="dangnhap" class="nav-link"><span
                      class="rounded border border-primary">Login</span></a></li>
                <li class="cta"><a href="dangnhap" class="nav-link"><span
                      class="rounded border border-primary">Log Out</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>

    </header>

    <a id="bgndVideo" class="player"
      data-property="{videoURL:'http://youtu.be/7lutvYTZk8E',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:10, stopAt: 36, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
            <h1>Welcome To Gymer</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section section-1">


      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-3">
        
            <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
              <div class="icon-wrap"><span class="flaticon-muscle text-primary"></span></div>
              <div class="counter-text">
                <strong>2,260</strong>
                <span>Members</span>
              </div>
            </div>
        
        
          </div>
          <div class="col-lg-3">
            <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-wrap"><span class="flaticon-stationary-bike text-primary"></span></div>
              <div class="counter-text">
                <strong>210</strong>
                <span>Daily Visitors </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
        
            <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-wrap"><span class="flaticon-banana text-primary"></span></div>
              <div class="counter-text">
                <strong>887</strong>
                <span>Health Program</span>
              </div>
            </div>
        
          </div>
          <div class="col-lg-3">
            <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-wrap"><span class="flaticon-heart text-primary"></span></div>
              <div class="counter-text">
                <strong>1,920</strong>
                <span>Heart Beat</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 mr-auto mb-5 align-self-center">

            <div class="mb-5">
              <h2 class="section-title">Step Up Your Fitness</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore
                molestias blanditiis consequuntur
                sunt nisi.</p>
              <p>
                <a href="#contact-section" class="btn btn-primary smoothscroll py-3 px-4">Get In Touch</a>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-absolute-box">
             
              <img src="images/about_1.jpg" alt="Image" class="img-fluid img-shadow">
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="site-section section-2" id="classes-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Classes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>

      </div>
      <div class="owl-carousel nonloop-block-13">

        <a class="work-thumb" href="single.html">
          <div class="work-text">
            <h3>Classes fitness name here</h3>
            <span class="category">Fitness</span>
          </div>
          <img src="images/slide_0.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="single.html">
          <div class="work-text">
            <h3>Classes fitness name here</h3>
            <span class="category">Cardio Vascular</span>
          </div>
          <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="single.html">
          <div class="work-text">
            <h3>Classes fitness name here</h3>
            <span class="category">Lose Weight</span>
          </div>
          <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="single.html">
          <div class="work-text">
            <h3>Classes fitness name here</h3>
            <span class="category">Cardio Vascular</span>
          </div>
          <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
        </a>

        <a class="work-thumb" href="single.html">
          <div class="work-text">
            <h3>Classes fitness name here</h3>
            <span class="category">Fitness</span>
          </div>
          <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
        </a>
      </div>

    </div>


    <div class="site-section section-2" id="schedule-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Thời gian</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs mb-5 border-bottom-0 justify-content-center tab-list-custom" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday"
                  aria-selected="true">Monday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday"
                  aria-selected="false">Tuesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Wednesday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Thursday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Friday</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday"
                  aria-selected="false">Sunday</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                <table class="table table-bordered table-custom table-striped ">
                  <thead >
                    <tr>
                      <td style="color: ">DichVu</td>
                      <td>Giờ</td>
                      <td>Hướng dẫn viên</td>
                      <td>Đăng kí ngay</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Yoga</td>
                      <td>8:00am - 10:00am</td>
                      <td>Minh Hiếu</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobic</td>
                      <td>10:00am - 10:30am</td>
                      <td>Thái Phạm</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Boxing</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Thành Long</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Zumba</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Bùi Huy</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
              <table class="table table-bordered table-custom table-striped ">
                  <thead >
                    <tr>
                      <td style="color: ">DichVu</td>
                      <td>Giờ</td>
                      <td>Hướng dẫn viên</td>
                      <td>Đăng kí ngay</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Yoga</td>
                      <td>8:00am - 10:00am</td>
                      <td>Phạm Văn Mách </td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobic</td>
                      <td>10:00am - 10:30am</td>
                      <td>Tố vấn tối cao Trần Dần</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Boxing</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Bùi Văn Anh Huy </td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Zumba</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Nguyễn Thị THanh Thảo</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
<table class="table table-bordered table-custom table-striped ">
                  
                  <tbody>
                    <tr>
                      <td>Gym</td>
                      <td>8:00am - 10:00am</td>
                      <td>John Doe</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Meditation</td>
                      <td>10:00am - 10:30am</td>
                      <td>James Holmes</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Weight Lifting</td>
                      <td>1:00pm - 2:30pm</td>
                      <td>Ben Smith</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Crossfit</td>
                      <td>3:00pm - 3:45pm</td>
                      <td>Craig Peters</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>
                    <tr>
                      <td>Aerobics</td>
                      <td>5:00pm - 5:30pm</td>
                      <td>Paul Green</td>
                      <td class="text-center"><a href="#contact-section" class="smoothscroll">Join Now</a></td>
                    </tr>

                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="site-section" id="trainer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Trainers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>
        <div class="row large-gutters">
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-5">
            <h3>James Holmes</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem, dignissimos dolorem porro aliquid veritatis!</p>
          </div>
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0 mt-5">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-5">
            <h3>Kelly Green</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem,
              dignissimos dolorem porro aliquid veritatis!</p>
          </div>
          <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-5">
            <h3>Ben Smith</h3>
            <p class="mb-4 opacity-7">Aerobatics Trainer</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum voluptatem,
              dignissimos dolorem porro aliquid veritatis!</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="services-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title">Our Featured Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
              voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias
              blanditiis consequuntur
              sunt nisi.</p>
          </div>
        </div>

      </div>

      <div class="container">

        <div class="owl-carousel nonloop-block-14">

          <div class="service">
            <div>
              <span class="flaticon-muscle display-3 text-white mb-4 d-inline-block"></span>
              <h3>Weight Lifting</h3>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>


          <div class="service">
            <div>
              <span class="flaticon-stationary-bike display-3 text-white mb-4 d-inline-block"></span>
              <h3>Meditation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>

          <div class="service">
            <div>
              <span class="flaticon-banana display-3 text-white mb-4 d-inline-block"></span>
              <h3>Crossfit</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>

          <div class="service">
            <div>
              <span class="flaticon-heart display-3 text-white mb-4 d-inline-block"></span>
              <h3>Aerobics</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>

          <div class="service">
            <div>
              <span class="flaticon-scale display-3 text-white mb-4 d-inline-block"></span>
              <h3>Gym</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>

          <div class="service">
            <div>
              <span class="flaticon-weight display-3 text-white mb-4 d-inline-block"></span>
              <h3>Circling</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                voluptatibus animi.</p>
            </div>
          </div>



        </div>
      </div>

    </div>


    <div class="site-section bg-dark" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">



            <h2 class="section-title mb-3">Registration</h2>
            <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam
              temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              @if(count($errors)>0) 
                <!--kiểm tra điều kiện errors lưu các điều kiện từ validate -->
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
              @endif 
              @if(session('thongbao'))
                  <div class="alert alert-success">
                  {{session('thongbao')}}
                  </div>
              @endif
          <form action="dangky" method="post" >
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input name="Ten" type="text" class="form-control" placeholder="Họ Và Tên">
                </div>
                <div class="col-md-6">
                  <input name="Sdt" type="text" class="form-control" placeholder="Số điện thoại">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 ">
                    <label></label>
                    <br>
                    <input name="NgaySinh" type="date" id="ngaysinh-add" class="form-control" value="" required="required" title="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label>Dịch Vụ</label>
                    <br>
                    <select class="form-control" name="DichVu">
                        @foreach($dichvu as $value)
                        <option value="{{$value->id}}" style="color: black;">{{$value->Ten}}</option>  
                        @endforeach
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                      
                    <label>Gói Dịch Vụ</label>
                    <br>
                    <select class="form-control" name="GoiDichVu" >
                        @foreach($goidichvu as $value)
                        <option value="{{$value->id}}" style="color: black;">{{$value->Ten}}</option>  
                        @endforeach  
                    </select>
  
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>



    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Gymer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis
              corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Meditation</a></li>
              <li><a href="#">Gym</a></li>
              <li><a href="#">Aerobatics</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto?
              Numquam, natus?</p>
            <form action="#">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->
<!-- <base href="{{asset('')}}"> -->
  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/s/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
  
</body>

</html>