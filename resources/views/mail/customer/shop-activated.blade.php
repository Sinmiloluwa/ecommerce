@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => route('shops.show', $shop->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
