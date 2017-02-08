<?php
	include 'sanitize.php';
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<?php include 'meta_tags.php'; ?>
	<meta name="abstract" content="Unique web design, developed with passion!">
    <title>W3b-D3sign - Design The Future!</title>
	<meta name="description" content="Unique web design, developed with passion!"/>
	<meta property="og:url"           content="http://www.w3b-d3sign.com" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="W3b-D3sign - Design The Future!" />
	<meta property="og:description"   content="Unique web design, developed with passion!" />
	<meta property="og:image"         content="http://www.w3b-d3sign.com/background.jpg" />
	<meta property="fb:app_id"         content="838863212912770" />
	<?php include 'casstssh.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body>
	
	<?php include 'views/navbar.html'; ?>
	<?php include 'views/index.html'; ?>
	<?php include 'views/footer.html'; ?>
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/main.js"></script>
<script>
	var $head = $( '#ha-header' );
	$( '.ha-waypoint' ).each( function(i) {
		var $el = $( this ),
			animClassDown = $el.data( 'animateDown' ),
			animClassUp = $el.data( 'animateUp' );

		$el.waypoint( function( direction ) {
			if( direction === 'down' && animClassDown ) {
				$head.attr('class', 'ha-header ' + animClassDown);
			}
			else if( direction === 'up' && animClassUp ){
				$head.attr('class', 'ha-header ' + animClassUp);
			}
		}, { offset: '100%' } );
	} );
</script>
</html>