<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<?= link_tag('assets/css/style.css')?>
	<style>

	.area{
			height: 650px;
			width: 100%;
			background : white;
			position: relative;	
		}

	.innerArea {
			position: absolute;
			top: 60px;
			left: 490px;
			margin: auto;
			border: 2px solid #BFC9CA;
			padding: 48px 100px 60px;
			width: 235px;

	}

	input[type=text]{
			padding: 6px 21px;
			margin-bottom: 10px;
			box-shadow: 0px 0px 0px;
	}

	input[type=password]{
			padding: 6px 21px;
			margin-bottom: 20px;
			box-shadow: 0px 0px 0px;
	}

	input[type=submit]{
			margin-top: 8px;
			padding: 8px 85px;
			border: 2px solid #AAB7B8;
			width: 215px;
	}
	
	input[type=submit]:hover {
	border: 2px solid black;
}

	</style>
</head>
<body>
	
	<div class="head1">
		<div class="head2">

			<a href="<?= base_url('homepage')?>"><?php echo img('images/logo2.png')?></a>

		</div>
	</div>

		
		<div class="area">
			<?php echo form_open('LogInPage/employee_login')?>
		<div class="innerArea">
			
			<?php echo img('images/logInLogo.png')?>

			<div class="user">
				<p>User Name</p>
			</div>
			<?php 
				echo form_input(['name'=>'username','value'=>set_value('username')]),
				form_error('username'); 
			?>
 
			<div class="pass">
				<p>Password</p>
			</div>
			<?php 
				echo form_password(['name'=>'password']),
				form_error('password'); 
			?>

			<?php echo form_submit(['name'=>'submit','value'=>'log In']); ?>
			


		</form>

		</div>

	
		 
	</div>
</body>
</html>