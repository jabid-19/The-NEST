<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Entry Of Orphans</title>
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
		<p>Orphan Information Entry</p>
	</div>
	
	<div class="infoEntry">

		<form action="<?php echo site_url('admin_orphanpage/save');?>"method="post">

			<div class="infoEntry1">
				
				<div class="nameEntry">
				<p>Name</p>
				
				<input type="text" name="orphan_first_name" placeholder="First Name" />
				<input type="text" name="orphan_last_name" placeholder="Last Name" required="required"/>	
				</div>
				
				<div class="BdateEntry">
					<p>Date of Birth</p>
					<input type="date" name="orphan_birth_date" required="required">
					
				</div>
				
					<div class="sexEntry">
							<p>Gender</p>
						<select name="orphan_gender" required="required">
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="others">Others</option>
						</select>
					</div>
					
					<div class="relEntry">
							<p>Religion</p>
						<input type="text" name="orphan_religion" required="required">
					</div>
					
					<div class="bloodEntry">
						<p>Blood Group</p>
						<select name="orphan_blood_group" required="required">
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
					
					<div class="specialEntry">
						<p>Special Case</p>
						<h1>(If Any)</h1>
						<textarea name="specialEntry" ></textarea>
					</div>
					
					<div class="fatherEntry">
						<p>Father's Name</p>
					<input type="text" name="orphan_father_name">
					</div>

					<div class="motherEntry">
						<p>Mother's Name</p>
					<input type="text" name="orphan_mother_name">
					</div>

					<div class="gurdianEntry">
						<p>Gurdian's Name</p>
					<input type="text" name="orphan_gurdian_name" required="required">
					</div>
					
					<div class="contactEntry">
						<p>Contact Number</p>
					<input type="Number" name="gurdian_contact_number" required="required">

					</div>

					<div class="addEntry">
						<p>Address</p>
						<textarea name="gurdian_address" required="required"></textarea>
					</div>

					<div class="relationEntry">
						<p>Relation With Orphan </p>
						<input type="text" name="gurdian_orphan_relation" required="required">

					</div>
					

				<a ><input type="submit" value="save" name="orphan_submit"></a>
			</form>
	
		</div>
		
	</div>

	 <!--============= Information part  for data entry page ends =================-->
	

</body>
</html>