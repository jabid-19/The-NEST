<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Nest</title>
	<?= link_tag('assets/css/style.css')?>
	
</head>

<body>

	 <!--============= Header Part  start =================-->
	<div class="head1">
		<div class="head2">


			<a href="<?= base_url('homepage')?>"><?php echo img('images/logo2.png')?> </a>

		</div>
		
	</div>

	<div class="signup_success">
		<div class="s_signup">
			<div class="signup_letter">

				<div class="successImg">
				<img src="<?php echo base_url('images/succeed.png'); ?>" /> 
				</div>

				<div class="successLetter">
					<p>Succeed!</p>
				</div>
				
			</div>
			
		</div>
	</div>

</body>
</html>