@component('mail::message')
# {{ $guest->name }}
# {{ $event->name }}
# {{ $code }}

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
