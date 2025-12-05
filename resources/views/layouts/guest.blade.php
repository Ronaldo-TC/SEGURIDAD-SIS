<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEGURIDAD-SIS') }}</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Estilos personalizados para auth -->
    <style>
        :root {
            --primary: #3b82f6;
            --secondary: #8b5cf6;
            --dark: #1e293b;
            --light: #f8fafc;
        }

        .auth-container {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--dark) 0%, #0f172a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-card {
            width: 100%;
            max-width: 420px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .auth-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 40px 30px;
            text-align: center;
            color: white;
        }

        .auth-logo {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .auth-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .auth-subtitle {
            font-size: 14px;
            opacity: 0.9;
        }

        .auth-body {
            padding: 40px 30px;
        }

        .auth-footer {
            padding: 20px 30px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 14px;
        }

        .auth-footer a {
            color: var(--primary);
            text-decoration: none;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: #cbd5e1;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.07);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: white;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .btn-auth {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-auth:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        .auth-link {
            color: var(--primary);
            text-decoration: none;
            font-size: 14px;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.2);
            color: #22c55e;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #ef4444;
        }

        .text-danger {
            color: #ef4444;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>

<body class="hold-transition">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-logo">
                    <i class="fas fa-shield-alt"></i>
                    SEGURIDAD SIS
                </div>
                <h2 class="auth-title">{{ $title ?? 'Autenticación' }}</h2>
                <p class="auth-subtitle">{{ $subtitle ?? 'Sistema de seguridad' }}</p>
            </div>

            <div class="auth-body">
                {{ $slot }}
            </div>

            @isset($footer)
            <div class="auth-footer">
                {{ $footer }}
            </div>
            @endisset
        </div>
    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>

    <!-- Scripts personalizados -->
    <script>
        $(document).ready(function() {
            // Animación de entrada
            $('.auth-card').hide().fadeIn(400);

            // Validación básica
            $('form').on('submit', function() {
                $(this).find('.btn-auth').prop('disabled', true).html(
                    '<i class="fas fa-spinner fa-spin"></i> Procesando...'
                );
            });

            // Efecto hover en inputs
            $('.form-control').hover(
                function() {
                    $(this).css('border-color', 'rgba(255, 255, 255, 0.3)');
                },
                function() {
                    if (!$(this).is(':focus')) {
                        $(this).css('border-color', 'rgba(255, 255, 255, 0.1)');
                    }
                }
            );
        });
    </script>
</body>

</html>