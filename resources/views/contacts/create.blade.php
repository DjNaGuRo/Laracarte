@extends('layouts.default')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<h1>Get In Touch</h1>
				<p class="text-muted">If you have trouble with the service, please <a href="mailto:{{config('laracarte.admin_support_email')}}">ask for help</a></p>

				<form action="{{route('contacts.store')}}" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<label class="col-form-label" for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name')}}">
						{!!$errors->first(
							'name',
							 '<span class="form-text invalid-feedback">
							 								<i class="fa fa-exclamation-triangle"></i>&nbsp; :message
							 							</span>')!!}
					</div>
					<div class="form-group ">
						<label class="col-form-label" for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email')}}">
						{!!$errors->first(
							'email',
							 '<span class="form-text invalid-feedback">
							 								<i class="fa fa-exclamation-triangle"></i>&nbsp; :message
							 							</span>')!!}
					</div>
					<div class="form-group ">
						<label class="col-form-label sr-only" for="message">Message</label>
						<textarea class="form-control {{$errors->has('message') ? 'is-invalid' : ''}}" cols="10" rows="7" name="message" id="message" placeholder="Set a message here...">{{old('message')}}</textarea>
						{!!$errors->first(
							'message',
							 '<span class="invalid-feedback">
							 								<i class="fa fa-exclamation-triangle"></i>&nbsp; :message
							 							</span>')!!}
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit Enquiry &raquo;" class="btn btn-secondary btn-block">
					</div>
				</form>
			</div>
		</div>
	</div>
@stop