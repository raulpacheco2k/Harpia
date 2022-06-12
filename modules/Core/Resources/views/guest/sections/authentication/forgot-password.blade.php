@extends('core::main.app')

@section('title', 'Esqueci a senha')

@section('page')
    <div class="page page-center">
        <div class="container-tight py-4">
            {{ Form::open(['route' => 'password.request', 'class' => 'card card-md']) }}
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Esqueci a senha</h2>
                <div class="mb-3">
                    {{ Form::label('email', 'Email', ['class' => 'form-label required']) }}
                    {{ Form::email('email', null, ['class' => 'form-control ' . ($errors->has('email') ? ' is-invalid' : null), 'placeholder' => 'Email']) }}
                    <x-validate-field field="email"/>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <desc>Download more icon variants from https://tabler-icons.io/i/mail</desc>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <polyline points="3 7 12 13 21 7"></polyline>
                        </svg>
                        Enviar e-mail de redefinição de senha
                    </button>
                </div>
                @if(session('status'))
                    <div class="mt-3 alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            {{ Form::close() }}

            <div class="text-center text-muted mt-3">
                Lembrei a senha, <a href="{{ route('login') }}">voltar para o login</a>.
            </div>
        </div>
    </div>
@endsection
