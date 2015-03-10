@extends('template')

@section('content')

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Knowledge</h1>
		<dl>
			<dt><h3>Fluent</h4></dt>
			<dd>HTML5 • Python • JavaScript/jQuery • PHP • MySQL • Regex • Debian • CentOS</dd>
			<dt><h3>Comfortable</h4></dt>
			<dd>Laravel • Git • SaltStack • Vagrant • SASS • Postfix & Dovecot • Exim • Java • Bootstrap</dd>
			<dt><h3>Learning</h4></dt>
			</dd>Perl • MongoDB • Redis • Ruby • Grunt • Bower • Composer</dd>
		</dl>
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Experience</h1>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<h2><a href="https://linode.com/">Linode</a></h2>(October 2012 - Present)
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Customer Support Specialist</h4>
		<p>I am responsible for mitigating DDoS attacks, troubleshooting DNS and networking problems, answering general Linux questions, and providing customer support with prompt resolutions.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Systems Administrator</h4>
		<p>I maintain all aspects of the infrastructure and participate in the on-call procedures in addition to being the mail server administrator.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Professional Services</h4>
		<p>I was paramount in launching, communicating, and managing a product for Linode to provide system administration as a service. I deploy networks of highly available servers with IP failover, load balancing, and replication for both databases and file systems.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Backup Service Administrator</h4>
		<p>I investigate and resolve any issues that may impact customers’ backups, internal services, or the hardware itself. Backups are audited daily to validate and repair any incongruencies.</p>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h1>Projects</h1>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Live To-Do</h4> [Linode’s] (<b>2013-2015</b>)
		<p>Saving Linode thousands of man hours, my Python backend provides data to my JavaScript frontend via AJAX requests. The JSON is then sorted, prioritized, and color-coded to streamline the workflow of Linode’s Support department. Keyboard shortcuts are available to access the array of internal tools and to expedite many of Support’s tasks.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4>Website Generator</h4> [N/A] (<b>2012</b>)
		<p>A website generator using 960 Grid System and jQuery UI, the resulting output was a full HTML file ready for content to be dropped in. HTML and CSS were calculated based on the div placement within the draggable GUI.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4><a href="http://profilepicmaker.com/">Profile Pic Maker</a></h4> (<b>2010</b>)
		<p>Although short-lived due to Facebook updates, I led two colleagues in building a site in JavaScript and PHP, utilizing the ImageMagick library, to easily crop photos. A simple tool for perfectly cropping photos to use on Facebook’s at-the-time design.</p>
	</div>
	<div class="col-md-10 col-md-offset-1">
		<h4><a href="http://ikick.eu/">iKick</a></h4> (2005 - Present)
		<p>An IRC bot written in mIRC & PHP and maintained over the years. Still used within the SwiftIRC community for gamers and developers. </p>
	</div>
</div>

@endsection

