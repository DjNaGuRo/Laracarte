@extends('layouts.default', ['title' => 'About'])

@section('content')
	<div class="container-fluid">
		<h2>What is {{config('app.name')}}?</h2>
		<p>{{config('app.name')}} is a clone app of <a href="//laramap.com">Laramap.com</a>.</p>
		<p class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i>&nbsp;This app has been built by <a href="//github.com/DjNaGuRo/laracarte" target="_blank">@DjNaGuRo</a> for learning purposes.</p>
		<p>Fell free to help to improve the <a href="">source code</a>.</p>
		<hr>
		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>
		<p>More info <a href="//laramap.com">here</a>.</p>
		<hr>
		<h2>Which tools and services are used in {{config('app.name')}}?</h2>
		<p>Basically it's built on Laravel &amp; Bootstrap. But there are bunch of services used for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap</li>
			<li>Amazone S3</li>
			<li>Mandrill</li>
			<li>Google Maps</li>
			<li>Gravatar</li>
			<li>Antony Martin's Geolocalisation Package</li>
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
	</div>
@stop