<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
	<div class="container">

		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="/">The Neters Group</a>
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">

			@if(in_array(request()->server('REMOTE_ADDR'), ['127.0.0.1', '174.48.153.117']))

				<li class="page-scroll">
					<a href="/home">admin</a>
				</li>

			@endif

				<li class="page-scroll">
					<a data-toggle="modal" data-target="#resume">Resume</a>
				</li>
				<li class="page-scroll">
					<a href="#portfolio">Think-Knot Network</a>
				</li>
				<li class="page-scroll">
					<a href="#about">About TNG</a>
				</li>
				<li class="page-scroll">
					<a href="#contact">Contact TNG</a>
				</li>
			</ul>
		</div>

	</div>

</nav>

@include('partials.resume-modal')
