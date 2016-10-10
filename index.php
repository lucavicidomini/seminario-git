<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>Seminario su git &ndash; Luca Vicidomini</title>

		<link rel="stylesheet" href="node_modules/reveal.js/css/reveal.css">
		<link rel="stylesheet" href="node_modules/reveal.js/css/theme/solarized.css">
		<link rel="stylesheet" href="css/luca.css">

		<!-- Font Awesome icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="node_modules/reveal.js/lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'node_modules/reveal.js/css/print/pdf.css' : 'node_modules/reveal.js/css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<?php
					$base = dirname(__FILE__) . '/slides/';
					$slides = scandir( $base );
					foreach ( $slides as $slide ) {
						if ( '.' == substr( $slide, 0, 1 ) ) {
							continue;
						}
						if ( '.html' != substr( $slide, -5 ) ) {
							continue;
						}
						echo file_get_contents( "{$base}/{$slide}" );
					}
				?>
			</div>
		</div>

		<script src="node_modules/reveal.js/lib/js/head.min.js"></script>
		<script src="node_modules/reveal.js/js/reveal.js"></script>
		<script src="js/luca.js"></script>
		<script>
			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				history: true,

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: 'node_modules/reveal.js/plugin/markdown/marked.js' },
					{ src: 'node_modules/reveal.js/plugin/markdown/markdown.js' },
					{ src: 'node_modules/reveal.js/plugin/notes/notes.js', async: true },
					{ src: 'node_modules/reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				]
			});
		</script>
	</body>
</html>
