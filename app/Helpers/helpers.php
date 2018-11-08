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

/* Check if an error exists for the specified attribute past and return the class "haserror" or empty string otherwise */
// if (! function_exists('has_error')) {
// 	function has_error($attribute)
// 	{
// 		return $errors->has($attribute) ? 'has-error' : '';
// 	}
// }