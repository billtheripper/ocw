<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Order Chaos & War</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: center;
		font-size: 11px;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		clear: both;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	div.menu{
		float: left;
		width: 150px;
	}
	.content{
		float: right;
		width: 80%;
		padding-right: 5%;
	}
	ul.menu{
		list-style-type: none;
	}
	</style>
</head>
<body>
	<div class="header">
		<h1>Meh TBD</h1>
	</div>
	<div class="menu">
		<ul class="menu">
			<li><a href="/">Home</a></li>
		</ul>
	</div>
	<div class="content">
		<?php echo $content; ?>
	</div>
		<p class="footer">&copy; Bill Kinzie 2014 <br /> Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</body>
</html>
