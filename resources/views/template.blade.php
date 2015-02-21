<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='/css/app.css' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="container" id="content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="padding">
						@yield('content')
					</div>
					<a class="glyphicon glyphicon-home glyphicons-lg col-sm-offset-2 col-sm-2" title="Home" href="/"></a>
					<a class="glyphicon glyphicon-user glyphicons-lg col-sm-2" aria-hidden="true" title="Resume" href="/about"></a>
					<a class="glyphicon glyphicon-pencil glyphicons-lg col-sm-2" aria-hidden="true" title="Blog" href="/blog"></a>
					<a class="glyphicon glyphicon-envelope glyphicons-lg col-sm-2" aria-hidden="true" title="Contact" id="contact" href="mailto:ryan@"></a>
					<a id="twitter" class="twitter" href="https://twitter.com/sirrohara"></a>
				</div>
			</div>
		</div>
	</body>
</html>
