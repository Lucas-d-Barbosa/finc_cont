@extends('app.layout.basico')
@section('title', 'Receitas')

@section('conteudo')
    <div class="w-100 d-flex flex-column align-items-center justify-content-center gap-4">
        @component('app.receita._components.form_create_edit', ['tipo_receitas' => $tipo_receitas])
        
        @endcomponent
    </div>
@endsection