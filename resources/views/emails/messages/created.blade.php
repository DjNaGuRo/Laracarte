@component('mail::message')
- {{$msg->name}}

- {{$msg->email}}
<hr>
@component('mail::panel')
{{$msg->message}}
@endcomponent

@component('mail::button', ['url' => ''])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
