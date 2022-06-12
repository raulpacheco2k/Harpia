<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('core::main.head.title')
    @include('core::main.head.css')
    @include('core::main.head.meta')
</head>
<body>
@yield('page')
@include('core::main.footer.js')
@stack('scripts')
</body>
</html>
