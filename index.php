<!doctype HTML>
<html>
	<head>
		<title>Escape time fractals</title>
		<link rel="stylesheet" type="text/css" href="stylesheets/jqPresent.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/prettyPhoto.css" />
		<script src="scripts/jquery-1.5.min.js"></script>
		<script src="scripts/jquery.prettyPhoto.js"></script>
		<script src="scripts/jquery.hotkeys.js"></script>
		<script src="scripts/jqPresent.js"></script>
		<script src="scripts/jqPresent.indexPage.js"></script>
		<script src="scripts/init.js"></script>
	</head>
	<body>
		<div id="header">
			<h1>Escape time fractals in PHP</h1>
			<div id="relnav">
				<a href="#prev" id="prev">Previous</a>
				<a href="#next" id="next">Next</a>
			</div>
		</div>
		<div id="slides">
			<div id="slide1" class="slide" data-transition="slide-horizontal">
				<h2>Overview</h2>
        <ol id="slide-index">
        <li>Complex numbers</li>
        <li>Fractals</li>
        <li>Escape time Fractals</li>
        </ol>
			</div>
			<div id="slide2" class="slide" data-transition="slide-vertical">
				<h2>Complex Numbers</h2>
        <p>
        Numbers with a imaginary component.
        </p>
        <img src="" alt="animated-gif" class="point" data-transition="fade">
        <p class="point" data-transition="sexy"> Example in PHP</p>
			</div>
			<div id="slide3" class="slide" data-transition="slide-horizontal">
				<h2>Fractals</h2>
				<p>Self similar at different scales</p>
				<ul>
				</ul>
			</div>
			<div id="slide4" class="slide" data-transition="fade">
				<h2>Escape Time Fractals</h2>
				<ul>
					<li>whats his name Julia calcualte a couple of points</li>
				</ul>
			</div>
			<div id="slide5" class="slide" data-transition="fade">
					<li>Can embed images e.g. <img src="http://fishtrap.co.uk/wp-content/uploads/2011/01/julia1.png"></li>
			</div>
			<div id="slide6" class="slide" data-transition="slide-from-top">
				<h2>Don't say no to panda</h2>
				<a href="http://www.youtube.com/watch?v=58u2b2A2h-c&width=1280&height=720" rel="prettyPhoto">You've been warned...</a>
			</div>
		</div>
		<div id="footer">
			<ol id="pager"></ol>
			<p id="author">
			<?php echo date('d/m/Y g:i a'); ?>
				Nat McHugh - <a
        href="mailto:nat@fishtrap.co.uk">nat@fishtrap.co.uk</a>
		</p>
		</div>
	</body>
</html>
