<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Nest</title>
	<?= link_tag('assets/css/style.css')?>

	<style>
	
	.leftpart{
		float:left;
		width:50%;
		height: 50px;
		margin: 75px auto;
	}
	.leftpart p{
		font-size: 30px;
		color: white;
		text-align: center;
	}
	.rightpart{
		float: right;
		width: 50%;
		height: 100px;
		margin: 50px auto;		
	}
	.rightpart h1{
		font-size: 25px;
		color: yellow;
		text-align: center;
		padding-bottom: 20px;
	}
	.rightpart p{
		font-size: 20px;
		color: white;
		line-height: 3px;
		margin-left: 165px;
	}
	</style>
</head>

<body>

	 <!--============= Header Part  start =================-->
	<div class="head1">
		<div class="head2">


			<a href="<?= base_url('homepage')?>"><?php echo img('images/logo2.png')?> </a>
			<a href="<?= base_url('logInPage/employee_login')?>"><button>Log In</button></a>

		</div>
		
	</div>
	 <!--============= Header Part  ends =================-->

	 <div class="background">
	 	<div class="quotes">
	 		<p>Those who support orphans and the impoverished people will be honored by Allah(SWT).</p>
	 		<h1>-Imam Ali(a.s)</h1>
	 	</div>
	 </div>


		<!--============= Option Part for Homepage start =================-->
		<div class="who">
			<div class="who1">
				<div class="whoClass">
					<img src="images/who.png">
					<p>Who We Are</p>
					<h1>The Nest is a non-profit organization that brings life-changing care to the orphans.</h1>
				</div>

				<div class="mission">
					<img src="images/mission.png">
					<p>Our Mission</p>
					<h1>Our mission is simple. The Nest stands for orphaned children and helps them thrive in real time. We’ve created a measurable, repeatable and  method to ensure that orphans are educated, fed, loved and safe. At the same time, we explore every avenue to reunite them with their relatives, when possible.</h1>
				</div>
			</div>
		</div>
		<!--============= Option Part for Homepage ends =================-->

		<!--============= Valunteer Part for Homepage start =================-->

		<div class="valunteer">
			<div class="aboutValunteer">

				<div class="aboutPart">

					<img src="images/volunteer.png">

					<p>Volunteers play an important role in our organization, providing much-needed support, assistance, and individual attention that is crucial for children’s growth and development.We happily invite you to be a part of us.</p>

					<h1>Sign Up to be a part of us.</h1>

				</div>

			</div>

			<div class="signUpValunteer">
  			<form action="<?php echo site_url('e_volunteerpage/save');?>"method="post"> 
				<div class="valunteerForm">
					<div class="innerValunteerForm">
						<div class="VnameEntry">
						<p>Name</p>
						
						<input type="text" placeholder="First Name" name="volunteer_first_name" required="required"/>
						<input type="text" placeholder="Last Name" name="volunteer_last_name" required="required"/>	
						</div>
						<div class="VsexEntry">
								<p>Gender</p>
							<select name="volunteer_gender" required="required">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Others">Others</option>
							</select>
						</div>
						<div class="VcontactEntry">
							<p>Phone</p>
							<input type="Number" name="phone_number" required="required">

						</div>
						
						<div class="VemailEntry">
						<p>Email</p>
						
						<input type="email" placeholder="Email" name="email" required="required"/>
						</div>

						<a href="<?= base_url('home')?>"><button>Sign Up</button></a>	
					
					</div>

				</div>
			</div>
		</div>

		<!--============= Valunteer Part for Homepage ends =================-->

		<!--============= Footer Part for starts =================-->
		<div class="footer">
			<div class="bottom">
				<div class="leftpart">
					<p>{The Nest Foundation}</p>

				</div>

				<div class="rightpart">
					<h1>Contact for further Information</h1>
					<p>Bashundhara Residential Area,</p> <br>
					<p>Dhaka,</p> <br>
					<p>Bangladesh.</p>
				</div>
			</div>
		</div>
		<!--============= Footer Part for ends =================-->







</body>
</html>