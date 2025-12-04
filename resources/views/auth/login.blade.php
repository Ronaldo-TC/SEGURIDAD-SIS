<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEGURIDAD-SIS') }} - Iniciar Sesión</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|poppins:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    <style>
        :root {
            /* Paleta de colores corporativos para seguridad */
            --security-blue: #1e3a8a;
            --security-purple: #5b21b6;
            --security-dark: #0f172a;
            --security-light: #60a5fa;
            --security-accent: #8b5cf6;

            /* Tema de seguridad */
            --primary-50: #eff6ff;
            --primary-100: #dbeafe;
            --primary-200: #bfdbfe;
            --primary-300: #93c5fd;
            --primary-400: #60a5fa;
            --primary-500: #3b82f6;
            --primary-600: #2563eb;
            --primary-700: #1d4ed8;
            --primary-800: #1e40af;
            --primary-900: #1e3a8a;
            --primary-950: #172554;

            --secondary-50: #f5f3ff;
            --secondary-100: #ede9fe;
            --secondary-200: #ddd6fe;
            --secondary-300: #c4b5fd;
            --secondary-400: #a78bfa;
            --secondary-500: #8b5cf6;
            --secondary-600: #7c3aed;
            --secondary-700: #6d28d9;
            --secondary-800: #5b21b6;
            --secondary-900: #4c1d95;
            --secondary-950: #2e1065;

            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --gray-950: #030712;

            --success-500: #10b981;
            --warning-500: #f59e0b;
            --error-500: #ef4444;

            /* Gradientes de seguridad */
            --gradient-security: linear-gradient(135deg, var(--security-blue) 0%, var(--security-purple) 100%);
            --gradient-dark: linear-gradient(135deg, var(--primary-900) 0%, var(--secondary-950) 100%);
            --gradient-accent: linear-gradient(135deg, var(--primary-600) 0%, var(--secondary-600) 100%);

            /* Sombras */
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --shadow-glow: 0 0 20px rgba(59, 130, 246, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: var(--gradient-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Fondos decorativos con temática de seguridad */
        .background-shapes {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            filter: blur(60px);
            opacity: 0.1;
        }

        .shape-1 {
            width: 600px;
            height: 600px;
            top: -300px;
            right: -200px;
            background: var(--primary-600);
            border-radius: 50%;
        }

        .shape-2 {
            width: 500px;
            height: 500px;
            bottom: -250px;
            left: -150px;
            background: var(--secondary-700);
            border-radius: 50%;
        }

        .shape-3 {
            width: 300px;
            height: 300px;
            top: 50%;
            left: 10%;
            background: var(--primary-400);
            border-radius: 50%;
            opacity: 0.08;
        }

        /* Patrones de seguridad (líneas de circuito) */
        .circuit-lines {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.03;
        }

        .circuit-line {
            position: absolute;
            background: var(--primary-400);
            opacity: 0.5;
        }

        /* Contenedor principal con estilo de seguridad */
        .login-container {
            width: 100%;
            max-width: 460px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 48px 40px;
            box-shadow: var(--shadow-xl), var(--shadow-glow);
            border: 1px solid rgba(59, 130, 246, 0.2);
            position: relative;
            overflow: hidden;
        }

        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-accent);
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }

        .login-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 1px solid rgba(59, 130, 246, 0.1);
            border-radius: 20px;
            pointer-events: none;
        }

        /* Header con temática de seguridad */
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            margin-bottom: 24px;
            position: relative;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient-accent);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            font-weight: 700;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
            position: relative;
            overflow: hidden;
        }

        .logo-icon::before {
            content: '🔒';
            font-size: 24px;
        }

        .logo-icon::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
        }

        .logo-text {
            font-family: 'Poppins', sans-serif;
            font-size: 36px;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-400), var(--secondary-400));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 10px rgba(59, 130, 246, 0.3);
            letter-spacing: -0.5px;
        }

        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .login-subtitle {
            font-size: 14px;
            color: var(--gray-400);
            font-weight: 400;
            max-width: 280px;
            margin: 0 auto;
            line-height: 1.5;
        }

        /* Status Message */
        .auth-status {
            background: rgba(16, 185, 129, 0.15);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 12px;
            padding: 14px 18px;
            margin-bottom: 24px;
            color: #10b981;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
            backdrop-filter: blur(10px);
        }

        .auth-status::before {
            content: '🔐';
            font-size: 16px;
        }

        /* Formulario */
        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 28px;
            position: relative;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 600;
            color: var(--gray-300);
            margin-bottom: 10px;
            transition: color 0.2s;
        }

        .form-label-icon {
            width: 16px;
            height: 16px;
            color: var(--primary-400);
        }

        .form-label:hover {
            color: white;
        }

        .input-container {
            position: relative;
            transition: transform 0.3s;
        }

        .input-container:hover {
            transform: translateY(-2px);
        }

        .form-input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            background: rgba(30, 41, 59, 0.7);
            border: 2px solid rgba(59, 130, 246, 0.2);
            border-radius: 12px;
            font-size: 15px;
            color: white;
            transition: all 0.3s ease;
            outline: none;
            font-family: 'Inter', sans-serif;
        }

        .form-input:focus {
            border-color: var(--primary-500);
            background: rgba(30, 41, 59, 0.9);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1), 0 0 20px rgba(59, 130, 246, 0.2);
        }

        .form-input:hover {
            border-color: rgba(59, 130, 246, 0.4);
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-400);
            transition: color 0.3s;
            width: 20px;
            height: 20px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        .form-input:focus+.input-icon {
            color: var(--primary-300);
            animation: pulse 1.5s infinite;
        }

        /* Error Messages */
        .error-messages {
            margin-top: 8px;
        }

        .error-message {
            font-size: 13px;
            color: #f87171;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
            padding: 6px 10px;
            background: rgba(239, 68, 68, 0.1);
            border-radius: 6px;
            border-left: 3px solid #ef4444;
        }

        .error-message::before {
            content: '⚠';
            font-size: 12px;
            font-weight: bold;
        }

        /* Checkbox personalizado */
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .checkbox-input {
            display: none;
        }

        .checkbox-custom {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(59, 130, 246, 0.3);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            position: relative;
            flex-shrink: 0;
            background: rgba(30, 41, 59, 0.5);
        }

        .checkbox-custom::after {
            content: '✓';
            color: white;
            font-size: 12px;
            font-weight: bold;
            transform: scale(0);
            transition: transform 0.3s;
        }

        .checkbox-input:checked+.checkbox-custom {
            background: var(--gradient-accent);
            border-color: var(--primary-500);
        }

        .checkbox-input:checked+.checkbox-custom::after {
            transform: scale(1);
        }

        .checkbox-label {
            color: var(--gray-300);
            font-size: 14px;
            cursor: pointer;
            user-select: none;
            transition: color 0.3s;
        }

        .checkbox-label:hover {
            color: white;
        }

        /* Botones y acciones */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .forgot-password {
            color: var(--primary-300);
            font-size: 14px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 8px;
            background: rgba(59, 130, 246, 0.1);
        }

        .forgot-password:hover {
            color: var(--primary-200);
            background: rgba(59, 130, 246, 0.2);
            transform: translateX(4px);
        }

        .login-button {
            background: var(--gradient-accent);
            color: white;
            border: none;
            padding: 16px 36px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 140px;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(59, 130, 246, 0.5);
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .button-icon {
            width: 20px;
            height: 20px;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
        }

        /* Footer */
        .login-footer {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid rgba(59, 130, 246, 0.1);
            color: var(--gray-500);
            font-size: 14px;
        }

        .footer-link {
            color: var(--primary-300);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .footer-link:hover {
            color: var(--primary-200);
        }

        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--primary-300);
            transition: width 0.3s;
        }

        .footer-link:hover::after {
            width: 100%;
        }

        /* Indicador de seguridad */
        .security-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
            padding: 12px;
            background: rgba(59, 130, 246, 0.05);
            border-radius: 10px;
            border: 1px solid rgba(59, 130, 246, 0.1);
        }

        .security-icon {
            color: var(--primary-400);
            font-size: 16px;
        }

        .security-text {
            font-size: 12px;
            color: var(--gray-400);
        }

        /* Responsive */
        @media (max-width: 520px) {
            .login-container {
                padding: 32px 24px;
                margin: 0 16px;
            }

            .logo-text {
                font-size: 28px;
            }

            .login-title {
                font-size: 24px;
            }

            .form-actions {
                flex-direction: column;
                gap: 20px;
                align-items: stretch;
            }

            .forgot-password {
                order: 2;
                justify-content: center;
            }

            .login-button {
                order: 1;
                width: 100%;
            }

            .shape-1,
            .shape-2 {
                display: none;
            }
        }

        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .login-container {
            animation: fadeInUp 0.6s ease-out;
        }

        .logo-icon {
            animation: float 3s ease-in-out infinite;
        }

        /* Dark mode adjustments */
        @media (prefers-color-scheme: dark) {
            .login-container {
                background: rgba(15, 23, 42, 0.9);
            }

            .form-input {
                background: rgba(30, 41, 59, 0.8);
            }
        }

        /* Loading state */
        .loading {
            opacity: 0.8;
            pointer-events: none;
        }

        /* Efecto de brillo en el borde */
        .glow-border {
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: var(--gradient-accent);
            border-radius: 22px;
            z-index: -1;
            filter: blur(10px);
            opacity: 0.3;
            animation: pulse 2s infinite;
        }
    </style>
