@extends('frontend.master')

    @section('content')
    <div class="aa">
    {{--  start slide --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('frontend/images/imagess/3.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{asset('frontend/images/imagess/ed11.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{asset('frontend/images/imagess/4.jpg')}}" class="d-block w-100" alt="...">
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- end slide --}}

    <div class="container my-5">
      <div class="row"> 
        <h1>Why Choose Us?</h1>
        <p style="font-family: Arial;font-size: 20px;position: relative;
    letter-spacing: 1.5px">It’s as simple as 1+1.  We offer a one student to one teacher ratio. That means your child will receive tailored learning with personalized mentoring, one lesson at a time. We call this, the Power of One.The world has changed significantly since we were kids. It’s now faster, stronger, and smarter than ever. Competition for excellence has never been greater. If you want your child to have a head start in life, come discover the Power of One.  Traditional classrooms provide a level playing field at best along with plenty of obstacles for hindering advanced achievement. And that’s really not good enough for parents who want their children to be better than average.</p>
      </div>
    </div>

   <div class="container my-4">
     <div class="row" >
       <h1>The Power of One:</h1>
       <p style="font-family: Arial;font-size: 20px;position: relative;
    letter-spacing: 1.5px" class="my-2">Through our 1-to-1 classrooms, our students all receive individual attention from his/her teacher. This is a powerful thing. It means that each student matters to our teachers and allows us to deliver “One Success Story at a Time.”</p>
     </div>
   </div>

   <div class="speakers" class="my-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      {{-- <div class="col-7">
        <h2 class="secondary text-uppercase">Event Speaker</h2>
        <p class="teritary">Here are some of our speakers</p>
        <hr>
      </div> --}}
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3"><div class="speaker"><img src="{{asset('frontend/images/imagess/pm.jpg')}}" class="img-fluid"><div class="detail">
        <h3 style="color: white">Personalized Mentoring</h3>
        <p style="color: white">Not only will our teachers work to accelerate each student’s learning today, they will help each student develop the skills that will help them achieve the next level of academic achievement.</p>
      </div></div>
    </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3"><div class="speaker"><img src="{{asset('frontend/images/imagess/tll.jpg')}}" class="img-fluid"><div class="detail">
        <h3 style="color: white">Tailored Learning</h3>
        <p style="color: white">No two students learn the same.  Our teachers get to know each of their students to develop an education program perfectly suited to the student and it is successed</p>
      </div></div>
    </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 my-3"><div class="speaker"><img src="{{asset('frontend/images/imagess/csm.jpg')}}" class="img-fluid"><div class="detail">
        <h3 style="color: white">Custom Made Education</h3>
        <p style="color: white">In 1-to-1 classrooms, the academic program can be modified to achieve the student need.  Programs will vary by pace and depth of learning as well as student interest.</p>
      </div></div>
    </div>
  </div>
  </div>
</div>
      <div class="container my-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <h2 class="secondary text-uppercase text-center " >Welcome To <br> Matrix Private School</h2>
        </div>
        
        <div class="row my-4">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <img src="{{asset('frontend/images/imagess/ww.jpg')}}" width="100%" height="30%" class="img-fluid">
            </div>
         
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              
            <p style="font-family: Arial;font-size: 20px;position: relative;letter-spacing: 1.5px;float: left;">We follow a holistic approach to teaching that builds a strong social and emotional foundation in the early years so that students can thrive academically in the later years.  Our approach instills a life-long love of learning, a sense of global awareness, and the confidence and resilience needed for students to achieve their dreams.</p>
            </div>
        </div>
      </div>

    </div>
    @endsection