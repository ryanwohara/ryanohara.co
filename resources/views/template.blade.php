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
				</div>
			</div>
			<div class="row padding">
				<div class="col-md-6 col-md-offset-3">
					<a class="glyphicon glyphicon-home glyphicons-lg col-sm-offset-2 col-sm-2" title="Home" href="/"></a>
					<a class="glyphicon glyphicon-user glyphicons-lg col-sm-2" aria-hidden="true" title="Resume" href="/about"></a>
					<a class="glyphicon glyphicon-pencil glyphicons-lg col-sm-2" aria-hidden="true" title="Blog" href="/blog"></a>
					<a class="glyphicon glyphicon-envelope glyphicons-lg col-sm-2" aria-hidden="true" title="Contact" id="contact" href="mailto:ryan@"></a>
				</div>
			</div>
			<div class="row padding">
                                <div class="col-md-6 col-md-offset-3">
					<a id="twitter" class="fa fa-2x fa-twitter col-sm-offset-3 col-sm-2" href="https://twitter.com/sirrohara" target="_blank"></a>
					<a id="linkedin" class="fa fa-2x fa-linkedin col-sm-2" href="https://www.linkedin.com/pub/ryan-w-o-hara/4b/ab9/824" target="_blank"></a>
					<a id="github" class="fa fa-2x fa-github col-sm-2" href="https://github.com/ryanwohara" target="_blank"></a>
				</div>
			</div>
		</div>
	</body>
</html>
