<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/Responsive.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Vintage CAR</title>
    <link rel="icon" href="images/icon.png" type="icon">

</head>
<body id="some">

<header id="header" >
    <div class="wrapper">
        <div class="particle elem1 anim-delay1"></div>
        <div class="particle elem2 anim-delay5"></div>
        <div class="particle elem3 anim-delay3"></div>
        <div class="particle elem4 anim-delay8"></div>
        <div class="particle elem5 anim-delay9"></div>
        <div class="particle elem6 anim-delay2"></div>
        <div class="particle elem7 anim-delay4"></div>
        <div class="particle elem8 anim-delay3"></div>
        <div class="particle elem9 anim-delay10"></div>
        <div class="particle elem8 anim-delay11"></div>
        <div class="particle elem6 anim-delay12"></div>
        <div class="particle elem1 anim-delay14"></div>
        <div class="particle elem13 anim-delay16"></div>
        <div class="particle elem17 anim-delay18"></div>
        <div class="particle elem2 anim-delay6"></div>
        <div class="particle elem16 anim-delay9"></div>
        <div class="particle elem8 anim-delay3"></div>
        <div class="particle elem9 anim-delay10"></div>
        <div class="particle elem18 anim-delay11"></div>
        <div class="particle elem11 anim-delay12"></div>
        <div class="particle elem12 anim-delay14"></div>
        <div class="particle elem13 anim-delay16"></div>
        <div class="particle elem14 anim-delay18"></div>
        <div class="particle elem15 anim-delay6"></div>
        <div class="particle elem16 anim-delay9"></div>
        <div class="particle elem17 anim-delay7"></div>
        <div class="particle elem18 anim-delay6"></div>
        <div class="particle elem19 anim-delay3"></div>
    </div>
        <label>
        <input type='checkbox' id="chkPassport">
        <span class='menu' data-aos="flip-down"> <span class='hamburger' data-aos="flip-down"></span> </span>
        <ul>
            <li> <a href='#' onclick="myFunction1()" class="menu-text" id="scrol1">HOME</a></li>
            <li> <a href='#' onclick="myFunction2()" class="menu-text" id="scrol2">SERVICES</a></li>
            <li> <a href='#' onclick="myFunction3()" class="menu-text" id="scrol3">CONTACT</a></li>
        </ul>
        <img class="img-responsive  menu-logo" src="images/logo.png" alt="logo">
    </label>

<img class="img-responsive head-icon " id="hide-item" src="images/head-icon.png" alt="Los Angeles">
<!-- slider begin -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 
  <ol class="carousel-indicators">
   @foreach( $sliders as $slider )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>
 
  <div class="carousel-inner" role="listbox">
    @foreach( $sliders as $slider )
       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
           <img class="d-block img-fluid" src="/storage/slider/{{$slider->slider_image}}" alt="{{ $slider->title }}">
             <div class="carousel-caption">
                <h2 class="data hide-item">{{$slider->created_at}}</h2>
                <p class="carousel-text hide-item">{{$slider->title}}</p>
            </div>
       </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- slider end -->

</header>

<section class="Services " id="services">
    <h1 class="garage animated bounce">THE CORNER GARAGE FOR COLLECTOR CARS</h1>
    <div class="grid-container">
        @foreach($services as $service)
        <div class="grid-item" data-aos="fade-right">
            <a href="#">
            <div class="animation">
            <img class="img-responsive" src="/storage/cover/{{$service->cover_image}}">
            </div>
            <p>{{$service['title']}}</p>
        </a>
        </div>
        @endforeach
    </div>
    <div class="road-animation"><div id="marquee" class="marquee"><img  class="volvo" src="images/volvo.png"></div></div>



</section>
<section class="contact-us " id="contact-us">
   <div class="map" data-aos="zoom-in"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1360968832046!2d44.782830215544244!3d41.71758198342268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1526394010215" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><div class="contact" ></div>
   </div>
       <div class="contact" >
        <div class="left" data-aos="fade-right">
    <h1 class="hide">CONTACT</h1>
    <h1 class="hide">INFORMATION</h1>
        <div class="left-bottom">
            <div class="left-bottom-text">
    <h1 class="click animated pulse">CLICK TO </br> VIEW</h1>
            </div>
    <ul>
         @foreach($socials as $social)
        <li><a href="{{$social->link}}"><img class="img-responsive soc-icon" src="/storage/social/{{$social->icon}}"></a></li>
         @endforeach
    </ul>
    </div>
    </div>


    <!--  -->
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif






    <!--  -->
    <form  method="post" action="{{url('/')}}" enctype="multipart/form-data" class="right" >
        {{csrf_field()}}
        <div class="text-area">

        <h1 class="right-text" data-aos="fade-left">GET  IN  TOUCH</h1>
        <div class="row">
          <div class="form-group">
            <input class="input"  type="text" class="form-control" placeholder="Enter name: " name="name" required>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group">
            <input type="text" class="input" class="form-control" placeholder="Enter email: " name="email" required>
          </div>
        </div>
        <div class="row">
          
          <div class="form-group">
            <input type="text" class="input" class="form-control" placeholder="Enter subject: " name="subject" required>
          </div>
        </div>
       <div class="row">
          
          <div class="form-group" required>
            <input type="text" class="input" class="form-control" placeholder="Enter text: " name="text" required>
          </div>
        </div>
<!--           <div class="row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter gender: " name="gender" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter newsletter: " name="newsletter" required>
          </div>
        </div> -->
      </div>


<!--         <div class="text-area">
            <input  type="text"  name="name" placeholder="name.." required>
            <input  type="text"  name="email" placeholder="email.." required>
            <input  type="text"  name="subject" placeholder="subject.." required>
            <textarea  id="text"  required placeholder="text.."></textarea>
            <input  type="text"  name="gender" placeholder="gender.." required>
             <input  type="text" name="newsletter" placeholder="newsletter.." required>
        </div> -->
        <div class="check-box">
        <label class="container">Male
            <input type="radio" name="gender" value="male" checked>
            <span class="checkmark"></span>
        </label>
        <label class="container">Famale
            <input type="radio" name="gender" value="female">
            <span class="checkmark"></span>
        </label>

    <h1 class="costom">Sign up for newsletter:</h1>
    <label class="container2"><p>recive images</p>
        <input type="checkbox" name="newsletter" value="recive images">
        <span class="checkmark2"></span>
    </label>
    <label class="container2"><p>recive promotions</p>
        <input type="checkbox" name="newsletter" value="recive promotions">
        <span class="checkmark2"></span>
    </label>
    <label class="container2" ><p>recive updates</p>
        <input type="checkbox" name="newsletter" value="recive updates">
        <span class="checkmark2"></span>
    </label>
    <label class="container2" ><p>recive job offers</p>
        <input type="checkbox" name="newsletter" value="recive job offers">
        <span class="checkmark2"></span>
    </label>
</div>



<div class="line"><input type="submit" class="button" value="send"></div>
    </form>
    <footer>
    <p class="footer-left">© copyright 2018</p>
    <p class="footer-right">created by: Giga Gabatashvili & Irakli Banetishvili</p>
    </footer>
</div>
</section>
<script src="js/JavaScript.js"></script>

</body>
</html>