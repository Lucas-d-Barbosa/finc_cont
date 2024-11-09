@component('mail::message')
# Introdução

Obrigado por sua atenção.

@component('mail::button', ['url' => ''])
    Clique Aqui!
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
