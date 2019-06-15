<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee Volunteer List</title>
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
	<h1>Volunteer List</h1>

	<div class ="body">

	<div class="table">
			
		<table style="width:100%" border="2px" cellspacing="0px">
	 
			<thead>

			    <th>Id</th>
			    <th>First Name</th>
			    <th>Last Name</th> 
			    <th>Gender</th>
			    <th>Phone number</th>
			    <th>Email</th> 
			    
			    
			</thead>
			
			<tbody>
		  		<?php foreach ($volunteer_list as $row){?>
			  <tr>
			    <td><?php echo $row['id'];?></td>
			    <td><?php echo $row['first_name'];?></td> 
			    <td><?php echo $row['last_name'];?></td>
			    <td><?php echo $row['gender'];?></td> 
			    <td><?php echo $row['phone_number'];?></td>
			    <td><?php echo $row['email'];?></td>
			  
			  </tr>
			    <?php } ?>
		  	</tbody>

		</table>
	</div>
	 
  	</div>
</div>




</body>
</html>