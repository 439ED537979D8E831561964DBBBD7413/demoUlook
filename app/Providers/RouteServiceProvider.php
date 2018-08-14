<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {
	/**
	 * This namespace is applied to your controller routes.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @return void
	 */
	public function boot() {
		//

		parent::boot();
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map() {

		$this->mapApiRoutes();

		$this->mapWebRoutes();

		$this->mapAdminRoutes();

		$this->mapProviderRoutes();

		$this->mapProviderApiRoutes();

	}

	/**
	 * Define the "web" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapWebRoutes() {
		Route::middleware( 'web' )
		     ->namespace( $this->namespace )
		     ->group( base_path( 'routes/web.php' ) );
	}

	/**
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 *
	 * @return void
	 */
	protected function mapApiRoutes() {
		Route::prefix( 'api/consumer' )
		     ->middleware( 'api' )
		     ->namespace( $this->namespace )
		     ->group( base_path( 'routes/api.php' ) );
	}

	/**
	 *  Define the "admin web" routes for the admin area.
	 *
	 * @return void
	 */
	protected function mapAdminRoutes() {
		Route::prefix( 'admin' )
		     ->as( 'admin' )
		     ->middleware( 'web' )
		     ->namespace( $this->namespace . '\Admin' )
		     ->group( base_path( 'routes/admin.php' ) );
	}

	/**
	 * Define the "provider web" routes for the provider area.
	 *
	 * @return void
	 */
	protected function mapProviderRoutes() {
		Route::prefix( 'provider' )
		     ->as( 'provider' )
		     ->middleware( 'web' . '\Provider' )
		     ->namespace( $this->namespace )
		     ->group( base_path( 'routes/provider.php' ) );
	}

	/**
	 * Define the "api" routes for the provider.
	 *
	 * @return void
	 */
	protected function mapProviderApiRoutes() {
		Route::prefix( 'provider_api' )
		     ->as( 'provider_api' . '\Provider\Api' )
		     ->middleware( 'api' )
		     ->namespace( $this->namespace )
		     ->group( base_path( 'routes/provider_api.php' ) );
	}


}
