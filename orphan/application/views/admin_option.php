<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Option</title>
	<?= link_tag('assets/css/style.css')?>

	<style>

		.head3{
			width: 50%;
			margin: auto;
			float: right;
		}
		.head3 a{
			font-size: 50px;
			color: white;
			padding-top: 15px;
			display: inline-block;
		}
		.menu{
			background-color: #565656;
			height: 80px;
			width: 100%;
		}
		.optionmenu{
			height: 70px;
			width: 80%;
			margin: auto;
		}
		.optionmenu ul{
			list-style: none;
		}
		.optionmenu ul li{
			display: inline-block;
		}

		.optionmenu ul li a{
			color: white;
			font-family: Baskerville Old Face;
			display: inline-block;
			font-size: 26px;
			padding: 25px 40px;
			font-weight: bold;
			

		}

		.optionmenu ul li a:hover{
			background-color: #233237;
			border-bottom: 4px solid black;
		}
	</style>
	
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





</body>
</html>