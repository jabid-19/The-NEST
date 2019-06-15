<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Entry Of Adopter</title>
	<?= link_tag('assets/css/style.css')?>
</head>
<body>
		 <!--============= Header Part for Homepage start =================-->
	<div class="head1">
		<div class="head2">


			<a href="<?= base_url('logInPage/employee_logout')?>"><button>Log Out</button></a>

		</div>
		
	</div>
	 <!--============= Header Part for Homepage ends =================-->
	 <!--============= Information part  for data entry page start =================-->
	
	<div class="headerEntry">
		<p>Adopter Information Entry</p>
	</div>
	
	<div class="infoEntry5">

		<form action="<?php echo site_url('e_adoptionpage/save');?>"method="post">

			<div class="infoEntry3">
				
				<div class="nameEntry">
				<p>Name</p>
				
				<input type="text" name="adopter_first_name" placeholder="First Name" required="required"/>
				<input type="text" name="adopter_last_name" placeholder="Last Name" required="required"/>	
				</div>
				
				<div class="BdateEntry">
				
				<p>Date of Birth</p>
				<input type="date" name="adopter_birth_date" required="required">

				</div>

				<div class="sexEntry">
						<p>Gender</p>
					<select name="adopter_gender" required="required">
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="others">Others</option>
					</select>
				</div>

				<div class="nidEntry">
					<p>NID No</p>
					<input type="number" name="adopter_nid_number" required="required">
				</div>	

				<div class="contactEntry">
					<p>Contact Number</p>
					<input type="Number" name="adopter_contact_number" required="required">
				</div>	
	
				<div class="emailEntry">
					<p>Email Id</p>
					<input type="email" name="adopter_email_id" required="required">
				</div>
				<div class="addEntry" >
					<p>Address</p>
					<textarea name="adopter_address" required="required"></textarea>
				</div>

				<div class="occupationEntry">
					<p>Occupation</p>
					<input type="text" name="adopter_occupation" required="required">
				</div>

				<div class="orphan_name_Entry">
					<p>Orphan's Name</p>
					<input type="text" name="orphan_name" required="required">
				</div>

				<div class="orphan_ID_Entry">
					<p>Orphan ID</p>
					<input type="Number" name="orphan_id" required="required">
				</div>

				<div class="adoption_dateEntry">
				
				<p>Date of Adoption</p>
				<input type="date" name="adoption_date" required="required">

				</div>

				<div class="couse_Entry">
						<p>Cause of Adoption</p>
						<h1>(If Any)</h1>
						<textarea name="adoption_coz"></textarea>
				</div>
					

				<a ><input type="submit" value="save" name="orphan_submit"></a>
			</form>
	
		</div>
		
	</div>

	 <!--============= Information part  for data entry page ends =================-->
	

</body>
</html>