</head>

<body>
    <!-- Fondos decorativos -->
    <div class="background-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Efecto de borde brillante -->
    <div class="glow-border"></div>

    <div class="login-container">
        <!-- Header -->
        <div class="login-header">
            <div class="logo">
                <div class="logo-icon"></div>
                <span class="logo-text">SEGURIDAD SIS</span>
            </div>
            <h1 class="login-title">Acceso Seguro</h1>
            <p class="login-subtitle">Autentícate para acceder al sistema de seguridad</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
        <div class="auth-status">
            {{ session('status') }}
        </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}" class="login-form" id="loginForm">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    Correo Electrónico
                </label>
                <div class="input-container">
                    <input id="email"
                        class="form-input"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="usuario@seguridadsis.com">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                @if ($errors->has('email'))
                <div class="error-messages">
                    @foreach ($errors->get('email') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">
                    <svg class="form-label-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    Contraseña
                </label>
                <div class="input-container">
                    <input id="password"
                        class="form-input"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="••••••••••••">
                    <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                @if ($errors->has('password'))
                <div class="error-messages">
                    @foreach ($errors->get('password') as $error)
                    <div class="error-message">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="checkbox-container">
                <input id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="checkbox-input">
                <label for="remember_me" class="checkbox-custom"></label>
                <label for="remember_me" class="checkbox-label">Recordar esta sesión</label>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                @if (Route::has('password.request'))
                <a class="forgot-password" href="{{ route('password.request') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 12h8"></path>
                    </svg>
                    ¿Olvidaste tu contraseña?
                </a>
                @endif

                <button type="submit" class="login-button" id="loginButton">
                    <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                    </svg>
                    Iniciar Sesión
                </button>
            </div>
        </form>

        <!-- Indicador de seguridad -->
        <div class="security-indicator">
            <span class="security-icon">🔒</span>
            <span class="security-text">Conexión segura encriptada con SSL</span>
        </div>

        <!-- Footer -->
        <div class="login-footer">
            @if (Route::has('register'))
            <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="footer-link">Regístrate aquí</a></p>
            @endif
        </div>
    </div>

    <!-- Scripts mejorados -->
    <script>
        // Validación mejorada en tiempo real
        function validarFormulario() {
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const boton = document.getElementById('loginButton');

            const emailValido = email.value && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
            const passwordValido = password.value.length >= 8;

            const esValido = emailValido && passwordValido;

            // Actualizar estado del botón
            boton.disabled = !esValido;
            boton.style.opacity = esValido ? '1' : '0.7';
            boton.style.cursor = esValido ? 'pointer' : 'not-allowed';

            // Validación visual de email
            if (email.value && !emailValido) {
                email.style.borderColor = '#ef4444';
                email.style.boxShadow = '0 0 0 4px rgba(239, 68, 68, 0.1)';
            } else if (email.value && emailValido) {
                email.style.borderColor = '#10b981';
                email.style.boxShadow = '0 0 0 4px rgba(16, 185, 129, 0.1)';
            }

            // Validación visual de password
            if (password.value && !passwordValido) {
                password.style.borderColor = '#f59e0b';
                password.style.boxShadow = '0 0 0 4px rgba(245, 158, 11, 0.1)';
            } else if (password.value && passwordValido) {
                password.style.borderColor = '#10b981';
                password.style.boxShadow = '0 0 0 4px rgba(16, 185, 129, 0.1)';
            }

            return esValido;
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const formInputs = document.querySelectorAll('.form-input');

            // Event Listeners para validación en tiempo real
            emailInput.addEventListener('input', validarFormulario);
            passwordInput.addEventListener('input', validarFormulario);

            // Efectos visuales mejorados
            formInputs.forEach(input => {
                // Efecto de enfoque
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-4px) scale(1.02)';
                    this.style.boxShadow = '0 0 0 4px rgba(59, 130, 246, 0.2), 0 10px 20px rgba(0, 0, 0, 0.2)';
                });

                // Efecto al perder enfoque
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '';
                    validarFormulario();
                });

                // Efecto hover
                input.addEventListener('mouseenter', function() {
                    if (document.activeElement !== this) {
                        this.style.transform = 'translateY(-2px)';
                        this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
                    }
                });

                input.addEventListener('mouseleave', function() {
                    if (document.activeElement !== this) {
                        this.style.transform = 'translateY(0)';
                        this.style.boxShadow = '';
                    }
                });
            });

            // Validación inicial
            validarFormulario();

            // Efecto de carga en el envío del formulario
            const formulario = document.getElementById('loginForm');
            formulario.addEventListener('submit', function(e) {
                if (!validarFormulario()) {
                    e.preventDefault();

                    // Animación de shake para campos inválidos
                    const camposInvalidos = [];
                    if (!emailInput.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                        camposInvalidos.push(emailInput);
                    }
                    if (!passwordInput.value || passwordInput.value.length < 8) {
                        camposInvalidos.push(passwordInput);
                    }

                    camposInvalidos.forEach(campo => {
                        campo.style.animation = 'shake 0.5s';
                        setTimeout(() => {
                            campo.style.animation = '';
                        }, 500);
                    });

                    return false;
                }

                // Mostrar estado de carga
                const boton = document.getElementById('loginButton');
                boton.classList.add('loading');
                boton.innerHTML = `
                    <svg class="button-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" stroke-dasharray="30" stroke-dashoffset="30">
                            <animate attributeName="stroke-dashoffset" values="30;0;30" dur="1.5s" repeatCount="indefinite" />
                        </circle>
                    </svg>
                    Verificando identidad...
                `;
            });

            // Efecto hover para el contenedor principal
            const container = document.querySelector('.login-container');
            container.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.01)';
                this.style.boxShadow = '0 30px 60px rgba(0, 0, 0, 0.3), 0 0 30px rgba(59, 130, 246, 0.4)';
            });

            container.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = 'var(--shadow-xl), var(--shadow-glow)';
            });

            // Efecto de parpadeo para el icono de seguridad
            const securityIcon = document.querySelector('.security-icon');
            setInterval(() => {
                securityIcon.style.opacity = securityIcon.style.opacity === '0.7' ? '1' : '0.7';
            }, 1500);

            // Toggle para mostrar/ocultar contraseña
            const passwordContainer = document.querySelector('.input-container');
            const toggleBtn = document.createElement('button');
            toggleBtn.type = 'button';
            toggleBtn.innerHTML = '👁️';
            toggleBtn.style.cssText = `
                position: absolute;
                right: 12px;
                top: 50%;
                transform: translateY(-50%);
                background: none;
                border: none;
                color: var(--primary-400);
                cursor: pointer;
                font-size: 18px;
                padding: 4px;
                opacity: 0.6;
                transition: opacity 0.3s;
            `;
            toggleBtn.addEventListener('mouseenter', function() {
                this.style.opacity = '1';
            });
            toggleBtn.addEventListener('mouseleave', function() {
                this.style.opacity = '0.6';
            });
            toggleBtn.addEventListener('click', function() {
                const type = passwordInput.type === 'password' ? 'text' : 'password';
                passwordInput.type = type;
                this.innerHTML = type === 'password' ? '👁️' : '👁️‍🗨️';
            });

            if (passwordContainer) {
                passwordContainer.appendChild(toggleBtn);
            }

            // Agregar animación de shake
            const style = document.createElement('style');
            style.textContent = `
                @keyframes shake {
                    0%, 100% { transform: translateX(0); }
                    10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                    20%, 40%, 60%, 80% { transform: translateX(5px); }
                }
            `;
            document.head.appendChild(style);
        });

        // Detectar si el usuario tiene autocompletado
        setTimeout(() => {
            const email = document.getElementById('email');
            if (email.value) {
                email.style.borderColor = '#10b981';
                email.style.background = 'rgba(16, 185, 129, 0.1)';
            }
        }, 500);
    </script>
</body>

</html>