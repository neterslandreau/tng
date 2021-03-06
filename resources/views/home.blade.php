@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body">
                    @include('partials.admin-projects')
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($projects as $project)

    @include('partials.portfolio-modal')
    
@endforeach
@endsection
