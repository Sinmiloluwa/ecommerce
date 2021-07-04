@component('mail::message')
# Congratulations

Your shop is now active.

@component('mail::button', ['url' => url('admin/shops')])
Visit your shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
