<?php
	// $project->description = nl2br($project->description);
?>
<div class="modal fade" id="{{ $project->slug }}" tabindex="-1" role="dialog" aria-labelledby="{{ $project->slug }}">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="">{{ $project->name }}</h4>

			</div>

			<div class="modal-body">

				<p>Project Details</p>

				<textarea class="col-md-12 project-details" rows="{{ $rows[$project->slug] }}">{{ $project->description }}</textarea>
					
				<a target="_blank" href="{{ $project->location }}">Visit {{ $project->name }}</a> (opens in new window)

			</div>

			<div class="modal-footer">

				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

			</div>

		</div>

	</div>

</div>