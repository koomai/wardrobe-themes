<?php namespace Koomai\WardrobeThemes;

use Illuminate\Support\ServiceProvider;

class WardrobeThemesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('koomai/wardrobe-themes');

		// Load Helper files here
		require __DIR__.'/../../themeHelpers.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['wardrobethemes.console.theme'] = $this->app->share(function($app)
		{
		    return new Console\ThemeCommand;
		});

		$this->app['wardrobethemes.console.config'] = $this->app->share(function($app)
		{
		    return new Console\ConfigCommand;
		});
		
		$this->commands('wardrobethemes.console.theme', 'wardrobethemes.console.config');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}