<html>
	<head>
		<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAABeODAAS/bgAE1nsABN6AAAbHcwAE0XgABMx1AAS4agAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIiIAIiAAAAAAiACIgAAAAAFUFVQAAAAAAd3dwAAAAAABmZmYAAAAAADMAMzAAAAAARABEQAAAAAEREREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AADgAwAA4AMAAOADAADwBwAA8A8AAPAHAADwBwAA4AcAAOAHAADgDwAA//8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href='/css/app.css' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="/js/script.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="container-fluid" id="content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="padding">
						@yield('content')
					</div>
				</div>
			</div>
			<div class="row padding">
				<div class="col-md-6 col-md-offset-3">
					<a class="glyphicon glyphicon-user glyphicons-lg col-sm-offset-4 col-sm-2" aria-hidden="true" title="Resume" href="/about"></a>
					<a class="glyphicon glyphicon-envelope glyphicons-lg col-sm-2" aria-hidden="true" title="Contact" id="contact" href="mailto:ryan@"></a>
				</div>
			</div>
			<div class="row padding">
                                <div class="col-md-6 col-md-offset-3">
					<a title="Twitter" class="fa fa-2x fa-twitter col-sm-offset-3 col-sm-2" href="https://twitter.com/sirrohara" target="_blank"></a>
					<a title="LinkedIn" class="fa fa-2x fa-linkedin col-sm-2" href="https://www.linkedin.com/pub/ryan-w-o-hara/4b/ab9/824" target="_blank"></a>
					<a title="GitHub" class="fa fa-2x fa-github col-sm-2" href="https://github.com/ryanwohara" target="_blank"></a>
				</div>
			</div>
		</div>
	</body>
</html>
