<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Adoption List</title>
	<?= link_tag('assets/css/style.css')?>

	
</head>

<body>

	 <!--============= Header Part  start =================-->
	<div class="head1">
		<div class="head2">

			<a href="<?= base_url('admin_loginpage/admin_logout')?>"><button>Log Out</button></a>

				<div class="head3">
					<a href="<?= base_url('admin_optionpage/admin_dashboard')?>">Dashboard</a>
				</div>

		</div>
		
	</div>
	 <!--============= Header Part  ends =================-->

	<div class="menu">
		<div class="optionmenu">
			<ul>
				<li><a href="<?= base_url('admin_orphanpage/orphan_table')?>">Orphan List</a></li>
				<li><a href="<?= base_url('admin_employeepage/employee_table')?>">Employee Details</a></li>
				<li><a href="<?= base_url('admin_adoptionpage/adoption_table')?>">Adoption List</a></li>
				<li><a href="<?= base_url('admin_volunteerpage/volunteer_table')?>">Volunteer List</a></li>
			</ul>
			
		</div>
	</div>

	<div class="container">

		<h1>Adoption List</h1>

		<div class ="body">

			<a href="<?php echo base_url('admin_adoptionpage/newAdoptionEntry');?>"><button>Add New Adopter</button></a>


				<div class="table">

					<table style="width:100%" border="2px" cellspacing="0px" cellpadding="2px">
						<thead>

						    <th>Id</th>
						    <th>First name</th>
						    <th>Last name</th> 
						    <th>Date Of Birth</th>
						    <th>Gender</th>
						    <th>NID number</th>
						    <th>Contact number</th>
						    <th>E-mail</th>
						    <th>Address</th> 
						    <th>Occupation</th>
						    <th>Orphan's name</th>
						    <th>Orphan's ID</th>
						    <th>Date of adoption</th> 
						    <th>Cause for adoption</th>
						    
						</thead>
						
						<tbody>

					  		<?php foreach ($adoption_list as $row){?>
						  <tr>
						    <td><?php echo $row['id'];?></td>
						    <td><?php echo $row['first_name'];?></td> 
						    <td><?php echo $row['last_name'];?></td>
						    <td><?php echo $row['date_of_birth'];?></td>
						    <td><?php echo $row['gender'];?></td>
						     <td><?php echo $row['nid_number'];?></td> 
						    <td><?php echo $row['contact_number'];?></td>
						    <td><?php echo $row['email_id'];?></td>
						    
						    <td><?php echo $row['address'];?></td>
						    <td><?php echo $row['occupation'];?></td> 
						    <td><?php echo $row['orphan_name'];?></td>
						    <td><?php echo $row['orphan_id'];?></td> 
						    <td><?php echo $row['date_of_adoption'];?></td>
						    <td><?php echo $row['cause_of_adoption'];?></td> 
						   
						  </tr>
						    <?php } ?>

					  </tbody>

					</table>
				</div>




  	</div>
</div>




</body>
</html>