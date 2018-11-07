<?php 
if (! function_exists('pageTitle')) {
	function pageTitle($title)
	{
		$base_title = config('app.name') .' - List of artisans';
		if ($title === '') {
			return $base_title;
		}
		else{
			return $title . ' | ' . $base_title;
		}
	}
}

/* Active le menu correspondant à la route courante */
if (! function_exists('set_active_route')) {
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}