<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Employee List</title>
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

		<h1>Employee List</h1>

		<div class ="body">

			<a href="<?php echo base_url('admin_employeepage/newEmployeeEntry');?>"><button>Add New Employee</button></a>


				<div class="table">

					<table style="width:100%" border="2px" cellspacing="0px" cellpadding="2px">
						 
						<thead>

						    <th>Id</th>
						    <th>First name</th>
						    <th>Last name</th> 
						    <th>Date Of Birth</th>
						    <th>Gender</th>
						    <th>NID No</th>
						    <th>Religion</th>
						    <th>Blood group</th>
						    <th>Contact No</th>
						    <th>Email ID</th>
						    <th>Father's Name</th>
						    <th>Mother's Name</th>
						    <th>Salary</th>
						    <th>Hire Date</th>
						    <th>Job Title</th>
						    <th>Username</th>
						    <th>Password</th>
						    <th>Address</th>
						    <th>Special Case</th> 
						    
						</thead>
						
						<tbody>

					  		<?php foreach ($employee_list as $row){?>
						  <tr>
						    <td><?php echo $row['employee_id'];?></td>
						    <td><?php echo $row['first_name'];?></td> 
						    <td><?php echo $row['last_name'];?></td>
						    <td><?php echo $row['date_of_birth'];?></td>
						    <td><?php echo $row['gender'];?></td> 
						    <td><?php echo $row['nid_number'];?></td>
						    <td><?php echo $row['religion'];?></td>
						    <td><?php echo $row['blood_group'];?></td>
						    <td><?php echo $row['contact_number'];?></td>
						    <td><?php echo $row['email_id'];?></td>
						    <td><?php echo $row['father_name'];?></td>
						    <td><?php echo $row['mother_name'];?></td>
						    <td><?php echo $row['salary'];?></td>
						    <td><?php echo $row['hire_date'];?></td>
						    <td><?php echo $row['job_title'];?></td>
						    <td><?php echo $row['username'];?></td>
						    <td><?php echo $row['password'];?></td> 
						    <td><?php echo $row['address'];?></td>
						    <td><?php echo $row['special_case'];?></td>
						    

						  </tr>
						    <?php } ?>

					  </tbody>

					</table>
				</div>




  	</div>
</div>


</body>
</html>