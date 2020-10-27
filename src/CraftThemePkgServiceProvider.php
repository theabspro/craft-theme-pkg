<?php

namespace Abs\CraftThemePkg;

use Illuminate\Support\ServiceProvider;

class CraftThemePkgServiceProvider extends ServiceProvider {
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->loadViewsFrom(__DIR__ . '/views', 'craft-theme-pkg');
		$this->publishes([
			__DIR__ . '/public' => base_path('public'),
			__DIR__ . '/config/config.php' => config_path('craft-theme-pkg.php'),
		]);
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
	}
}
