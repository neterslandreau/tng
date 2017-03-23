<section class="success" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Think-Knot.com: The Neters Network</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			@foreach ($projects as $project)

				@include('partials.portfolio-item')

			@endforeach
		</div>
	</div>
</section>
@foreach ($projects as $project)

	@include('partials.portfolio-modal')
	
@endforeach
