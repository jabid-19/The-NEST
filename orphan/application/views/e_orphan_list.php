<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee Orphan List</title>
	<?= link_tag('assets/css/style.css')?>


	
</head>

<body>

	 <!--============= Header Part  start =================-->
	<div class="head1">
		<div class="head2">

			<a href="<?= base_url('logInPage/employee_logout')?>"><button>Log Out</button></a>

				<div class="head3">
					<a href="<?= base_url('employee_optionpage/employee_dashboard')?>">Dashboard</a>
				</div>

		</div>
		
	</div>
	 <!--============= Header Part  ends =================-->

	<div class="menu">
		<div class="optionmenu">
			<ul>
				<li><a href="<?= base_url('e_orphanpage/orphan_table')?>">Orphan List</a></li>
				<li><a href="<?= base_url('e_employeepage/employee_table')?>">Employee Details</a></li>
				<li><a href="<?= base_url('e_adoptionpage/adoption_table')?>">Adoption List</a></li>
				<li><a href="<?= base_url('e_volunteerpage/volunteer_table')?>">Volunteer List</a></li>
			</ul>
			
		</div>
	</div>

	<div class="container">

		<h1>Orphan List</h1>

		<div class ="body">
				<a href="<?php echo base_url('e_orphanpage/newOrphanEntry');?>"><button>Add New Orphan</button></a>
		
				<div class="table">

					<table style="width:100%" border="2px" cellspacing="0px" cellpadding="2px">
						 
						<thead>

						    <th>Id</th>
						    <th>First name</th>
						    <th>Last name</th> 
						    <th>Date of birth</th>
						    <th>Gender</th>
						    <th>Religion</th> 
						    <th>Blood group</th>
						    <th>special case</th>
						    <th>Father's name</th> 
						    <th>Mother's name</th>
						    <th>Guardian's name</th>
						    <th>Contact number</th>
						    <th>Address</th> 
						    <th>Relation with orphan</th>
						    <th>Date of entry</th> 
						    
						</thead>
						
						<tbody>

					  		<?php foreach ($orphan_list as $row){?>
						  <tr>
						    <td><?php echo $row['id'];?></td>
						    <td><?php echo $row['first_name'];?></td> 
						    <td><?php echo $row['last_name'];?></td>
						    <td><?php echo $row['date_of_birth'];?></td>
						    <td><?php echo $row['gender'];?></td> 
						    <td><?php echo $row['religion'];?></td>
						    <td><?php echo $row['blood_group'];?></td>
						    <td><?php echo $row['special_case'];?></td> 
						    <td><?php echo $row['father_name'];?></td>
						    <td><?php echo $row['mother_name'];?></td>
						    <td><?php echo $row['guardian_name'];?></td> 
						    <td><?php echo $row['contact_number'];?></td>
						    <td><?php echo $row['address'];?></td>
						    <td><?php echo $row['relation_with_orphan'];?></td> 
						    <td><?php echo $row['date_of_entry'];?></td>
						  </tr>
						    <?php } ?>

					  </tbody>

					</table>
				</div>




  	</div>
</div>




</body>
</html>