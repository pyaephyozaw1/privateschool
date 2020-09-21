@extends('frontend.master')

    @section('content')
    <div class="container-fluid my-4">
    <h1 style="color: black">Contact Us</h1>
    </div>
    <div class="container-fluid">
    <div class="row ">
      <div class="col-12">

      	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61089.31139243636!2d96.10508891327626!3d16.87183959078241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ce696dd4f7%3A0x8e6136e36e0ca442!2sInsein%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1599808592420!5m2!1sen!2smm" width="100%" height="290px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        
      </div>
    </div>
	</div>

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