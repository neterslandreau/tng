<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Portfolio</h2>
				<hr class="star-primary">
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
