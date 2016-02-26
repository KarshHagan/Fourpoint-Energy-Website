<?php 
	$pageTitle = 'FourPoint Energy';
	$pageDescription = '';
	$fbShareImg = '';
	$thisPage = "";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 
?>

<header>
	<h1>Contact Us</h1>
	<p>Cordillera Energy Partners insures their involvement within the Energy Industry through support of several organizations and trade associations</p>
</header>

<div class="emergency-contact-num">
	<div class="container">
		<h2>In case of an emergency call</h2>
		<a href="#">303-303-3030</a>
	</div>
</div>

<div class="container">
	<div class="form_wrap">
		<form id="contact" name="contact" class="contact-form" accept-charset="utf-8">
			<div> <!-- this div is here for styling purposes -->
				<label class="select-dept-label">Who Would You Like To Talk To?*</label>
				<div class="form_select">
					<label>Choose a Department</label>
					<select id="department" class="select">
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="mercedes">Mercedes</option>
						<option value="audi">Audi</option>
					</select>
				</div>
			</div>
			<div>
				<label class="desc" id="name" for="Field1">Name*</label>
				<input name="name" type="text" placeholder="First Name, Last Name"/>
			</div>

			<div>
				<label class="desc" id="email" for="Field1">Email*</label>
				<input name="name" type="text" placeholder="email@domain.com"/>
			</div>

			<div>
				<label class="desc" id="message" for="Field1">Message*</label>
				<textarea name="name" type="text" placeholder="Message"></textarea>
			</div>
			<div id="form-error-msg">There was a problem with your submission.</div>
			<button type="button" value="submit" class="button btn-blue">Send</button>
		</form>
	</div>

	<div class="sidebar">
		<h2>Quick Contacts</h2>
		<div class="copy_split">
			<div class="faq-wrapper">
				<aside><p>Owner Relations</p></aside>
				<article><a href="#">303-303-3030</a></article>
			</div>
			<div class="faq-wrapper">
				<aside><p>Business Development</p></aside>
				<article><a href="#">303-303-3030</a></article>
			</div>
		</div>
		<aside class="card">
			<img src="../assets/img/tree-test2.jpg" />
			<div class="card-bottom">
				<div class="inner">
					<h3>Careers</h3>
					<p>Check out our careers page, it's awesome.</p>
					<button type="button" class="button btn-blue">See more</button>
				</div>
			</div>
		</aside>
	</div>
</div>

<section class="maps">
	<!-- <h2>Locations</h2> -->
	<div class="map-block">
		<div class="map-address">
			<div class="inner">
				<h3>Fourpoint Energy Denver Office</h3>
				<p>100 St. Paul St., Ste. 300</p>
				<p>Denver, CO 80206</p>
				<p><a href="#">303-303-3030</a></p>
			</div>
		</div>
		<div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24551.60322671729!2d-104.96822526143131!3d39.718297305742986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e975627ba33%3A0x30273fae96ab60b3!2s100+St+Paul+St%2C+Denver%2C+CO+80206!5e0!3m2!1sen!2sus!4v1456456498491" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="map-block">
		<div class="map-address blue-block">
			<div class="inner">
				<h3>Fourpoint Energy Denver Office</h3>
				<p>100 St. Paul St., Ste. 300</p>
				<p>Denver, CO 80206</p>
				<p><a href="#">303-303-3030</a></p>
			</div>
		</div>
		<div class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24551.60322671729!2d-104.96822526143131!3d39.718297305742986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c7e975627ba33%3A0x30273fae96ab60b3!2s100+St+Paul+St%2C+Denver%2C+CO+80206!5e0!3m2!1sen!2sus!4v1456456498491" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>


<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>