@extends('frontend.master')

    @section('content')
    <div class="container-fluid my-4">
    <h1 style="color: black">About</h1>
    </div>
    <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
      </div>
    </div>
	</div>
	 <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" style="width: 150px;height: 150px;" src="{{asset('frontend/images/c.png')}}" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Lacy Whitelong</strong></p>
                        <p class="job-title">Principle</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" style="width: 150px;height: 150px;" src="{{asset('frontend/images/b.jpg')}}" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Chris Brown</strong></p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" style="width: 150px;height: 150px;" src="{{asset('frontend/images/d.png')}}" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Sheila Zimerman</strong></p>
                        <p class="job-title">Department of Management(Head)</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" style="width: 150px;height: 150px;" src="{{asset('frontend/images/a.jpg')}}" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Mary Villalonga</strong></p>
                        <p class="job-title">Department of Teaching(Head)</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->
	<div class="container my-4">
		<div class="row">
			<div class="col-8 font-italic">
				<h4 style="color: blue"><strong>The Matrix School has been in Yangon since 2018.  Our facility is located at 14 S. Insein Rd.</strong></h4>
				<p style="color: black">Each of our students receives tailored learning with personalized mentoring, one lesson at a time.  Contact us today to learn more about the Houston private school that customizes then learning environment for each and every student! </p>
					<form action="#" method="">
					<div class="row">
						<div class="col-lg-4">
							<input type="text" class="form-control form-group"  placeholder="Name (required)">
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control form-group"  placeholder="Email (required)">
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control form-group"  placeholder="Subject (required)">
						</div>
					
						<div class="col-lg-12">
							<textarea rows="4" placeholder="Message" class="form-control form-group"></textarea>
						</div>
						<div class="my-2">
							<input type="submit" class=" btn btn-primary mx-3 " value="Submit Form"> 
						</div>

					</div>
					</form>	
					
			</div>

				<div class="col-4 font-italic">
						<h4 style="color: blue">Contact Info</h4>
						<p style="color: black">
							35 South Insein<br>
							Yangon, Insein Street
						</p>
						<p style="color: black">
							Phone: 09-459056060<br>
							Email: matrix@tenneyschool.com
						</p>

						<h4 style="color: blue">Get Social</h4>
						<div>
		<a href="http://www.facebook.com"><img src="{{asset('frontend/images/imagess/facebook.jpg')}}" width="10%" height="60%"></a>					
        <a href="http://www.twinter.com"><img src="{{asset('frontend/images/imagess/twinter.png')}}" width="10%" height="40%"></a>
        <a href="http://www.instagram.com"><img src="{{asset('frontend/images/imagess/instagram.jpg')}}" width="10%" height="40%"></a>
						</div>
				</div>

				</div>
		</div>

   

    @endsection