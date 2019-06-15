<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Orphan Entry</title>
	<?= link_tag('assets/css/style.css')?>
	<style>
.isAdopted  p {
	display: inline-block;
	font-size: 24px;
	color: white;
	margin: 8px 10px;
	padding-top: 2px;
	vertical-align: middle;
	color: black;

}
.isAdopted input {
	display: inline;
	padding: 5px;
	margin-right: 10px;
	box-shadow: 1px 1px 0px;
}
	</style>
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
		<p>Edit Orphan Information</p>
	</div>
	
	<div class="infoEntry">

			<?php echo form_open("admin_orphanpage/update/".$orphan_data['id'])?>


			<div class="infoEntry1">
				
				<div class="nameEntry">
				<p>Name</p>
				
				<input type="text" name="orphan_first_name" placeholder="First Name" value="<?php echo $orphan_data['first_name'];?>"/>
				<input type="text" name="orphan_last_name" placeholder="Last Name" value="<?php echo $orphan_data['last_name'];?>"/>	
				</div>
				
				<div class="BdateEntry">
					<p>Date of Birth</p>
					<input type="date" name="orphan_birth_date" value="<?php echo $orphan_data['date_of_birth'];?>">
					
				</div>
				
					<div class="sexEntry">
							<p>Gender</p>
						<input type="text" name="orphan_gender" value="<?php echo $orphan_data['gender'];?>">
					</div>
					
					<div class="relEntry">
							<p>Religion</p>
						<input type="text" name="orphan_religion" value="<?php echo $orphan_data['religion'];?>">
					</div>
					
					<div class="bloodEntry">
						<p>Blood Group</p>
						<input type="text" name ="orphan_blood_group" value="<?php echo $orphan_data['blood_group'];?>">
					</div>
					
					<div class="specialEntry">
						<p>Special Case</p>
						<h1>(If Any)</h1>
						<textarea name="specialEntry"><?php echo $orphan_data['special_case'];?></textarea>
					</div>
					
					<div class="fatherEntry">
						<p>Father's Name</p>
					<input type="text" name="orphan_father_name" value="<?php echo $orphan_data['father_name'];?>">
					</div>

					<div class="motherEntry">
						<p>Mother's Name</p>
					<input type="text" name="orphan_mother_name" value="<?php echo $orphan_data['mother_name'];?>">
					</div>

					<div class="gurdianEntry">
						<p>Gurdian's Name</p>
					<input type="text" name="orphan_gurdian_name" value="<?php echo $orphan_data['guardian_name'];?>">
					</div>
					
					<div class="contactEntry">
						<p>Contact Number</p>
					<input type="Number" name="gurdian_contact_number" value="<?php echo $orphan_data['contact_number'];?>" >

					</div>

					<div class="addEntry">
						<p>Address</p>
						<textarea name="gurdian_address"><?php echo $orphan_data['address'];?></textarea>
					</div>

					<div class="relationEntry">
						<p>Relation With Orphan </p>
						<input type="text" name="gurdian_orphan_relation" value="<?php echo $orphan_data['relation_with_orphan'];?>">

					</div>

					<div class="isAdopted">
						<p>Is Adopted?</p>
					<input type="text" name="adopted"  >

					</div>
					

				<a ><input type="submit" value="save" name="orphan_submit"></a>
			</form>
	
		</div>
		
	</div>

	 <!--============= Information part  for data entry page ends =================-->
	

</body>
</html>