<!doctype html>
<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113467793-4"></script>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login - Harpia </title>
    <link href="{{ asset('css/tabler.css') }}" rel="stylesheet"/>
</head>
<body class="border-top-wide border-primary d-flex flex-column">
<div class="page page-center">
    <div class="container-tight py-4">
        <form class="card card-md" action="." method="get" autocomplete="off">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Faça login na sua conta</h2>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Senha
                        <span class="form-label-description">
                  <a href="./forgot-password.html">Esqueci a senha</a>
                </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" placeholder="Senha" autocomplete="off">
                        <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                         stroke-linejoin="round"><desc>Download more icon variants from https://tabler-icons.io/i/eye</desc><path
                            stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2"/><path
                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/></svg>
                  </a>
                </span>
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Lembre-se de mim neste dispositivo</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Iniciar sessão</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Ainda não tem um conta? <a href="./sign-up.html" tabindex="-1">Cadastre-se</a>
        </div>
    </div>
</div>
</body>
</html>
