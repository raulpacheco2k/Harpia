@extends('core::main.app')

@include('core::main.menu')

@section('page')
    <div class="page">
        <div class="page-wrapper">
            <div class="container-xl">
                <div class="page-header d-print-none text-white">
                    <div class="row g-2 align-items-center">
                        @yield('submenu')
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
