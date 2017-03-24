<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Think-Knot Network</h2>
				<hr class="star-primary">
			</div>
		</div>

		<div class="row">
			@foreach ($projects as $project)

				@include('partials.portfolio-item')

			@endforeach
		</div>

		<div class="row">

			<hr class="star-primary">
			<div class="col-md-8 col-md-offset-2">
			<h3 class="text-center">Hosting Details</h3>
				<p>Nulla tincidunt velit ac leo ultrices, vel pulvinar lectus posuere.</p>
				<p>Donec sollicitudin enim in odio fringilla, eu placerat ipsum lobortis.</p>
				<p>Aenean malesuada nunc vel urna sagittis, vitae viverra dui ultricies.</p>
<!-- 
				<div class="row">

					<div class="col-md-5">

					<h4>Hello</h4>
					<ul>
						<li>Mauris sollicitudin diam eget justo elementum aliquam.</li>
						<li>Nulla tincidunt velit ac leo ultrices, vel pulvinar lectus posuere.</li>
					</ul>

					</div>

					<div class="col-md-6 col-md-offset-1">

					<h4>World</h4>
					<ul>
						<li>Mauris sollicitudin diam eget justo elementum aliquam.</li>
						<li>Nulla tincidunt velit ac leo ultrices, vel pulvinar lectus posuere.</li>
					</ul>

					</div>

				</div>

			</div>

 -->		</div>

	</div>
</section>
@foreach ($projects as $project)

	@include('partials.portfolio-modal')
	
@endforeach
