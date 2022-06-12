@extends('core::main.app')

@section('title', 'Login')

@section('page')
    <div class="page page-center">
        <div class="container-tight py-4">
            {{ Form::open(['route' => 'login', 'class' => 'card card-md']) }}
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <div class="mb-3">
                    {{ Form::label('email', 'Email', ['class' => 'form-label required']) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    <x-validate-field field="email"/>

                </div>
                <div class="mb-2">
                    {{ Form::label('password', 'Senha', ['class' => 'form-label required']) }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) }}
                    <x-validate-field field="password"/>

                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Lembre-se de mim neste dispositivo</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Iniciar sessão</button>
                    <a href="{{ route('password.request') }}" class="btn w-100 mt-3">Esqueci a senha</a>
                </div>
            </div>
            {{ Form::close() }}
            <div class="text-center text-muted mt-3">
                Ainda não tem um conta? <a href="{{ route('register') }}" tabindex="-1">Cadastre-se</a>
            </div>
        </div>
    </div>
@endsection
