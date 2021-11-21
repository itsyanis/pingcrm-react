@component('mail::message')
# Hello Onepilot

The answer is 42.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Onepilot Teams
{{ config('app.name') }}
@endcomponent
