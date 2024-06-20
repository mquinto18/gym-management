<?php

	$root = mysqli_connect("localhost", "root", "", "gym_management");

	if (isset($_GET['subscriptionExpired']) && $_GET['subscriptionExpired'] == 'true') {
		// Display the alert after 5 seconds
		echo '<script>
				setTimeout(function(){
					alert("Subscription Expired. You will be signed out.");
					window.location.href = "registration.php";
				}, 5000);
			</script>';
	}

	if (isset($_GET['subscriptionExpired1']) && $_GET['subscriptionExpired1'] == 'true') {
		// Display the alert after 5 seconds
		echo '<script>
				setTimeout(function(){
					alert("Subscription Expired. You will be signed out.");
					window.location.href = "registration.php";
				}, 10000);
			  </script>';
	}

	if (isset($_GET['subscriptionExpired2']) && $_GET['subscriptionExpired2'] == 'true') {
		// Display the alert after 5 seconds
		echo '<script>
				setTimeout(function(){
					alert("Subscription Expired. You will be signed out.");
					window.location.href = "registration.php";
				}, 20000);
			  </script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
 
 <header>
	<div class="upper-right">
	 <button id="logoutButton">Logout</button>
	</div>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">GYM<span>MANAGEMENT</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#Home">Home</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#service">Services</a></li>
				<li><a href="#coaches">Coaches</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#schedule">Schedule</a></li>
 	 			<li><a href="#price">Subscription</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>


  <section class="home wow flash" id="Home">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s"><span>All </span><span> progress takes place</span></h1>
  	 	  <h1 class="wow slideInRight" data-wow-delay="1s"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outside</span> <span>the comfort zone</span></h1>
  	 </div>
  	      <a href="#about" class="go-down">
  	      	  <i class="fa fa-angle-down" aria-hidden="true"></i>
  	      </a>
  </section>
  
  <section class="about" id="about">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box wow bounceInUp">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="css/about1.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Free Consultation</h4>
                       	   <p>Ready to take the first step towards a healthier, stronger you? We're offering a FREE consultation to help you get started. During your consultation, we'll
							Discuss Your Goals. Let us know what you want to achieve, whether it's weight loss, muscle gain, improved fitness, or all of the above.
							Assess Your Fitness Level: Our trainers will evaluate your current fitness level to create a customized plan just for you.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box wow bounceInUp" data-wow-delay="0.2s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="css/about2.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Best Training</h4>
                       	   <p>Unlock Your Potential with Our Comprehensive Gym Training Programs. Our expert trainers will guide you through personalized workouts, nutritional guidance, and motivation, ensuring you achieve your fitness goals. From strength training to cardio, we have the perfect program for you. Join us and embark on a journey to a healthier, stronger you! &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="css/about3.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Build Perfect Body</h4>
                       	   <p>Strive for the Perfect Body at Our Gym! Our state-of-the-art facility is your gateway to sculpting the physique you've always dreamed of. Our certified trainers will design a tailored workout plan, combining strength, cardio, and nutrition to help you achieve your ideal body. Whether you seek muscle definition, weight loss, or overall wellness, we're here to support your &nbsp;&nbsp;&nbsp;&nbsp;journey towards the perfect body. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>

 <section class="service" id="service">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="text box wow slideInLeft">
                  <h2>Services</h2>
                  <p>Equipment Sales: We offer a wide selection of high-quality gym equipment, from treadmills and ellipticals to strength training machines and free weights. Our products are sourced from reputable manufacturers, ensuring durability and performance. </p>
				  <p>Equipment Installation: Our experienced technicians provide professional installation services to ensure that your gym equipment is set up correctly and safely. We pay attention to detail to optimize the functionality and safety of each machine. </p>				
				  <p>Maintenance and Repairs: Regular maintenance is essential to keep your gym equipment running smoothly and extend its lifespan. We offer scheduled maintenance services and quick repairs to minimize downtime and ensure the safety of your users. </p>				
				  <p>Equipment Upgrades: Stay ahead of the curve with our equipment upgrade services. We can help you modernize your gym by integrating the latest technology and features into your existing equipment. </p>					
				  <p>Consultation and Design: Our experts can assist you in designing a functional and attractive gym layout. We consider space optimization, equipment selection, and user flow to create an inviting fitness environment.	</p>				
				  <p>Equipment Rental: Hosting a special event or need temporary equipment? We offer equipment rental options to meet your short-term fitness needs.</p>
 		 	  </div>
 		 	  <div class="accordian box wow slideInRight">
 		 	  	    <div class="accordian-container active">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Cardiovascular Equipment</h4>
 		 	  	    		<span class="fa fa-angle-down"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Designed to provide aerobic or cardiovascular exercise. The primary use of cardiovascular equipment is to improve cardiovascular health, increase endurance, and burn calories.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Strength Training Equipment</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Refers to a wide range of machines, devices, and tools designed to help individuals build and improve their muscular strength, endurance, and power. Strength training, also known as resistance training or weightlifting, involves working against resistance to stimulate muscle growth and development.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Group Fitness Class</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>organized workout sessions led by a certified fitness instructor. These classes bring together individuals with similar fitness goals and interests to exercise and have fun in a group setting. Group fitness classes offer several benefits, including motivation, social interaction, variety in workouts, and expert guidance.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  	    <div class="accordian-container">
 		 	  	    	<div class="head">
 		 	  	    		<h4>Other Services</h4>
 		 	  	    		<span class="fa fa-angle-up"></span>
 		 	  	    	</div>
 		 	  	    	<div class="body">
 		 	  	    		<p>Personal Training: Hire certified personal trainers who can provide one-on-one or small group training sessions tailored to individual fitness goals and needs.</p>
							<p>Nutrition Counseling: Offer nutrition consultations and meal planning services to help members make healthier food choices and achieve their fitness goals.</p>
							<p>Group Fitness Challenges: Organize fitness challenges or competitions to motivate members and build a sense of community.</p>
							<p>Childcare Services: Provide on-site childcare facilities or supervised play areas, making it easier for parents to work out.</p>
							<p>Health Assessments: Conduct fitness assessments, body composition measurements, and health screenings to track progress and set fitness goals.</p>
 		 	  	    	</div>
 		 	  	    </div>
 		 	  </div>
 		 </div>
 	</div>
 </section>
 <!-- End Service -->

 <section class="coaches" id="coaches">
	
	<h1><p style="font-size: 40px; font-weight: 500;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Available Coaches</p></h1>
	<div id="container">
        <ul id="item-list">
			<li onclick="changeImage('maverick.png')"><u>Maverick&nbsp;Bautista</u></li>
            <li onclick="changeImage('rendon.png')"><u>Rendon&nbsp;Labrador</u></li>
            <li onclick="changeImage('eric.png')"><u>Eric&nbsp;Eruption&nbsp;Tai</u></li>
			<br><br><br><br><br><br><br><br>

        </ul>
        <div id="image-container">
            <img id="displayed-image" src="css/maverick.png" alt="Default Image">
		</div>
		<div class="content">
			<div class="text box wow slideInLeft">
			</div>	
			<div class="accordian box wow slideInRight">
				<h1><p style="font-size: 40px; font-weight: 500; text-align: center;">Coaches&nbsp;Profile</p></h1>
				<div class="accordian-container active">
					<div class="head">
						
						<h4>Coach Maverick</h4>
						<span class="fa fa-angle-down"></span>
					</div>
					<div class="body">
						<p>Name: Maverick Bautista</p>
						<p>Class: Cardio Training</p>
						<p>Experience:</p>
						<p>Coach Maverick has a wealth of experience in the field of cardio fitness training, with over 7 years of coaching and training individuals with varying fitness levels and backgrounds.</p>
						<p>Credentials:</p>
						<p>•&nbsp;Certified Cardio Fitness Instructor</p>
						<p>•&nbsp;Certified Personal Trainers (NSCA-CPT)</p>
						<p>•&nbsp;CPR and First Aid certified</p>
						<p>Areas of Expertise:</p>
						<p>Cardiovascular Fitness, Interval Training, Strength and Cardio Integration, Nutrition Guidance and Injury Prevention.</p>
					</div>
				</div>
				<div class="accordian-container">
					<div class="head">
						<h4>Coach Rendon</h4>
						<span class="fa fa-angle-up"></span>
					</div>
					<div class="body">
						<p>Name: Rendon Labrador</p>
						<p>Class: Strength Training</p>
						<p>Experience:</p>
						<p>Coach Rendon has a wealth of experience in the field of strength training, with over 8 years of coaching and training clients of various fitness levels and backgrounds.</p>
						<p>Credentials:</p>
						<p>•&nbsp;Certified Strength and Conditioning Specialist (CSCS)</p>
						<p>•&nbsp;Bachelor's Degree in Exercise Science or related field</p>
						<p>•&nbsp;CPR and First Aid certified</p>
						<p>Areas of Expertise:</p>
						<p>Strength Training Programs, Form and Technique, Periodization, Nutrition Guidance and Injury Prevention.</p>
					</div>
				</div>
				<div class="accordian-container">
					<div class="head">
						<h4>Coach Eric</h4>
						<span class="fa fa-angle-up"></span>
					</div>
					<div class="body">
						<p>Name: Eric Eruption Tai</p>
						<p>Class: Yoga Training</p>
						<p>Experience:</p>
						<p>Coach Eric has a deep and profound connection with yoga, with over 11 years of experience as a yoga instructor.</p>
						<p>Credentials:</p>
						<p>•&nbsp;Certified Yoga Instructor (RYT 200/RYT 500, Yoga Alliance)</p>
						<p>•&nbsp;Certifications in specific yoga styles (Hatha, Vinyasa, Ashtanga, Bikram and Yin)</p>
						<p>•&nbsp;CPR and First Aid certified</p>
						<p>Areas of Expertise:</p>
						<p>Yoga Styles, Meditation and Mindfulness, Yoga Philosophy, Individualized Instruction, and Injury Prevention and Rehabilitation.</p>
					</div>
				</div>
				</div>
		</div>
  </div>
</div>
</div>
</section>
<!-- Start Classes -->
<section class="classes" id="classes">
	<div class="container">
		 <div class="content">
		 	  <div class="box img wow slideInLeft">
		 	  	 <img src="css/class2.png" alt="classes" />
		 	  </div>
		 	  <div class="box text wow slideInRight">
		 	  	 <h2>Our Classes</h2>
		 	  	 <p>Gym classes offer an incredible opportunity to amplify your fitness journey in a supportive and motivating environment. Imagine being surrounded by like-minded individuals, all striving toward their fitness goals alongside you. These classes aren't just about the workout; they're a community, a shared experience that fuels your determination and drives results. From high-energy cardio sessions to mind-centering yoga classes, there's a class tailored to every fitness level and preference. </p>
		 	  	<div class="class-items">
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-img">
                     	 <img src="css/class1.jpg" alt="classes" />
                     	 <div class="price">
							₱999
                     	 </div>
                     </div>
                     <div class="item-text">
                     	  <h4>Cardio Training</h4>
                     	  <p>Cardiovascular training offers a myriad of benefits that extend far beyond just improving your heart health. Engaging in regular cardio workouts, whether it's running, cycling, swimming, or any other aerobic activity, significantly enhances your overall well-being.</p>
                     	  <a href="">Get Details</a>
                     </div>
		 	  	 </div>
		 	  	 <div class="item wow bounceInUp">
                     <div class="item-text">
                     	  <h4>Strength Training</h4>
                     	  <p>Strength training is a transformative practice that goes well beyond building muscle mass. It's a cornerstone of fitness that fortifies both body and mind. By engaging in resistance exercises like lifting weights, using resistance bands, or doing bodyweight exercises, you're not just sculpting muscles; you're strengthening bones, tendons, and ligaments, enhancing overall stability and reducing the risk of injury.</p>
                     	  <a href="">Get Details</a>
                     </div>
                     <div class="item-img">
                     	 <img src="css/class1.jpg" alt="classes" />
                     	 <div class="price">
							₱999
                     	 </div>
                     </div>
		 	  	 </div>
		 	  	</div>
		 	  </div>
		 </div>
	</div>
</section>
<!-- End Classes -->

<!-- Start Today -->
 <section class="start-today">
 	<div class="container">
 		 <div class="content">
 		 	  <div class="box text wow slideInLeft">
 		 	  	 <h2>Start Your Training Today</h2>
 		 	  	 <p>Exercise isn't just about getting fit; it's a journey toward feeling empowered and alive. Each workout is an investment in yourself, not just for the body but for the mind and soul. It's about breaking barriers, setting new goals, and pushing beyond limits you once thought impossible. The moment you start, you embark on a path of self-discovery and resilience. Embrace the burn, relish the sweat, for in these moments, you're sculpting not just muscles, but an unbreakable spirit. Every workout is a celebration of your strength, dedication, and commitment to becoming the best version of yourself. So, lace up those shoes, hit the gym, or step outside—because every drop of sweat is a step closer to a more vibrant, confident, and fulfilled you.</p>
 		 	  </div>
 		 	  <div class="box img wow slideInRight">
 		 	  	 <img src="css/gallery4.jpg" alt="start today" />
 		 	  </div>

 		 </div>
 	</div>
 </section>
<!-- End Start Today -->

<!-- Start Schedule -->
  <section class="schedule" id="schedule">
  	 <div class="container">
  	 	  <div class="content">
  	 	  	   <div class="box text wow slideInLeft">
  	 	  	   	   <h2>Classes Schedule</h2>
  	 	  	   	   <p>
					Class schedules are structured timetables that detail the timing, duration, and specifics of classes offered by fitness centers providing instructional sessions. Class schedules serve as a guide for participants, aiding them in selecting and attending classes that suit their interests, skill levels, and daily schedules.
  	 	  	   	   </p>
  	 	  	   	   <img src="css/schedule1.png" alt="schedule" />
  	 	  	   </div>
  	 	  	   <div class="box timing wow slideInRight">
                   <table class="table">
                   	 <tbody>
                   	 	<tr>
                   	 		<td class="day">Monday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Cardio Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Tuesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Strength Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:211</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Wednesday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Yoga Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:212</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Thursday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Cardio Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:210</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Friday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Strength Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:211</td>
                   	 	</tr>
                   	 	<tr>
                   	 		<td class="day">Saturday</td>
                   	 		<td><strong>9:00 AM</strong></td>
                   	 		<td>Yoga Training <br/> 9:00 to 10:00 AM</td>
                   	 		<td>Room No:212</td>
                   	 	</tr>
                   	 </tbody>
                   </table>
  	 	  	   </div>
  	 	  </div>
  	 </div>
  </section>
<!-- End Schedule -->

<!-- Start Gallery -->
  <section class="gallery" id="gallery">
  	 <h2>Workout Gallery</h2>
  	<div class="content">
  		 <div class="box wow slideInLeft">
  		 	 <img src="css/gallery1.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="css/gallery2.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInLeft">
  		 	 <img src="css/gallery3.jpg" alt="gallery" />
  		 </div>
  		 <div class="box wow slideInRight">
  		 	 <img src="css/gallery4.jpg" alt="gallery" />
  		 </div>
  	</div>
  </section>
<!-- End Gallery -->

 <!-- Start Subscription -->
  <section class="price-package" id="price">
  	 <div class="container">
  	 	  <h2>Choose Your Package</h2>
  	 	  <p class="title-p">Understanding the offerings and terms of a subscription or membership helps individuals choose the most suitable option based on their preferences and requirements.</p>
  	 	  <div class="content">
  	 	  	  <div class="box wow bounceInUp">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
						₱999/Month
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="css/price1.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Basic Membership</h3>
  	 	  	  	  	   	  <p>Standard Gym Access</p>
  	 	  	  	  	   	  <p>Limited Classes</p>
  	 	  	  	  	   	  <p>Standard Locker Room Amenities</p>
  	 	  	  	  	   	  <p>Standard Hours</p>
						  <p>Free WIFI</p>
  	 	  	  	  	   	  <a href="membership 1.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.2s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
						₱2999/5 months
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="css/price2.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Premium Membership</h3>
  	 	  	  	  	   	  <p>Full Gym Access</p>
  	 	  	  	  	   	  <p>Expanded Class Selection</p>
  	 	  	  	  	   	  <p>Enhanced Locker Room Amenities</p>
  	 	  	  	  	   	  <p>Extended Hours</p>
  	 	  	  	  	   	  <p>Free WIFI</p>
  	 	  	  	  	   	  <a href="membership 2.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  	  <div class="box wow bounceInUp" data-wow-delay="0.4s">
  	 	  	  	  <div class="inner">
  	 	  	  	  	   <div class="price-tag">
						₱6999/Year
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="img">
  	 	  	  	  	   	 <img src="css/price3.jpg" alt="price" />
  	 	  	  	  	   </div>
  	 	  	  	  	   <div class="text">
  	 	  	  	  	   	  <h3>Deluxe Membership</h3>
  	 	  	  	  	   	  <p>All-Inclusive Access</p>
  	 	  	  	  	   	  <p>Unlimited Classes</p>
  	 	  	  	  	   	  <p>Luxury Locker Room Amenities</p>
  	 	  	  	  	   	  <p>Priority Access and Extras</p>
  	 	  	  	  	   	  <p>Free WIFI</p>
  	 	  	  	  	   	  <a href="membership 3.php" class="btn">Join Now</a>
  	 	  	  	  	   </div>
  	 	  	  	  </div>
  	 	  	  </div>
  	 	  </div>
  	 </div>
  </section>

  <section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
               <form>
                  <input type="text" placeholder="Enter Name">
                  <input type="text" placeholder="Enter Email">
                  <input type="text" placeholder="Enter Mobile">
                  <textarea placeholder="Enter Message"></textarea>
                  <button type="submit">Send Message</button>
               </form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Get Connected with Gym</h2>
                  <p class="title-p">"YOUR GYM, YOUR TRIBE!" Highlight the idea that the gym is not just a place to work out but a place to find like-minded individuals who share your fitness journey.</p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span>Pag-asa street Caniogan, Pasig city</li>
                          <li><span class="fa fa-phone"></span>8-7000</li>
                          <li><span class="fa fa-envelope"></span> mekusmekus@gmail.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href=""><span class="fa fa-facebook"></span></a>
                       <a href=""><span class="fa fa-linkedin"></span></a>
                       <a href=""><span class="fa fa-skype"></span></a>
                       <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>

                  <div class="copy">
                      PowerBy &copy; Power Ranger
                  </div>
            </div>
        </div>
     </div>
  </section>
 <!-- End Contact -->



 <!-- jquery -->

<script src="jjsjs.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script src="wow.min.js"></script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
  </script>
  <script>
	function changeImage(imageSrc) {
            const displayedImage = document.getElementById("displayed-image");
            displayedImage.src = imageSrc;
        }
  </script>
  <script>
  const logoutButton = document.getElementById('logoutButton');
  logoutButton.addEventListener('click', function() {
	alert('You are now logged out.');
	window.location.href = 'registration.php';
  });
</script>

</body>
</html>