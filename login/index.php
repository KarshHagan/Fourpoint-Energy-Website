<?php 
	$pageTitle = 'FourPoint Energy - Join Our Team';
	$pageDescription = '';
	$fbShareImg = '';
	$thisPage = "";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 
?>

<header>
	<h1>Login Here</h1>
	<p>It will automatically take you where you want to go.</p>
</header>

<aside class="card login-card">
	<img src="../assets/img/tree-test2.jpg" />
	<div class="card-bottom">
		<div class="inner">
			<p>Login copy goes here Login copy goes here Login copy goes here Login copy goes here </p>	
			<div class="form_wrap login-form">
				<form id="login" name="login" class="general-form" accept-charset="utf-8">
					<div>
						<label class="desc" id="name" for="Field1">Username</label>
						<input name="name" type="text" placeholder="Username"/>
					</div>

					<div>
						<label class="desc" id="email" for="Field1">Password</label>
						<input name="name" type="text" placeholder="Password"/>
					</div>
					<div class="error-msg">
						<label id="form-error-msg">There was a problem with your submission.</label>
					</div>
					<div class="forgot-pw">
						<a href="#">Forgot Password?</a>
					</div>
					<button type="button" value="submit" class="button btn-blue">Login</button>
				</form>
			</div>
		</div>
	</div>
</aside>


<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>