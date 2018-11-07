@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<h1>Get In Touch</h1>
				<p class="text-muted">If you have trouble with the service, please <a href="mailto:nanaguyrostan@yahoo.com">ask for help</a></p>

				<form action="#" method="">
					{{csrf_field()}}
					<div class="form-group">
						<label class="label-control" for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<label class="label-control" for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="label-control sr-only" for="message">Message</label>
						<textarea class="form-control" cols="10" rows="10" name="message" id="message">Set a message here...</textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit Enquiry".&raquo; class="btn btn-secondary btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop