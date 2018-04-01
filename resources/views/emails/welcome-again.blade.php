@component('mail::message')
# Introduction

  Laraval from scratch - laracasts

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
