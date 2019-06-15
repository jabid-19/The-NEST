<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee List</title>
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

		<h1>Employee List</h1>

		<div class ="body">

			


				<div class="table">

					<table style="width:100%" border="2px" cellspacing="0px" cellpadding="2px">
						 
						<thead>

						    <th>Id</th>
						    <th>First name</th>
						    <th>Last name</th> 
						    <th>Gender</th>
						    <th>Religion</th>
						    <th>Blood group</th>
						    <th>Email ID</th>
						    <th>Job Title</th>
						    <th>Address</th> 
						    
						</thead>
						
						<tbody>

					  		<?php foreach ($employee_list as $row){?>
						  <tr>
						    <td><?php echo $row['employee_id'];?></td>
						    <td><?php echo $row['first_name'];?></td> 
						    <td><?php echo $row['last_name'];?></td>
						    <td><?php echo $row['gender'];?></td> 
						    <td><?php echo $row['religion'];?></td>
						    <td><?php echo $row['blood_group'];?></td>
						    <td><?php echo $row['email_id'];?></td>
						    <td><?php echo $row['job_title'];?></td> 
						    <td><?php echo $row['address'];?></td>
						    

						  </tr>
						    <?php } ?>

					  </tbody>

					</table>
				</div>




  	</div>
</div>


</body>
</html>