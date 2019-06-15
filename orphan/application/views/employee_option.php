<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Employee Option</title>
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





</body>
</html>