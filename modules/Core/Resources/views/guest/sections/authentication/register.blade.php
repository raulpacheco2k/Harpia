@extends('core::main.app')

@section('page')
    <div class="page page-center">
        <div class="container-tight py-4">
            {{ Form::open(['route' => 'register', 'class' => 'card card-md']) }}
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Cadastro</h2>

                <div class="mb-3">
                    {{ Form::label('first_name', 'Nome', ['class' => 'form-label required']) }}
                    {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) }}
                    <x-validate-field field="first_name"/>
                </div>

                <div class="mb-3">
                    {{ Form::label('last_name', 'Sobrenome', ['class' => 'form-label required']) }}
                    {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) }}
                    <x-validate-field field="last_name"/>
                </div>

                <div class="mb-3">
                    {{ Form::label('email', 'Email', ['class' => 'form-label required']) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    <x-validate-field field="email"/>
                </div>

                <div class="mb-3">
                    {{ Form::label('password', 'Senha', ['class' => 'form-label required']) }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) }}
                    <x-validate-field field="password"/>
                </div>

                <div class="mb-3">
                    {{ Form::label('password_confirmation', 'Confirmar senha', ['class' => 'form-label required']) }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirmar senha']) }}
                    <x-validate-field field="password_confirmation"/>
                </div>

            <!-- <div class="mb-3">
                    <label class="form-check">
                        {{ Form::checkbox('name', 'terms_of_service', false, ['class' => 'form-check-input']) }}
                <span class="form-check-label">Concordo com os <a href="./terms-of-service.html" tabindex="-1">termos e a política de privacidade</a>.</span>
            </label>
        </div> -->

                <div class="form-footer">
                    {{ Form::submit('Criar conta', ['class' => 'btn btn-primary w-100']) }}
                </div>
            </div>
            {{ Form::close() }}
            <div class="text-center text-muted mt-3">
                Já tem conta? <a href="{{ route('login') }}" tabindex="-1">Iniciar sessão</a>
            </div>
        </div>
    </div>
@endsection
