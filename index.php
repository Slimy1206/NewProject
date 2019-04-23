<?php
	include_once 'header.php';
?>
	
	<section class="main-container">
		<div class="main-wrapper">
			<h2>In Arbeit! Versuchen sie es zu einem späteren Zeitpunkt erneut <3</h2>
			<?php
				if (isset($SESSION['u_id'])){
					echo "You sold your soul! Muahahahahahaha!!!";
				}
			?>
		</div>
	</section>
	
	<?php
		include_once 'footer.php';
	?>
	
	