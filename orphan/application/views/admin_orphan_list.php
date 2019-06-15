<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Orphan List</title>
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

		<h1>Orphan List</h1>

		<div class ="body">

			<a href="<?php echo base_url('admin_orphanpage/newOrphanEntry');?>"><button>Add New Orphan</button></a>


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
						    <th>Is Adopted</th> 
						    <th>Date of entry</th>
						    <th>Action</th>
						    
						</thead>
						
						<tbody>

					  		<?php foreach ($omodel as $row): ?>
						  <tr>
						    <td><?= $row->id ?></td>
						    <td><?= $row->first_name ?></td>
						    <td><?= $row->last_name ?></td>
						    <td><?= $row->date_of_birth ?></td>
						    <td><?= $row->gender ?></td>
						    <td><?= $row->religion ?></td>
						    <td><?= $row->blood_group ?></td>
				            <td><?= $row->special_case ?></td>
				            <td><?= $row->father_name ?></td>
			                <td><?= $row->mother_name ?></td>
			                <td><?= $row->guardian_name ?></td>
			                <td><?= $row->contact_number ?></td>
		                    <td><?= $row->address ?></td>
		                    <td><?= $row->relation_with_orphan ?></td>
		                    <td><?= $row->adopted ?></td>
		                    <td><?= $row->date_of_entry ?></td>

						    <td>
						    	<?= anchor("admin_orphanpage/edit_orphan/{$row->id}",'Edit');?>

						    </td>
						  </tr>
						   <?php endforeach; ?>

					  </tbody>

					</table>
				</div>




  	</div>
</div>




</body>
</html>