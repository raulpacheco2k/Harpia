@extends('core::main.app')

@section('title', 'Redefinição de senha')

@section('page')
    <div class="page page-center">
        <div class="container-tight py-4">
            {{ Form::open(['route' => 'password.update', 'class' => 'card card-md']) }}
            {{ Form::text('token', request()->token, ['class' => 'form-control', 'readonly', 'hidden']) }}
            <div class="card-body text-center">
                <div class="mb-4">
                    <h2 class="card-title">Redefinição de senha</h2>
                    <p class="text-muted">Digite a nova senha e clique em refinir senha para alterar a senha.</p>
                </div>
                <div class="mb-4 text-start">
                    {{ Form::label('email', 'E-mail') }}
                    {{ Form::email('email', request()->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : null), 'readonly']) }}
                    <x-validate-field field="email"/>
                </div>
                <div class="mb-4 text-start">
                    {{ Form::label('password', 'Senha', ['class' => 'form-label required']) }}
                    {{ Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : null), 'placeholder' => 'Senha', 'autofocus' => true]) }}
                    <x-validate-field field="password"/>
                </div>
                <div class="mb-4 text-start">
                    {{ Form::label('password_confirmation', 'Confirmação de senha', ['class' => 'form-label required']) }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : null), 'placeholder' => 'Confirmação de senha']) }}
                    <x-validate-field field="password_confirmation"/>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary w-100">
                        Redefinir senha
                    </button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
