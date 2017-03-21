<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer(['home', 'front'], function($view) {
			$projects = \App\Project::get();
			$rows = [];
			foreach ($projects as $project) {
				preg_match_all('/(\n)/', $project->description, $matches);
				$count = count($matches[0]) + 3;
				$rows[$project->slug] = $count;

			}
			$view->with(compact('projects', 'rows'));
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
