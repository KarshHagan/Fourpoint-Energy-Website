<?php 
	$pageTitle = 'FourPoint Energy - Areas of Operation';
	$pageDescription = '';
	$fbShareImg = '';
	$thisPage = "operation_map";
	include($_SERVER['DOCUMENT_ROOT']."/includes/header.php"); 
?>

<header class="alt_leader">
	<section>
		<h1>Areas of Operation</h1>
		<p>FourPoint Energy is headquartered in Denver, CO and operates its core assets in the Western Anadarko Basin. The company targets low risk repeatable stacked multi-pay resource plays. The Granite Wash and the Tonkawa of the Western Anadarko Basin are but two of the XXX established producing reservoirs within FourPoint's focus area characterized by repeatable long-lived reserves with significant growth potential.</p>
	</section>
</header>

<iframe width="100%" height="640px" class="map-embed" src="http://localhost:8000/map/index.html" frameborder="0" scrolling="no"></iframe>

				
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>