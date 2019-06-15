<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Entry Of Employee</title>
	<?= link_tag('assets/css/style.css')?>
</head>
<body>
		 <!--============= Header Part for Homepage start =================-->
	<div class="head1">
		<div class="head2">


			<a href="<?= base_url('admin_loginpage/admin_logout')?>"><button>Log Out</button></a>

		</div>
		
	</div>
	 <!--============= Header Part for Homepage ends =================-->
	 <!--============= Information part  for data entry page start =================-->
	
	<div class="headerEntry">
		<p>Employee Information Entry</p>
	</div>
	
	<div class="infoEntry0">

		<form action="<?php echo site_url('admin_employeepage/save');?>"method="post">

			<div class="infoEntry2">
				
				<div class="nameEntry">
				<p>Name</p>
				
				<input type="text" name="employee_first_name" placeholder="First Name" required="required" />
				<input type="text" name="employee_last_name" placeholder="Last Name" required="required"/>	
				</div>
				
				<div class="BdateEntry">
				
				<p>Date of Birth</p>
				<input type="date" name="employee_birth_date" required="required">

				</div>
				
					<div class="sexEntry">
							<p>Gender</p>
						<select name="employee_gender" required="required">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="others">Others</option>
						</select>
					</div>

					<div class="nidEntry">
						<p>NID No</p>
						<input type="number" name="employee_nid_number" required="required">
					</div>	

					<div class="relEntry">
							<p>Religion</p>
						<input type="text" name="employee_religion" required="required">
					</div>
					
					<div class="bloodEntry">
						<p>Blood Group</p>
						<select name="employee_blood_group" required="required">
							<option value="-">Unknown</option>
							<option value="O-">O-</option>
							<option value="O+">O+</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B- </option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							
						</select>
					</div>

					<div class="addEntry" >
						<p>Address</p>
						<textarea name="employee_address" required="required"></textarea>
					</div>

					<div class="contactEntry">
						<p>Contact Number</p>
						<input type="Number" name="employee_contact_number" required="required">
					</div>

					<div class="emailEntry">
						<p>Email Id</p>
						<input type="email" name="employee_email_id" required="required">
					</div>

					<div class="fatherEntry">
						<p>Father's Name</p>
						<input type="text" name="employee_father_name" required="required">
					</div>

					<div class="motherEntry">
						<p>Mother's Name</p>
					<input type="text" name="employee_mother_name" required="required">
					</div>

					<div class="salaryEntry">
						<p>Salary</p>
						<input type="number" name="employee_salary" required="required">
					</div>

					<div class="hiredateEntry">
						<p>Hire Date</p>
						<input type="date" name="employee_hire_date" required="required">
					</div>

					<div class="jobtitleEntry">
						<p>Job Title</p>
						<input type="text" name="employee_job_title" required="required" >
					</div>

					<div class="username">
						<p>Username</p>
						<input type="text" name="username">
					</div>

					<div class="password">
						<p>Password</p>
						<input type="text" name="password">
					</div>
					
					<div class="specialEntry" >
						<p>Special Case</p>
						<h1>(If Any)</h1>
						<textarea name="employee_specialcase"></textarea>
					</div>
					

				<a ><input type="submit" value="save" name="orphan_submit"></a>
			</form>
	
		</div>
		
	</div>

	 <!--============= Information part  for data entry page ends =================-->
	

</body>
</html>