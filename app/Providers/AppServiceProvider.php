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
		view()->composer('home', function($view) {
			$projects = \App\Project::get();
			$view->with(compact('projects'));
		});

		view()->composer('front', function($view) {
			$projects = \App\Project::get();
			$view->with(compact('projects'));
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
