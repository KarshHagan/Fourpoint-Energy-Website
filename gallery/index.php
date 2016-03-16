<?php 
	$pageTitle = 'FourPoint Energy Media Gallery';
	$pageDescription = '';
	$fbShareImg = '';
	$thisPage = "";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 
?>

<header>
	<h1>FourPoint Media Gallery</h1>
	<p>The description goes here.</p>
</header>

<div class="container gallery-page" id="fp-gallery">
	<div class="row">

		<div class="gallery-filter">
			<ul>
				<li><button type="button" class="filter-btn button btn-white">All</button></li>
				<li><button type="button" class="filter-btn button btn-blue">Images</button></li>
				<li><button type="button" class="filter-btn button btn-blue">Video</button></li>
			</ul>
		</div>
		
		<!-- This is an image gallery. -->
		<div class="gallery">

			<!-- This is the thumbnail -->
			<a class="fancybox" rel="gallery1" title="Image1 Title" href="/assets/fancybox/demo/1_b.jpg"><img src="/assets/img/history/history_banner1.jpg" alt="" /></a>

			<!-- These are the hidden images, only viewable if you click on the thumbnail and cycle through. -->
			<div class="gallery-img-hidden">
				<a class="fancybox fb-video" rel="gallery1" href="https://www.youtube.com/watch?v=FkHbC1RSjv8"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
				<a class="fancybox" rel="gallery1" title="Image2 Title" href="/assets/fancybox/demo/2_b.jpg"><img src="/assets/img/history/history_banner2.jpg" alt="" /></a>
				<a class="fancybox" rel="gallery1" title="Image3 Title" href="/assets/fancybox/demo/3_b.jpg"><img src="/assets/img/history/history_banner6.jpg" alt="" /></a>
				<a class="fancybox" rel="gallery1" title="Image4 Title" href="/assets/fancybox/demo/4_b.jpg"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
				<a class="fancybox" rel="gallery1" title="Image5 Title" href="/assets/img/history/history_banner7.jpg"><img src="/assets/fancybox/demo/5_s.jpg" alt="" /></a>
				<a class="fancybox" rel="gallery1" title="Image6 Title" href="/assets/fancybox/demo/1_b.jpg"><img src="/assets/img/history/history_banner1.jpg" alt="" /></a>
			</div>
		</div>

		<!-- This is a single image -->
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/2_b.jpg"><img src="/assets/img/history/history_banner2.jpg" alt="" /></a>
		</div>
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/3_b.jpg"><img src="/assets/img/history/history_banner3.jpg" alt="" /></a>
		</div>
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/4_b.jpg"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
		</div>

		<!-- Video -->
		<div class="single-video">
			<a class="fancybox fbx-video" href="https://www.youtube.com/watch?v=FkHbC1RSjv8"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
		</div>

		<div class="single-video">
			<a class="fancybox fbx-video" href="https://www.youtube.com/watch?v=FkHbC1RSjv8"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
		</div>

		<!-- This is a single image -->
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/2_b.jpg"><img src="/assets/img/history/history_banner2.jpg" alt="" /></a>
		</div>
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/3_b.jpg"><img src="/assets/img/history/history_banner3.jpg" alt="" /></a>
		</div>
		<div class="single-img">
			<a class="fancybox" title="Single Image Title" href="/assets/fancybox/demo/4_b.jpg"><img src="/assets/img/history/history_banner4.jpg" alt="" /></a>
		</div>
	</div>
</div>

<script src="/assets/fancybox/source/jquery.fancybox.js"></script>
<script src="/assets/fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script src="/assets/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<!-- <script src="/assets/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>		-->
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>