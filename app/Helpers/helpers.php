<?php 
if (! function_exists('pageTitle')) {
	function pageTitle($title)
	{
		$base_title = 'Laracarte - List of artisans';
		if ($title === '') {
			return $base_title;
		}
		else{
			return $title . ' | ' . $base_title;
		}
	}
}